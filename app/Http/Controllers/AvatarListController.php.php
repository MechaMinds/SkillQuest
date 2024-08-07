<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AvatarListController extends Controller
{
    public function getAvatars()
    {
        $avatars = DB::table('list_avatar')->get();
        return response()->json($avatars);
    }

    public function saveAvatar(Request $request)
    {
        // Mendapatkan nama file gambar dari request
        $avatarFileName = $request->input('avatar_file_name');
        
        // Menentukan nama file avatar yang unik
        $avatarName = 'avatar-' . Str::random(3) . '.svg'; 
        $avatarPath = 'images/listAvatar/' . $avatarName;

        // Menentukan path gambar di folder lokal
        $localAvatarPath = 'local_images/' . $avatarFileName;

        if (Storage::exists($localAvatarPath)) {
            // Salin gambar dari folder lokal ke folder penyimpanan aplikasi
            Storage::copy($localAvatarPath, $avatarPath);

            // Simpan informasi avatar ke database
            DB::table('list_avatar')->insert([
                'nama_avatar' => $avatarFileName,
                'lokasi_avatar' => $avatarPath,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Avatar saved successfully.',
                'avatarPath' => asset($avatarPath)
            ]);
        } else {
            return response()->json(['success' => false, 'message' => 'Local image file not found.']);
        }
    }
}

