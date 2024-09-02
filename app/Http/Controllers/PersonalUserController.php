<?php

namespace App\Http\Controllers;

use App\Models\PersonalUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalUserController extends Controller {
    public function store(Request $request) {
        $request->validate([
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'nomor_whatsapp' => 'required|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'provinsi_id' => 'required|integer',
            'kota_id' => 'required|integer',
            'kode_pos' => 'required|string|max:10',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'nullable|string|max:255',
            'pekerjaan_saat_ini' => 'nullable|string|max:255',
        ]);

        PersonalUser::create([
            'user_id' => Auth::id(), // Mengambil id user yang sedang login
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'nomor_whatsapp' => $request->nomor_whatsapp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'provinsi_id' => $request->provinsi_id,
            'kota_id' => $request->kota_id,
            'kode_pos' => $request->kode_pos,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'pekerjaan_saat_ini' => $request->pekerjaan_saat_ini,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}

