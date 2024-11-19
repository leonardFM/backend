<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // Mengizinkan mass assignment pada kolom yang relevan
    protected $fillable = [
        'umkm_id',
        'name',
        'deskripsi',
        'harga',
        'kategori',
        'status',
        'foto_menu',
    ];

    /**
     * Relasi ke model Umkm (setiap menu dimiliki oleh satu UMKM).
     */
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
