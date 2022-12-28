<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "price"=>fake()->numberBetween(1000, 2000),
            "theory"=>fake()->randomFloat(1, 1, 2),
            "practice"=>fake()->randomFloat(1, 1, 2),
            "category"=>fake()->randomLetter(),
        ];
    }
}
