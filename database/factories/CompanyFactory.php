<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'location' => fake()->city(),
            'tel' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'description' => fake()->text(),
            'status' => fake()->numberBetween(0,1)
        ];
    }
}
