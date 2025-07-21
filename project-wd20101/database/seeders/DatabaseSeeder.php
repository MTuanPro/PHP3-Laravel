<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // chạy các seeder  của seeder
        // $this->call([
        //     CategorySeeder::class,
        //     CustomerSeeder::class,
        //     ProductSeeder::class,

        // ]);
        // Chạy các factory để tạo dữ liệu mẫu
        // Category::factory()->count(50)->create();

        // Product::factory()->count(400)->create();
        // Customer::factory()->count(100)->create();
    }
}
