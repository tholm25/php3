@extends('layout')

@section('title', 'Cập nhật tin - THOLM NEWS')

@section('noidung')
<div class="container">
    <h1 class="mb-4">CẬP NHẬT TIN</h1>
    
    <form action="{{ route('tin.capnhat', ['id' => $tin->id]) }}" method="post" enctype="multipart/form-data" class="col-md-8 mx-auto">
        @csrf
        <div class="mb-3">
            <label for="tieuDe" class="form-label">Tiêu đề:</label>
            <input type="text" name="tieuDe" id="tieuDe" class="form-control" value="{{ $tin->tieuDe }}" required>
        </div>
        
        <div class="mb-3">
            <label for="tomTat" class="form-label">Tóm tắt:</label>
            <textarea name="tomTat" id="tomTat" class="form-control" rows="3" required>{{ $tin->tomTat }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="hinhAnh" class="form-label">Hình ảnh mới (nếu muốn thay đổi):</label>
            <input type="file" name="hinhAnh" id="hinhAnh" class="form-control" accept="image/*">
            <small class="text-muted">Để trống nếu giữ nguyên hình ảnh hiện tại</small>
            <div class="mt-2">
                <img src="{{ asset('image/' . $tin->urlHinh) }}" alt="Hình hiện tại" style="max-height: 200px;">
                <p class="text-muted">Hình hiện tại</p>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="idLT" class="form-label">Loại tin:</label>
            <select name="idLT" id="idLT" class="form-control" required>
                <option value="1" {{ $tin->idLT == 1 ? 'selected' : '' }}>Xã hội</option>
                <option value="2" {{ $tin->idLT == 2 ? 'selected' : '' }}>Thời sự</option>
                <option value="3" {{ $tin->idLT == 3 ? 'selected' : '' }}>Du lịch</option>
                <option value="4" {{ $tin->idLT == 4 ? 'selected' : '' }}>Thế giới</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-warning">Cập nhật</button>
    </form>
</div>
@endsection