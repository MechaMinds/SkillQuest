<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileUpdateController extends Controller
{
    public function updateName(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', function ($attribute, $value, $fail) {
                $words = explode(' ', trim($value));
                if (count($words) < 2) {
                    $fail('Nama lengkap harus lebih dari 2 kata.');
                }
            }],
        ]);
        
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->save();

        return redirect()->back()->with('success', 'Nama Lengkap Berhasil Diganti.');
    }
}