@extends('admin.layout')

@section('title', 'Sửa Danh Mục - THOLM NEWS')
@section('page-title', 'Sửa Danh Mục')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên Danh Mục</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
@endsection