@extends('layout')

@section('title', 'Thêm tin mới - THOLM NEWS')

@section('noidung')
<div class="container">
    <h1 class="mb-4">THÊM TIN MỚI</h1>
    
    <form action="{{ route('tin.them') }}" method="post" enctype="multipart/form-data" class="col-md-8 mx-auto">
        @csrf
        <div class="mb-3">
            <label for="tieuDe" class="form-label">Tiêu đề:</label>
            <input type="text" name="tieuDe" id="tieuDe" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="tomTat" class="form-label">Tóm tắt:</label>
            <textarea name="tomTat" id="tomTat" class="form-control" rows="3" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="hinhAnh" class="form-label">Hình ảnh:</label>
            <input type="file" name="hinhAnh" id="hinhAnh" class="form-control" accept="image/*" required>
        </div>
        
        <div class="mb-3">
            <label for="idLT" class="form-label">Loại tin:</label>
            <select name="idLT" id="idLT" class="form-control" required>
                <option value="1">Xã hội</option>
                <option value="2">Thời sự</option>
                <option value="3">Du lịch</option>
                <option value="4">Thế giới</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-warning">Thêm tin</button>
    </form>
</div>
@endsection