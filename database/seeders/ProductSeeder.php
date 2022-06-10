<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create([
            'Product Name' => 'موبایل سامسونگ',
            'category_id' => 2,
            'price product' => 1000,
            'Product inventory' => 50,
            'Sales number' => 27,
            'Number of views' => 512
        ]);

        Products::create([
            'Product Name' => 'موبایل ال جی',
            'category_id' => 2,
            'price product' => 2000,
            'Product inventory' => 60,
            'Sales number' => 37,
            'Number of views' => 112
        ]);

        Products::create([
            'Product Name' => 'لپ تاپ سامسونگ',
            'category_id' => 5,
            'price product' => 1500,
            'Product inventory' => 27,
            'Sales number' => 10,
            'Number of views' => 212
        ]);

        Products::create([
            'Product Name' => 'کفش نایک',
            'category_id' => 4,
            'price product' => 3000,
            'Product inventory' => 40,
            'Sales number' => 30,
            'Number of views' => 150
        ]);
    }
}
