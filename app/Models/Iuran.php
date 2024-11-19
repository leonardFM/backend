<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'iurans';

    public $incrementing = false;

    // Kolom yang dapat diisi massal (mass assignment)
    protected $fillable = [
        'user_id', 
        'bulan', 
        'tahun', 
        'jumlah', 
        'status', 
        'tanggal_bayar', 
        'keterangan'
    ];

    

    // Relasi dengan model Warga
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');  // make sure the foreign key is correct
    }
}
