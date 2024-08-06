<?php 

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $user = auth()->user();
            
            // Cek apakah pengguna sudah memiliki foto profil
            if ($user->profile_photo && file_exists(public_path('images/photoProfileUser/' . $user->profile_photo))) {
                // Hapus foto lama
                unlink(public_path('images/photoProfileUser/' . $user->profile_photo));
            }

            $image = $request->file('profile_photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images/photoProfileUser'), $imageName);

            // Update jalur foto profil pengguna di database
            $user->profile_photo = $imageName;
            $user->save();

            return response()->json([
                'success' => true,
                'imageUrl' => asset('images/photoProfileUser/' . $imageName),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengunggah foto: ' . $e->getMessage(),
            ], 500);
        }
    }
}
