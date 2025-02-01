<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('parent_id')->nullable(); // Untuk ID referensi atau relasi ke pengguna lainnya
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('123456');
            $table->string('status')->default('blocked');
            
            // Kolom tambahan untuk sistem RT/RW
            $table->integer('rt')->nullable(); // Kolom untuk RT
            $table->integer('rw')->nullable(); // Kolom untuk RW
            $table->string('alamat')->nullable(); // Alamat lengkap pengguna
            $table->string('phone')->nullable(); // Nomor telepon
            $table->string('role')->default('warga'); // Peran pengguna (contoh: warga, ketua, admin)
        
            // Kolom identitas pribadi
            $table->string('nik', 16)->unique()->nullable(); // Nomor Induk Kependudukan
            $table->date('tanggal_lahir')->nullable(); // Tanggal lahir
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan'])->nullable(); // Jenis kelamin
        
            // Kolom keanggotaan RT/RW
            $table->date('tanggal_masuk')->nullable(); // Tanggal mulai keanggotaan
            $table->boolean('aktif')->default(true); // Status keaktifan sebagai warga RT
        
            // Kolom untuk kontak darurat
            $table->string('emergency_contact')->nullable(); // Nomor telepon darurat atau kontak keluarga terdekat
        
            // Kolom untuk foto profil
            $table->string('foto_profil')->nullable(); // URL foto profil pengguna
        
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
