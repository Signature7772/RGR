<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['from_airport_id', 'to_airport_id', 'flight_number', 'departure_time', 'arrival_time'];

    public function fromAirport()
    {
        return $this->belongsTo(Airport::class, 'from_airport_id');
    }

    public function toAirport()
    {
        return $this->belongsTo(Airport::class, 'to_airport_id');
    }

    protected function casts(): array
    {
        return [
            'from_airport_id' => 'int',
            'to_airport_id' => 'int',
            'flight_number' => 'string',
            'departure_time' => 'datetime',
            'arrival_time' => 'datetime',
        ];
    }
}
