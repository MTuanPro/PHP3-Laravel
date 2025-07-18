<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone 15 Pro',
                'slug' => 'iphone-15-pro',
                'description' => 'Điện thoại cao cấp của Apple',
                'price' => 29990000,
                'stock' => 10,
                'image' => 'iphone15pro.jpg',
                'category_id' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'slug' => 'samsung-galaxy-s24',
                'description' => 'Điện thoại flagship của Samsung',
                'price' => 25990000,
                'stock' => 15,
                'image' => 'galaxys24.jpg',
                'category_id' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ốp lưng iPhone',
                'slug' => 'op-lung-iphone',
                'description' => 'Phụ kiện bảo vệ điện thoại',
                'price' => 200000,
                'stock' => 50,
                'image' => 'oplungiphone.jpg',
                'category_id' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
