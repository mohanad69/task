<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'hotel_amenities');
    }

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
}
