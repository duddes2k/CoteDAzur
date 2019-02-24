<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'service_id', 'departure_date', 'departure_time',
        'return_date', 'return_time', 'status', 'code',
        'duration', 'total'
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
