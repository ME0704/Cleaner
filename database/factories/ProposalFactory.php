<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProposalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gig_id'=>fake()->numberBetween(3,7),
            'price'=>fake()->numberBetween(10000,100000),
            'schedule'=>fake()->dateTime($max='now'),
            'status' => fake()->randomElement(['accepted','declined','pending'])
        ];
    }
}
