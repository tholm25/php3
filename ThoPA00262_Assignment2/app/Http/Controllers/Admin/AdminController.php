<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $stats = [
            'posts' => \App\Models\Post::count(),
            'categories' => \App\Models\Category::count(),
            'users' => \App\Models\User::count(),
            'latest_posts' => \App\Models\Post::latest()->take(5)->get()
        ];

        return view('admin.dashboard', compact('stats'));
    }
}