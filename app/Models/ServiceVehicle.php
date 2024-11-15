<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceVehicle extends Model
{
    use HasFactory;

    // Define the table's fillable attributes to protect against mass assignment
    protected $fillable = [
        'user_id',
        'nomor_polisi',
        'jenis_kendaraan',
        'warna',
    ];

    /**
     * Define the relationship to the User model.
     * Each vehicle belongs to one user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
