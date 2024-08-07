<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class AvatarController extends Controller
{
    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'avatar' => 'required|string',
        ]);

        $avatarName = $request->input('avatar');

        // Ambil informasi pengguna
        $user = Auth::user();
        $currentAvatar = $user->profile_photo;

        // Nama file baru
        $userName = $user->name;
        $firstName = explode(' ', $userName)[0];
        $newAvatarName = 'avatar-' . $firstName . '-' . time() . '.' . pathinfo($avatarName, PATHINFO_EXTENSION);

        // Path file
        $sourcePath = public_path('images/listAvatar/' . $avatarName);
        $destinationPath = public_path('images/photoProfileUser/' . $newAvatarName);

        // Periksa apakah file sumber ada
        if (!File::exists($sourcePath)) {
            return response()->json(['success' => false, 'message' => 'Source file does not exist']);
        }

        try {
            // Hapus avatar lama jika ada
            if ($currentAvatar && File::exists(public_path('images/photoProfileUser/' . $currentAvatar))) {
                File::delete(public_path('images/photoProfileUser/' . $currentAvatar));
            }

            // Salin file baru
            if (File::copy($sourcePath, $destinationPath)) {
                // Perbarui entri database
                $user->profile_photo = $newAvatarName;
                $user->save();

                // Kembalikan respons sukses
                return response()->json([
                    'success' => true,
                    'newAvatarUrl' => asset('images/photoProfileUser/' . $newAvatarName)
                ]);
            }
        } catch (\Exception $e) {
            // Tangani pengecualian
            return response()->json(['success' => false, 'message' => 'Error processing file: ' . $e->getMessage()]);
        }

        // Respons gagal jika penyalinan file gagal
        return response()->json(['success' => false, 'message' => 'Failed to copy file']);
    }
}
