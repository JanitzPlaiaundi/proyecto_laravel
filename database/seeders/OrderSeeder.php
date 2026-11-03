<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::destroy(Order::all());
        Order::factory(5)->create([
            'user_id' => 1,
        ]);
    }
}
