<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalUser extends Model {
    use HasFactory;

    protected $table = 'personal_users';

    protected $fillable = [
        'user_id',
        'tanggal_lahir',
        'tempat_lahir',
        'nomor_whatsapp',
        'jenis_kelamin',
        'provinsi_id',
        'kota_id',
        'kode_pos',
        'alamat',
        'pendidikan_terakhir',
        'pekerjaan_saat_ini'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

