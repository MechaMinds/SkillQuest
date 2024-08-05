<?php 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function daftar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            // Debugging log
            \Log::error('Validation failed:', $validator->errors()->toArray());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Log email and user creation
        \Log::info('Creating user:', ['email' => $request->email]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        \Log::info('User created:', ['id' => $user->id]);

        return redirect()->route('daftar')->with('success', 'Pendaftaran Berhasil!');
    }

}



?>