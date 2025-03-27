<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class ThongTinController extends Controller
{
    public function thongTin()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10); 
        return view('thongtin', compact('posts'));
    }

    public function chiTiet($id)
    {
        $post = Post::findOrFail($id);
        $post->increment('viewers');
        return view('chitiet', ['post' => $post]); 
    }

    public function loaiTin($loai)
    {
        $category = Category::find($loai);
        
        if (!$category) {
            abort(404, 'Danh mục không tồn tại');
        }
        
        $posts = Post::where('category', $loai)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);;
        return view('loaitin', compact('posts', 'category'));
    }

    public function timKiem(Request $request)
    {
        $query = $request->input('name');
        $posts = Post::where('name', 'like', "%$query%")
                    ->orWhere('description', 'like', "%$query%")
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);;
        return view('timkiem', compact('posts'));
    }
}