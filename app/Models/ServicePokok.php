<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePokok extends Model
{
    protected $table = 'service_pokoks';

    protected $fillable = [
        'name',
        'type',
        'kanal',
        'telepon',
    ];
}
