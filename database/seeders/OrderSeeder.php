<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::create([
            'user_id' => 2,
            'products_id' => 4,
            'Number of orders' => 3,
            'Total order price' => 9000
        ]);

        Orders::create([
            'user_id' => 3,
            'products_id' => 3,
            'Number of orders' => 9,
            'Total order price' => 13500
        ]);
        Orders::create([
            'user_id' => 2,
            'products_id' => 1,
            'Number of orders' => 2,
            'Total order price' => 2000
        ]);
        Orders::create([
            'user_id' => 1,
            'products_id' => 2,
            'Number of orders' =>10,
            'Total order price' => 20000
        ]);
        Orders::create([
            'user_id' => 2,
            'products_id' => 3,
            'Number of orders' => 1,
            'Total order price' => 1500
        ]);
        Orders::create([
            'user_id' => 2,
            'products_id' => 1,
            'Number of orders' => 3,
            'Total order price' => 3000
        ]);
    }
}
