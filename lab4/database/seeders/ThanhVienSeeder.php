<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ThanhVienSeeder extends Seeder
{
    public function run()
    {
        $ho = ['Nguyễn', 'Lê', 'Lê', 'Lê'];
        $ten = ['Anh Đức', 'Minh Thọ','Thị Hậu', 'Thành Nam'];

        for ($i = 0; $i < 100; $i++) {
            $fullName = $ho[array_rand($ho)] . " " . $ten[array_rand($ten)];
            DB::table('thanhvien')->insert([
                'hoTen' => $fullName,
                'email' => strtolower(str_replace(' ', '', $fullName)) . rand(1, 100) . '@gmail.com',
                'password' => Hash::make('hehe'),
                'active' => rand(0, 1),
                'idGroup' => rand(0, 1),
            ]);
        }
    }
}

