<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        
        // Kirim data pengguna ke view
        return view('profile', ['user' => $user]);
    }
}

?>