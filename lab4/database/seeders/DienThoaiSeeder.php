<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DienThoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $models = ['Oppo XA', 'iPhone XS Max', 'Nokia Pro'];
        
        for ($i = 0; $i < 300; $i++) {
            $model = $models[array_rand($models)];
            $price = $model === 'Oppo XA' ? rand(700000, 1000000) : 
                     ($model === 'iPhone XS Max' ? rand(500000, 800000) : 
                     rand(250000, 500000));
            
            DB::table('dienthoai')->insert([
                'tenDT' => $model . " " . ($i + 1),
                'gia' => $price,
                'soLuongTonKho' => rand(1, 100),
                'hot' => rand(0, 1),
                'anHien' => 1,
                'ngayCapNhat' => now(),
            ]);
        }
    }
}
