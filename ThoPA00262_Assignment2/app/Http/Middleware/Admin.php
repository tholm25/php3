<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('dangnhap')->with('error', 'Vui lòng đăng nhập để tiếp tục.');
        }

        if (!Auth::user()->isAdmin()) {
            return redirect()->route('trangchu')->with('error', 'Bạn không có quyền truy cập.');
        }

        return $next($request);
    }
}