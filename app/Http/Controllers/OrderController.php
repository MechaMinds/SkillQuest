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
        $products = [
            [
                'id' => 1,
                'name' => 'Course - Belajar Bahasa Pemrograman Python',
                'price' => 500000
            ],
            [
                'id' => 2,
                'name' => 'Course - Belajar Laravel',
                'price' => 600000
            ]
        ];

        $orderId = uniqid();
        $user = Auth::user();

        $itemDetails = [];
        $grossAmount = 0;

        foreach ($products as $product) {
            $itemDetails[] = [
                'id' => $product['id'],
                'price' => $product['price'],
                'quantity' => 1,
                'name' => $product['name'],
            ];
            $grossAmount += $product['price'];
        }

        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $grossAmount,
            ],
            'item_details' => $itemDetails,
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);

            foreach ($products as $product) {
                Order::create([
                    'order_id' => $orderId,
                    'product_name' => $product['name'],
                    'price' => $product['price'],
                    'customer_name' => $user->name,
                    'customer_email' => $user->email,
                    'status' => 'pending',
                    'customer_id' => $user->id,
                    'payment_method' => null,
                ]);
            }

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
    
    public function checkout(Request $request)
    {
        $productId = $request->query('id'); // Ambil ID dari query parameter

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

        // Jika produk tidak ditemukan
        if (!$product) {
            return abort(404); // atau kembali dengan pesan error
        }

        // Kirim data produk ke view
        return view('pages.payment.checkout', [
            'product' => $product,
            'productId' => $productId
        ]);
    } 
}
