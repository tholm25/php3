@extends('admin.layout')

@section('title', 'Sửa Bài Viết - THOLM NEWS')
@section('page-title', 'Sửa Bài Viết')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên Bài Viết</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $post->name }}" required>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô Tả Ngắn</label>
                <textarea name="description" id="description" class="form-control" rows="3" required>{{ $post->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Chi Tiết</label>
                <textarea name="detail" id="detail" class="form-control" rows="5" required>{{ $post->detail }}</textarea>
                @error('detail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Hình Ảnh</label>
                <input type="file" name="image" id="image" class="form-control">
                @if ($post->image)
                    <img src="{{ asset($post->image) }}" alt="{{ $post->name }}" style="max-width: 100px; margin-top: 10px;" onerror="this.src='{{ asset('image/placeholder.jpg') }}';">
                    <small>{{ $post->image }}</small> <!-- Hiển thị đường dẫn để debug -->
                @endif
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Danh Mục</label>
                <select name="category" id="category" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
@endsection