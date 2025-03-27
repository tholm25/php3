<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trangChu()
    {
        $featuredPosts = Post::orderBy('viewers', 'desc')->take(3)->get();
        $recentPosts = Post::orderBy('created_at', 'desc')->take(6)->get();

        return view('index', compact('featuredPosts', 'recentPosts'));
    }

    public function lienHe()
    {
        return view('lienhe');
    }
}