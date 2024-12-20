<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            AirportSeeder::class,
            FlightSeeder::class,
        ]);
        User::factory()->create([
            'name' => 'Max Markov',
            'email' => 'max@makrov.com',
            'password' => Hash::make('root'),
        ]);
    }
}
