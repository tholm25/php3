<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:posts,name',
            'description' => 'required',
            'detail' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Ví dụ: 1744298922_example.jpg
            $image->move(public_path('image'), $imageName);
            $data['image'] = $imageName; // Lưu chỉ tên file
        }

        Post::create($data);
        return redirect()->route('admin.posts')->with('success', 'Bài viết đã được tạo.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:posts,name,' . $id,
            'description' => 'required',
            'detail' => 'required',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        $post = Post::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($post->image && file_exists(public_path('image/' . $post->image))) {
                unlink(public_path('image/' . $post->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image'), $imageName);
            $data['image'] = $imageName; // Lưu chỉ tên file
        }

        $post->update($data);
        return redirect()->route('admin.posts')->with('success', 'Bài viết đã được cập nhật.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if ($post->image && file_exists(public_path('image/' . $post->image))) {
            unlink(public_path('image/' . $post->image));
        }
        $post->delete();
        return redirect()->route('admin.posts')->with('success', 'Bài viết đã được xóa.');
    }
}