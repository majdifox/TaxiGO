<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;
    protected $table = 'ride';

    protected $fillable = [
        'passenger_id',
        'driver_id',
        'reservation_date',
        'pickup_location',
        'dropoff_location',
        'reservation_status',
        'ride_status',
    ];

    /**
     * Get the passenger that owns the ride.
     */
    public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

    /**
     * Get the driver that owns the ride.
     */
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}