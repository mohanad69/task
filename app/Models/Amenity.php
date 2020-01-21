<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $guarded = [];

    public function hotels()
    {
        return $this->belongsToMany(Hotel::class, 'hotel_amenities');
    }
}
