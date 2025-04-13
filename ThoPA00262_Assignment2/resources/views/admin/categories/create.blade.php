@extends('admin.layout')

@section('title', 'Tạo Danh Mục - THOLM NEWS')
@section('page-title', 'Tạo Danh Mục Mới')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên Danh Mục</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection