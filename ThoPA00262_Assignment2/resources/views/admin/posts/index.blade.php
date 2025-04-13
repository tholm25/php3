@extends('admin.layout')

@section('title', 'Quản Lý Bài Viết - THOLM NEWS')
@section('page-title', 'Quản Lý Bài Viết')

@section('content')
    <div class="container-fluid">
        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">Tạo Bài Viết Mới</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Mô Tả</th>
                    <th>Danh Mục</th>
                    <th>Lượt Xem</th>
                    <th>Hình Ảnh</th>
                    <th>Hành Động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->name }}</td>
                        <td>{{ \Str::limit($post->description, 50) }}</td>
                        <td>{{ $post->category() ? $post->category()->first()->name : 'Không có danh mục' }}</td>
                        <td>{{ $post->viewers }}</td>
                        <td>
                            @if ($post->image)
                                <img src="{{ asset('image/' . $post->image) }}" class="d-block w-100" alt="{{ $post->name }}" style="height: 100px; object-fit: cover;">
                            @else
                                Không có
                            @endif
                        </td>
                        <td align="center">
                            <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm" style="margin-bottom: 10px">Sửa</a>
                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection