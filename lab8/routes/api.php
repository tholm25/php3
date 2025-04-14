<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\LoaiSanPhamController;
    use App\Http\Controllers\ProductController;
    
    Route::apiResource('products', ProductController::class);
    Route::resource('loaisanpham', LoaisanphamController::class);

?>