<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');

        // Cek apakah email ada di database
        $user = User::where('email', $email)->first();

        if ($user) {
            // Jika email ada, coba verifikasi password
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Authentication passed
                return redirect()->intended('/')->with('success', 'Login Berhasil!');
            } else {
                // Password salah
                return redirect()->back()->withErrors(['password' => 'Kata sandi salah'])->withInput();
            }
        } else {
            // Email tidak ditemukan
            return redirect()->back()->withErrors(['email' => 'Email tidak ditemukan'])->withInput();
        }
    }
}
?>
