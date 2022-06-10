<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'Category_Name' => 'کالای دیجیتال',
        ]);

        Category::create([
            'Category_Name' => 'موبایل',
            'category_id' => 1
        ]);

        Category::create([
            'Category_Name' => 'پوشاک',
        ]);

        Category::create([
            'Category_Name' => 'کفش',
            'category_id' => 3
        ]);

        Category::create([
            'Category_Name' => 'لپ تاپ',
            'category_id' => 1
        ]);

        Category::create([
            'Category_Name' => 'اسپیکر',
            'category_id' => 1
        ]);
    }
}
