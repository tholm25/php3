<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Thêm facade DB

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::factory(10)->create();
        
        DB::table('users')->insert([
            'name' => 'Lê Minh Thọ',
            'email' => 'leminhtho762@gmail.com',
            'password' => bcrypt('MTho123'),
            'idgroup' => 1,
            'diachi' => 'Thanh Hóa'
        ]);
        DB::table('users')->insert([
            'name' => 'Lê Tuấn Anh',
            'email' => 'letuananh@gmail.com',
            'password' => bcrypt('TAnh234'),
            'idgroup' => 1,
            'diachi' => 'Hà Nội'
        ]);
        DB::table('users')->insert([
            'name' => 'Hoàng Thị Nga',
            'email' => 'ngahoang@gmail.com',
            'password' => bcrypt('HNga345'),
            'idgroup' => 0,
            'diachi' => 'Hải Dương'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
