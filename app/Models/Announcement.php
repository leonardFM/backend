<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    
    protected $table = 'announcement';
    protected $fillable = ['title','kategori','content','image','user_id','content_type',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
