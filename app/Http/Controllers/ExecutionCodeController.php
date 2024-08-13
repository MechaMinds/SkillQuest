<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExecutionCodeController extends Controller
{
    public function executePython(Request $request)
    {
        $code = $request->input('code');

        try {
            // Kirim permintaan ke JDoodle API
            $response = Http::post('https://api.jdoodle.com/v1/execute', [
                'clientId' => 'bd8afa49fb8c0456eec4912ed093c121',
                'clientSecret' => 'cfae2197973678b74923cc078c494f2ce5c6d12fc2f056cdba3c0d201c76dbd9',
                'script' => $code,
                'language' => 'python3',
                'versionIndex' => '3',
            ]);

            $output = $response->json();

            return response()->json([
                'output' => $output['output'] ?? 'No output',
                'error' => $output['error'] ?? ''
            ]);

        } catch (\Exception $e) {
            return response()->json(['output' => 'Internal Server Error'], 500);
        }
    }
}

