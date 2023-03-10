<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *  
     */
    public function definition()
    {
        return [
            'product_id' =>  fake()->numberBetween($min = 0, $max = 20),
            'one' => fake()->numberBetween($min = 0, $max = 100),
            'two' => fake()->numberBetween($min = 0, $max = 100),
            'three' => fake()->numberBetween($min = 0, $max = 100),
            'four' => fake()->numberBetween($min = 0, $max = 100),
            'five' => fake()->numberBetween($min = 0, $max = 100),
        ];
    }
}
