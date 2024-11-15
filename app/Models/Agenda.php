<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Agenda extends Model
{
    protected $fillable = [
        'title', 
        'slug', 
        'description', 
        'start_date', 
        'location',
    ];

    protected static function booted()
    {
        static::creating(function ($agenda) {
            $agenda->slug = Str::slug($agenda->title);
        });

        static::updating(function ($agenda) {
            $agenda->slug = Str::slug($agenda->title);
        });
    }
}
