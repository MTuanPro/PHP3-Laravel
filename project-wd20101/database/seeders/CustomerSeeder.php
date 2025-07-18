<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'vana@example.com',
                'phone' => '0901234567',
                'address' => 'Hà Nội',
                'avatar' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Trần Thị B',
                'email' => 'thib@example.com',
                'phone' => '0912345678',
                'address' => 'TP. Hồ Chí Minh',
                'avatar' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lê Văn C',
                'email' => 'vanc@example.com',
                'phone' => '0923456789',
                'address' => 'Đà Nẵng',
                'avatar' => null,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
