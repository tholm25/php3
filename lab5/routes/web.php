<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TinController;

Route::get('/',[HomeController::class, 'trangChu'])->name('trangchu');
Route::get('/lienhe',[HomeController::class, 'lienHe'])->name('lienhe');

Route::get('/tin/ds', [TinController::class, 'index'])->name('tin.danhsach');
Route::get('/tin/chitiet/{id}', [TinController::class, 'chitiet'])->name('tin.chitiet');
Route::get('/tin/them', [TinController::class, 'them'])->name('tin.them');
Route::post('/tin/them', [TinController::class, 'them_']);
Route::get('/tin/xoa/{id}', [TinController::class, 'xoa'])->name('tin.xoa');
Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat'])->name('tin.capnhat');
Route::post('/tin/capnhat/{id}', [TinController::class, 'capnhat_']);
?>



