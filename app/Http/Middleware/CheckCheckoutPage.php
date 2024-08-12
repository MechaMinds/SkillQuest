<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCheckoutPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek jika URL tidak mengandung '/checkout?id=1'
        if (!$request->is('checkout') || $request->query('id') != 1) {
            // Hapus kode diskon dari session
            $request->session()->forget('discount_code');
        }

        return $next($request);
    }
}
