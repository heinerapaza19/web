<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

class SensorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'temperatura' => $this->faker->randomFloat(1, -10, 45), // temperatura entre -10°C y 45°C
            'humedad' => $this->faker->randomFloat(1, 10, 100),     // humedad entre 10% y 100%
            'fechatreg' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'location_id' => Location::inRandomOrder()->first()->id, // ubicación aleatoria de las 7
        ];
    }
}
