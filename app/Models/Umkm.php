<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $table = 'umkms';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nama_umkm',
        'alamat',
        'deskripsi',
        'foto_umkm',
        'status',
        'kategori',
    ];

    // Relasi ke tabel kategori_usaha jika diperlukan
    // Jika kolom 'kategori' mengacu pada tabel lain, Anda bisa mendefinisikan relasi di sini.
    public function kategoriUsaha()
    {
        return $this->belongsTo(KategoriUsaha::class, 'kategori', 'id');
    }
}
