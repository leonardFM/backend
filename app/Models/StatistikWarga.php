<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatistikWarga extends Model
{
    protected $table = 'statistik_wargas';

    protected $fillable = [
        'jumlah_warga',
        'jumlah_laki_laki',
        'jumlah_perempuan',
        'jumlah_kk',
        'anak',
        'penerima_bansos',
        'umkm',
    ];
}
