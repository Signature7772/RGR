<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        $airports = DB::table('airports')->pluck('id', 'code');

        DB::table('flights')->insert([
            [
                'from_airport_id' => $airports['KBP'],
                'to_airport_id' => $airports['LWO'],
                'flight_number' => 'PS101',
                'departure_time' => now()->addDay(),
                'arrival_time' => now()->addDay()->addHours(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'from_airport_id' => $airports['LWO'],
                'to_airport_id' => $airports['ODS'],
                'flight_number' => 'PS102',
                'departure_time' => now()->addDays(2),
                'arrival_time' => now()->addDays(2)->addHours(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
