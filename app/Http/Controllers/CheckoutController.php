<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function createOrder(Request $request)
    {
        $productId = $request->input('product_id');

        // Daftar produk
        $products = [
            ['id' => 1, 'name' => 'Belajar Bahasa Pemrograman Python', 'price' => 500000],
            ['id' => 2, 'name' => 'Belajar Laravel', 'price' => 600000]
        ];

        // Cari produk berdasarkan ID
        $product = collect($products)->firstWhere('id', $productId);

        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Produk tidak ditemukan.'], 404);
        }

        // Menghitung harga setelah diskon
        $discountCode = $request->session()->get('discount_code', '');
        $discount = \App\Models\Discount::where('code', $discountCode)->first();
        $discountAmount = 0;

        if ($discount) {
            $discountAmount = $product['price'] * ($discount->amount / 100); // Potongan diskon dalam persen
        }

        // Menghitung PPN (misalnya 11%)
        $vatRate = 0.11;
        $vatAmount = $product['price'] * $vatRate;

        // Menghitung harga total
        $totalPrice = $product['price'] + $vatAmount - $discountAmount;

        $orderId = uniqid();
        $user = Auth::user();

        // Detail item, dengan total price yang dihitung di atas
        $itemDetails = [
            [
                'id' => $product['id'],
                'price' => $totalPrice, // Menggunakan total price sebagai harga item
                'quantity' => 1,
                'name' => $product['name'],
            ]
        ];

        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $totalPrice, // Gunakan total price sebagai gross amount
            ],
            'item_details' => $itemDetails,
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone,
            ],
            'return_url' => url('/course/belajar-bahasa-pemrograman-python/persiapan'), // URL tujuan setelah pembayaran berhasil
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            // Simpan order ke database
            Order::create([
                'order_id' => $orderId,
                'product_name' => $product['name'],
                'price' => $totalPrice, // Simpan total price sebagai harga
                'customer_name' => $user->name,
                'customer_email' => $user->email,
                'status' => 'pending',
                'customer_id' => $user->id,
                'payment_method' => null,
            ]);

            // Reset kode diskon di session
            $request->session()->forget('discount_code');

            return response()->json(['success' => true, 'snap_token' => $snapToken, 'order_id' => $orderId]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }


    public function getOrderStatus()
    {
        $userId = Auth::id();
        $order = Order::where('customer_id', $userId)
                        ->where('status', 'success')
                        ->first(); // Ambil pesanan terakhir dengan status 'success'

        if ($order) {
            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'pending']); // Default jika tidak ada pesanan dengan status 'success'
    }

    public function updateOrderStatus(Request $request)
    {
        $orderId = $request->input('order_id');
        $status = $request->input('status'); // Misalnya, 'success' atau 'failed'

        $order = Order::where('order_id', $orderId)->first();
        if ($order) {
            $order->status = $status;
            $order->save();

            if ($status === 'success') {
                // Redirection logic
                return response()->json(['redirect' => '/course/belajar-bahasa-pemrograman-python/persiapan']);
            }
        }

        return response()->json(['message' => 'Order status updated']);
    }   
    
    public function checkout(Request $request)
    {
        $productId = $request->query('id');
        $discountCode = $request->session()->get('discount_code', '');

        // Jika pengguna tidak berada di URL '/checkout?id=', reset kode diskon
        if ($request->query('id') != 1) {
            $request->session()->forget('discount_code');
            $discountCode = ''; // Reset discount code variable for the view
        }

        // Daftar produk
        $products = [
            ['id' => 1, 'name' => 'Belajar Bahasa Pemrograman Python', 'price' => 500000],
            ['id' => 2, 'name' => 'Belajar Laravel', 'price' => 600000]
        ];

        // Cari produk berdasarkan ID
        $product = collect($products)->firstWhere('id', $productId);

        if (!$product) {
            return redirect()->route('home')->with('error', 'Produk tidak ditemukan.');
        }

        // Validasi kode diskon
        $discount = \App\Models\Discount::where('code', $discountCode)->first();
        $discountAmount = 0;

        if ($discount) {
            $discountAmount = $product['price'] * ($discount->amount / 100); // Potongan diskon dalam persen
        }

        // Menghitung PPN
        $vatRate = 0.11;
        $vatAmount = $product['price'] * $vatRate;

        // Menghitung harga total
        $totalPrice = $product['price'] + $vatAmount - $discountAmount;

        return view('pages.payment.checkout', [
            'product' => $product,
            'productId' => $productId,
            'discountCode' => $discountCode,
            'discountAmount' => $discountAmount,
            'vatAmount' => $vatAmount,
            'totalPrice' => $totalPrice
        ]);
    }


    public function applyDiscount(Request $request)
    {
        $discountCode = $request->input('discount_code');
        $discount = \App\Models\Discount::where('code', $discountCode)->first();

        if ($discount) {
            $request->session()->put('discount_code', $discountCode);
        } else {
            $request->session()->forget('discount_code');
        }

        return redirect()->route('checkout', ['id' => $request->input('product_id')]);
    }

    public function resetDiscount($id)
    {
        $redirectUrl = '';

        // Tentukan URL tujuan berdasarkan id
        switch ($id) {
            case 1:
                $redirectUrl = '/course/belajar-bahasa-pemrograman-python';
                break;
            case 2:
                $redirectUrl = '/course/belajar-framework-laravel';
                break;
            default:
                // URL default jika id tidak cocok
                $redirectUrl = '/';
                break;
        }

        // Reset kode diskon dari session
        session()->forget('discount_code');

        return redirect($redirectUrl);
    }
}
