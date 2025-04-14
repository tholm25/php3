<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'tenSP' => 'iPhone 14 Pro Max',
            'gia' => 29900000,
            'antien' => 1,
        ]);

        Product::create([
            'tenSP' => 'Samsung Galaxy S23 Ultra',
            'gia' => 26900000,
            'antien' => 1,
        ]);

        Product::create([
            'tenSP' => 'Xiaomi 13 Pro',
            'gia' => 18900000,
            'antien' => 1,
        ]);

        Product::create([
            'tenSP' => 'OPPO Find X5 Pro',
            'gia' => 23900000,
            'antien' => 1,
        ]);

        Product::create([
            'tenSP' => 'Realme GT Neo 5',
            'gia' => 12900000,
            'antien' => 1,
        ]);
    }
}