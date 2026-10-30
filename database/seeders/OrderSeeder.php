<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::destroy(Order::all()); // Elimina todos los productos existentes
        Order::factory(10)->create(); // Crea 10 productos de ejemplo
    }
}
