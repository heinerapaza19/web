<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullname' => $this->faker->name(),
            'document' => $this->faker->numerify("#######"),
            'cellphone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->streetAddress(),
        ];
    }
}
