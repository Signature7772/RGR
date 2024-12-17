<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Kyiv', 'country' => 'Ukraine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lviv', 'country' => 'Ukraine', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Odessa', 'country' => 'Ukraine', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
