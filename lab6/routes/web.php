<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanTriTinController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/quantritin', [QuanTriTinController::class, 'index']);

Route::get('/download', function () {
    return view("download");
})->middleware('auth');

Route::get('/dl', function () {
    return view('download');
})->middleware('auth.basic');

Route::get('/quantri', function () {
    return view("quantri");
})->middleware(['auth', 'QuanTri']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
