<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    protected $table = 'bansos';

    protected $fillable = [
        'nama_bansos',
        'jenis_bansos',
        'informasi_bansos',
        'deskripsi',
    ];
}
