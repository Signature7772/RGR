<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    public function run(): void
    {
        $cities = DB::table('cities')->pluck('id', 'name');

        DB::table('airports')->insert([
            ['city_id' => $cities['Kyiv'], 'name' => 'Boryspil International Airport', 'code' => 'KBP', 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => $cities['Lviv'], 'name' => 'Lviv Danylo Halytskyi International Airport', 'code' => 'LWO', 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => $cities['Odessa'], 'name' => 'Odesa International Airport', 'code' => 'ODS', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
