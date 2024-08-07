<?php 
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends BaseController
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $user = auth()->user();

            if ($user->profile_photo && file_exists(public_path('images/photoProfileUser/' . $user->profile_photo))) {
                unlink(public_path('images/photoProfileUser/' . $user->profile_photo));
            }

            $image = $request->file('profile_photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images/photoProfileUser'), $imageName);

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
    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        // Log path dan nama file
        \Log::info('Old profile photo:', ['photo' => $user->profile_photo]);

        // Hapus foto profil lama jika ada
        if ($user->profile_photo) {
            $oldPhotoPath = public_path('images/photoProfileUser/' . $user->profile_photo);
            if (file_exists($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
        }

        // Simpan foto profil baru
        $filename = $user->id . '_profile_' . time() . '.' . $request->profile_photo->getClientOriginalExtension();
        $path = $request->file('profile_photo')->move(public_path('images/photoProfileUser'), $filename);

        $user->profile_photo = $filename;
        $user->save();

        // Log URL gambar
        \Log::info('New profile photo saved:', ['filename' => $filename]);

        return response()->json([
            'success' => true,
            'profile_photo_url' => asset('images/photoProfileUser/' . $filename),
        ]);
    }
}

?>