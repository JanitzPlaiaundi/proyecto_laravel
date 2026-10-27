<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::destroy(Product::all()); // Elimina todos los productos existentes
        Product::factory(10)->create(); // Crea 10 productos de ejemplo
    }
}
