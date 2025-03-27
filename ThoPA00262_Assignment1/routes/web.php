<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'trangChu'])->name('trangchu');
Route::get('/lienhe',[HomeController::class, 'lienHe'])->name('lienhe');
Route::get('/thongtin',[ThongTinController::class, 'thongTin'])->name('thongtin.danhsach');
Route::get('/thongtin/{id}', [ThongTinController::class, 'chiTiet'])->name('thongtin.chiTiet');
Route::get('/tin/loai/{loai}', [ThongTinController::class, 'loaiTin'])->name('tin.loai');
Route::get('/tim-kiem', [ThongTinController::class, 'timKiem'])->name('timkiem');


use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/dang-nhap', [AuthController::class, 'dangNhap'])->name('dangnhap');
Route::post('/dang-nhap', [AuthController::class, 'xuLyDangNhap'])->name('login');

Route::get('/dang-ky', [AuthController::class, 'dangKy'])->name('dangky');
Route::post('/dang-ky', [AuthController::class, 'xuLyDangKy'])->name('register');
Route::post('/dang-xuat', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/quen-mat-khau', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::post('/quen-mat-khau', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
?>



