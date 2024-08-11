<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataPribadiController extends Controller
{
    public function showProvinsi()
    {
        // Fetch data provinsi dari API RajaOngkir
        $response = Http::withHeaders([
            'key' => 'b3b9be5348ad8db5d4cafbe4a671e1da' // Ganti dengan API key Anda
        ])->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response->json()['rajaongkir']['results'];

        return view('pages.profile.dataPribadi', compact('provinces'));
    }

    public function getCities(Request $request)
    {
        $provinceId = $request->query('province_id');
        if ($provinceId) {
            // Ganti URL API dan API key sesuai dengan kebutuhan Anda
            $response = Http::withHeaders([
                'key' => 'b3b9be5348ad8db5d4cafbe4a671e1da',
            ])->get("https://api.rajaongkir.com/starter/city?province={$provinceId}");

            return response()->json($response->json()['rajaongkir']['results']);
        }

        return response()->json([]);
    }

    public function getPostalCodes(Request $request)
    {
        $cityId = $request->query('city_id');
        if ($cityId) {
            // Ganti URL API dan API key sesuai dengan kebutuhan Anda
            $response = Http::withHeaders([
                'key' => 'b3b9be5348ad8db5d4cafbe4a671e1da',
            ])->get("https://api.rajaongkir.com/starter/city?id={$cityId}");

            // Pastikan response JSON sesuai dengan format yang Anda butuhkan
            $data = $response->json();
            return response()->json($data);
        }

        return response()->json([]);
    }
}
