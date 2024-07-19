<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        // Data produk tunggal
        $product = [
            'id' => 1,
            'name' => 'Course - Belajar Bahasa Pemrograman Python',
            'price' => 150000
        ];

        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = config('services.midtrans.is_sanitized');
        Config::$is3ds = config('services.midtrans.is_3ds');

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
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
                'first_name' => 'Riovaldo Alfiyan Fahmi',
                'last_name' => 'Rahman',
                'email' => 'rriovld@gmail.com',
                'phone' => '081234567890',
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}



