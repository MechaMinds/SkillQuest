<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('personal_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key ke tabel users
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('nomor_whatsapp');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('kota_id');
            $table->string('kode_pos');
            $table->text('alamat');
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('pekerjaan_saat_ini')->nullable();
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('personal_users');
    }
};

