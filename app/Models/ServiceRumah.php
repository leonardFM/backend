<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRumah extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'no_rumah']; // Add other attributes as needed

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'user_id'); // Define the relationship back to User
    }
}
