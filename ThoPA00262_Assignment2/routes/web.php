<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;

Route::get('/',[HomeController::class, 'trangChu'])->name('trangchu');
Route::get('/lienhe',[HomeController::class, 'lienHe'])->name('lienhe');
Route::get('/thongtin',[ThongTinController::class, 'thongTin'])->name('thongtin.danhsach');
Route::get('/thongtin/{id}', [ThongTinController::class, 'chiTiet'])->name('thongtin.chiTiet');
Route::get('/tin/loai/{loai}', [ThongTinController::class, 'loaiTin'])->name('tin.loai');
Route::get('/tim-kiem', [ThongTinController::class, 'timKiem'])->name('timkiem');


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



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.users');
        Route::put('/{id}/toggle-active', [UserController::class, 'toggleActive'])->name('admin.users.toggleActive');
        Route::put('/{id}/update-role', [UserController::class, 'updateRole'])->name('admin.users.updateRole');
    });
    

    Route::prefix('posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('admin.posts');
        Route::get('/create', [PostController::class, 'create'])->name('admin.posts.create');
        Route::post('/', [PostController::class, 'store'])->name('admin.posts.store');
        Route::get('/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/{id}', [PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.categories');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });
});

?>



