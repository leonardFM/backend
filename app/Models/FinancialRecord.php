<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialRecord extends Model
{
    protected $table = 'financial_records';

    protected $fillable = [
        'bulan',
        'tahun',
        'terkumpul',
        'pengeluaran',
        'gaji_keamanan',
        'biaya_sampah',
        'listrik',
        'konsumsi',
        'belanja_alat',
        'tenaga_kerja',
        'kasbon_keamanan',
        'dana_sosial',
        'pengembalian',
    ];
}
