<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'booking_id', 'first_name', 'last_name', 'phone', 'email', 'other_info'
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
