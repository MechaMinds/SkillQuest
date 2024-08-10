<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule; 

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
    public function updatePengaturan(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(Auth::id())],
        ]);

        $user = Auth::user();
        $isEmailChanged = $user->email !== $request->input('email');

        if ($isEmailChanged) {
            $user->email = $request->input('email');
            $user->save();

            return redirect()->back()->with('successEmail', 'Email Berhasil Diperbarui');
        }

        return redirect()->back();
    }
}