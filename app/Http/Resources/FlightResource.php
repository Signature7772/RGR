<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FlightResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'flight_number' => $this->flight_number,
            'from_airport' => new AirportResource($this->fromAirport),
            'to_airport' => new AirportResource($this->toAirport),
            'departure_time' => $this->departure_time->format('Y-m-d H:i:s T'),
            'arrival_time' => $this->arrival_time->format('Y-m-d H:i:s T'),
        ];
    }
}
