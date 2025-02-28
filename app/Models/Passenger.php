<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [];

    /**
     * Get the user that owns the passenger.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the rides for the passenger.
     */
    public function rides()
    {
        return $this->hasMany(Ride::class);
    }
}