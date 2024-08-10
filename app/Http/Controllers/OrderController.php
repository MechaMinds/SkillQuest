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
        $product = [
            'id' => 1,
            'name' => 'Course - Belajar Bahasa Pemrograman Python',
            'price' => 150000
        ];

        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');

        $orderId = uniqid();
        $user = Auth::user();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $product['price'],
            ],
            'item_details' => [
                [
                    'id' => $product['id'],
                    'price' => $product['price'],
                    'quantity' => 1,
                    'name' => $product['name'],
                ],
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone, // Pastikan kolom phone ada di tabel users
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            // Simpan data pembelian ke database
            Order::create([
                'order_id' => $orderId,
                'product_name' => $product['name'],
                'price' => $product['price'],
                'customer_name' => $user->name,
                'customer_email' => $user->email,
                'status' => 'pending', // Status awal
                'customer_id' => $user->id, // Menyimpan ID pengguna yang sedang login
            ]);

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
        }

        return response()->json(['message' => 'Order status updated']);
    }
    public function showOrders()
    {
        $orderList = \App\Models\Order::all();
        return view('pages.profile.riwayatTransaksi', compact('orderList'));
    }
}
