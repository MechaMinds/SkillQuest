<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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

    public function showOrders()
    {
        $userId = Auth::id(); // Get the logged-in user's ID
        $orderList = Order::where('customer_id', $userId)->get(); // Get orders for the logged-in user

        return view('pages.profile.riwayatTransaksi', compact('orderList'));
    }
}
