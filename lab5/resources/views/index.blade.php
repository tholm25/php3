@extends('layout')

@section('title', 'Trang Chủ - THOLM NEWS')

@section('noidung')
<div class="container">
    <div class="banner text-center py-5 mb-4 bg-primary text-white rounded">
        <h1 class="display-5 fw-bold">THOLM NEWS</h1>
        <p class="lead">Tin tức cập nhật 24/7</p>
    </div>

    <div class="mb-4">
        <h3 class="mb-3"><i class="fas fa-bolt text-warning"></i> Tin mới cập nhật</h3>
        
        @foreach($tinMoiNhat as $tin)
        <div class="card mb-3">
            <div class="row g-0">
                @if($tin->urlHinh)
                <div class="col-md-4">
                    <img src="{{ asset('image/' . $tin->urlHinh) }}" class="img-fluid rounded-start" alt="{{ $tin->tieuDe }}" style="height: 150px; object-fit: cover;">
                </div>
                @endif
                <div class="{{ $tin->urlHinh ? 'col-md-8' : 'col-md-12' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tin->tieuDe }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($tin->tomTat, 100) }}</p>
                        <a href="{{ route('tin.chitiet', $tin->id) }}" class="btn btn-sm btn-outline-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection