<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBansos extends Model
{
    protected $fillable = [
        'user_id',
        'jenis_bansos',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
