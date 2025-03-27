<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'trangChu'])->name('trangchu');
Route::get('/lienhe',[HomeController::class, 'lienHe'])->name('lienhe');
Route::get('/thongtin',[ThongTinController::class, 'thongTin'])->name('thongtin.danhsach');
Route::get('/thongtin/{id}', [ThongTinController::class, 'chiTiet'])->name('thongtin.chiTiet');
Route::get('/tin/loai/{loai}', [ThongTinController::class, 'loaiTin'])->name('tin.loai');
?>



