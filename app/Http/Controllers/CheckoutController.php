<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
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
        }

        return response()->json(['message' => 'Order status updated']);
    }
    
    public function checkout(Request $request)
    {
        $productId = $request->query('id'); // Ambil ID dari query parameter
        $discountCode = $request->session()->get('discount_code', ''); // Ambil kode diskon dari session jika ada

        // Daftar produk
        $products = [
            [
                'id' => 1,
                'name' => 'Belajar Bahasa Pemrograman Python',
                'price' => 500000
            ],
            [
                'id' => 2,
                'name' => 'Belajar Laravel',
                'price' => 600000
            ]
        ];

        // Cari produk berdasarkan ID
        $product = collect($products)->firstWhere('id', $productId);

        if (!$product) {
            return redirect()->route('home')->with('error', 'Produk tidak ditemukan.');
        }

        // Menghitung harga setelah diskon
        $discountAmount = 0;
        if ($discountCode === 'DISKON10') { // Contoh pengecekan kode diskon
            $discountAmount = $product['price'] * 0.1; // Diskon 10%
        }

        // Menghitung PPN (misalnya 11%)
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
        
        // Simpan kode diskon di session
        $request->session()->put('discount_code', $discountCode);

        // Redirect ke halaman checkout dengan query ID produk
        return redirect()->route('checkout', ['id' => $request->input('product_id')]);
    }

}
