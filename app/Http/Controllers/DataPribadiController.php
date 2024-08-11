<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataPribadiController extends Controller
{
    public function show()
    {
        // Fetch data provinsi dari API RajaOngkir
        $response = Http::withHeaders([
            'key' => 'b3b9be5348ad8db5d4cafbe4a671e1da' // Ganti dengan API key Anda
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response->json()['rajaongkir']['results'];

        return view('pages.profile.dataPribadi', compact('provinces'));
    }
}
