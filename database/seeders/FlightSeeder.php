<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FlightSeeder extends Seeder
{
    public function run(): void
    {
        $airports = DB::table('airports')->pluck('id', 'code');

        $nowKyiv = Carbon::now('Europe/Kyiv');

        DB::table('flights')->insert([
            [
                'from_airport_id' => $airports['KBP'],
                'to_airport_id' => $airports['LWO'],
                'flight_number' => 'PS101',
                'departure_time' => $nowKyiv->copy()->addDay()->setTime(8, 00), // Например, завтра в 08:00 по Киеву
                'arrival_time'   => $nowKyiv->copy()->addDay()->setTime(9, 00),  // Прилёт через час
                'created_at' => $nowKyiv,
                'updated_at' => $nowKyiv,
            ],
            [
                'from_airport_id' => $airports['LWO'],
                'to_airport_id' => $airports['ODS'],
                'flight_number' => 'PS102',
                'departure_time' => $nowKyiv->copy()->addDays(2)->setTime(14, 00),
                'arrival_time'   => $nowKyiv->copy()->addDays(2)->setTime(16, 00),
                'created_at' => $nowKyiv,
                'updated_at' => $nowKyiv,
            ],
            [
                'from_airport_id' => $airports['KBP'],
                'to_airport_id' => $airports['ODS'],
                'flight_number' => 'PS103',
                'departure_time' => $nowKyiv->copy()->addDays(3)->setTime(10, 30),
                'arrival_time'   => $nowKyiv->copy()->addDays(3)->setTime(12, 00),
                'created_at' => $nowKyiv,
                'updated_at' => $nowKyiv,
            ],
            [
                'from_airport_id' => $airports['ODS'],
                'to_airport_id' => $airports['LWO'],
                'flight_number' => 'PS104',
                'departure_time' => $nowKyiv->copy()->addDays(4)->setTime(7, 00),
                'arrival_time'   => $nowKyiv->copy()->addDays(4)->setTime(9, 30),
                'created_at' => $nowKyiv,
                'updated_at' => $nowKyiv,
            ],
            [
                'from_airport_id' => $airports['LWO'],
                'to_airport_id' => $airports['KBP'],
                'flight_number' => 'PS105',
                'departure_time' => $nowKyiv->copy()->addDays(5)->setTime(15, 45),
                'arrival_time'   => $nowKyiv->copy()->addDays(5)->setTime(17, 00),
                'created_at' => $nowKyiv,
                'updated_at' => $nowKyiv,
            ],
        ]);
    }
}
