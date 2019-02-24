<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function bookings()
    {
        return $this->hasOne(Booking::class);
    }

    public function rate()
    {
        return $this->belongsTo(Rate::class);
    }
}
