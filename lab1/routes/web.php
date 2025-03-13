<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ThongTinController;
use App\Http\Controllers\TinController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/product', function () {
//     return view('product');
// });

Route::get('/',[TinController::class, 'trangChu']);
Route::get('/lienhe',[TinController::class, 'lienHe']);
Route::get('/ct{id}',[TinController::class, 'chiTiet']);
Route::get('/thongtinsv',[ThongTinController::class, 'thongTin']);


?>



