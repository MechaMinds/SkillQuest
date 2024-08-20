<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
{
    public function saveProgress(Request $request)
    {
        $userId = $request->input('user_id');
        $progressData = $request->input('progress_data');

        // Simpan data ke file JSON berdasarkan user_id
        Storage::disk('local')->put("progress_$userId.json", json_encode($progressData));

        return response()->json(['status' => 'success']);
    }

    public function getProgress($id)
    {
        $filePath = "progress_$id.json";
        if (Storage::disk('local')->exists($filePath)) {
            $progressData = Storage::disk('local')->get($filePath);
            return response()->json(json_decode($progressData, true));
        }

        return response()->json(['status' => 'no data'], 404);
    }
}
