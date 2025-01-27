<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceTotal extends Model
{
    protected $table = 'finance_totals';

    protected $fillable = [
        'bulan',
        'tahun',
        'total'
    ];
}
