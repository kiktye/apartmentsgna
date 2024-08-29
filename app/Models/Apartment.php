<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'building_id',
        'apartments',
        'area',
        'apartment_type',
        'info',
        'photo_path'
    ];

    protected $casts = [
        'apartments' => 'array',
    ];

    public function building() 
    {
        return $this->belongsTo(Building::class);
    }

    public function rooms()
    {
        return $this->hasMany(RoomDetail::class);
    }
}
