<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoaiSanPham;

class LoaiSanPhamSeeder extends Seeder
{
    public function run(): void
    {
        LoaiSanPham::create([
            'tenloai' => 'Điện thoại',
            'mota' => 'Các loại điện thoại di động',
        ]);

        LoaiSanPham::create([
            'tenloai' => 'Laptop',
            'mota' => 'Máy tính xách tay cho học tập và văn phòng',
        ]);

        LoaiSanPham::create([
            'tenloai' => 'Tablet',
            'mota' => 'Máy tính bảng giải trí',
        ]);

        LoaiSanPham::create([
            'tenloai' => 'Phụ kiện',
            'mota' => 'Ốp lưng, sạc, tai nghe,...',
        ]);

        LoaiSanPham::create([
            'tenloai' => 'Đồng hồ thông minh',
            'mota' => 'Smartwatch các thương hiệu',
        ]);
    }
}