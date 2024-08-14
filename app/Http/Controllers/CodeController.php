<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Http facade

class CodeController extends Controller
{
    public function runPythonCode(Request $request)
    {
        $code = $request->input('code');
        $clientId = 'bd8afa49fb8c0456eec4912ed093c121';
        $clientSecret = '95c897580a48044d7829b45ffeb21a79d742d5b019e9bafc7bd804d4f0c3a611';
    
        $expectedOutput = "KAMU";
    
        $url = 'https://api.jdoodle.com/v1/execute';
    
        try {
            $response = Http::post($url, [
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
                'script' => $code,
                'language' => 'python3',
                'versionIndex' => '3',
            ]);
    
            if ($response->successful()) {
                $data = $response->json();
                $output = trim($data['output'] ?? '');
    
                // Debugging output
                \Log::info('Raw Output: ' . $data['output']);
                \Log::info('Trimmed Output: ' . $output);
    
                // Memeriksa apakah output sesuai dengan output yang diharapkan
                $isCorrect = (strcasecmp($output, $expectedOutput) === 0);
    
                return response()->json([
                    'output' => $isCorrect 
                        ? 'Jawaban benar!' 
                        : 'Jawaban salah. Output yang benar adalah "' . $expectedOutput . '".',
                    'error' => $data['error'] ?? ''
                ]);
            } else {
                return response()->json(['output' => 'Gagal mendapatkan respons dari server JDoodle.'], 500);
            }
    
        } catch (\Exception $e) {
            return response()->json(['output' => 'Terjadi kesalahan internal server'], 500);
        }
    }
}
