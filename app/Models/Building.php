<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'status',
        'photo_path',
    ];

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function details()
    {
        return $this->hasOne(BuildingDetail::class)->withDefault();
    }
}
