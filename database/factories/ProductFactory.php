<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ucfirst(fake()->colorName()) . ' ' . fake()->word(), // Nombre aleatorio
            'price' => fake()->randomFloat(2, 1, 100), // Precio aleatorio entre 1 y 100 con 2 decimales
            'stock' => fake()->numberBetween(0, 100), // Stock aleatorio entre 0 y 100
        ];
    }
}
