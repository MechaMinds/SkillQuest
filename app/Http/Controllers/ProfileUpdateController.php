<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateController extends Controller
{
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', function ($attribute, $value, $fail) {
                $words = explode(' ', trim($value));
                if (count($words) < 2) {
                    $fail('Nama lengkap harus lebih dari 2 kata.');
                }
            }],
            'description' => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $isNameChanged = $user->name !== $request->input('name');
        $isDescriptionChanged = $user->description !== $request->input('description');

        if ($isNameChanged || $isDescriptionChanged) {
            if ($isNameChanged) {
                $user->name = $request->input('name');
            }

            if ($isDescriptionChanged) {
                $user->description = $request->input('description');
            }

            $user->save();

            $response = redirect()->back();
            if ($isNameChanged) {
                $response->with('successName', 'Nama Lengkap Berhasil Diperbarui');
            }
            if ($isDescriptionChanged) {
                $response->with('successDesc', 'Deskripsi Berhasil Diperbarui');
            }

            return $response;
        }

        return redirect()->back();
    }

}