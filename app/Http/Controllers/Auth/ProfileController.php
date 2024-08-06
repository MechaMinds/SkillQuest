<?php 
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

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
}

?>