<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function booking()
    {
        return $this->hasMany(Bookings::class);
    }

    public function service()
    {
        return $this->hasMany(Service::class);
    }
}
