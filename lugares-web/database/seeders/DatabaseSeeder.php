<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Sensor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {// Crear usuario admin
        \App\Models\User::factory()->create([
            'name' => 'heiener',
            'email' => 'heiner1408apz@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);

        // Llamar Seeder de locations (7 registros)
        $this->call(LocationsSeeder::class);

        // Crear 100 sensores usando el factory
        Sensor::factory()->count(100)->create();
    }
}
