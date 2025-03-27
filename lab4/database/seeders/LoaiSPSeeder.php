<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSPSeeder extends Seeder
{
    public function run()
    {
        DB::table('loaisp')->insert([
            ['tenLoai' => 'Điện thoại', 'thuTu' => 1, 'anHien' => 1],
            ['tenLoai' => 'Laptop', 'thuTu' => 2, 'anHien' => 1],
            ['tenLoai' => 'Phụ kiện', 'thuTu' => 3, 'anHien' => 1],
        ]);
    }
}

?>
