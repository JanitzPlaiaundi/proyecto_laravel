<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 100),
            'product_id' => fake()->numberBetween(1, 100),
            'user_address' => fake()->address(),
            'price' => fake()->randomFloat(2, 1, 100),
        ];
    }
}
