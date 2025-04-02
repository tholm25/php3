@extends('layout')

@section('title', $tin->tieuDe . ' - THOLM NEWS')

@section('noidung')
<div class="container py-4">
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('trangchu') }}">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('tin.danhsach') }}">Danh sách tin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết tin</li>
        </ol>
    </nav>

    <article class="card shadow-sm">
        <div class="card-body">
            <!-- Thêm badge loại tin ngay dưới tiêu đề -->
            <div class="mb-3">
                <span class="badge 
                    @switch($tin->idLT)
                        @case(1) bg-primary @break
                        @case(2) bg-success @break
                        @case(3) bg-warning text-dark @break
                        @case(44) bg-info text-dark @break
                        @default bg-secondary
                    @endswitch">
                    @switch($tin->idLT)
                        @case(1) Xã hội @break
                        @case(2) Thời sự @break
                        @case(3) Du lịch @break
                        @case(4) Thế giới @break
                        @default Khác
                    @endswitch
                </span>
            </div>
            
            <h1 class="card-title mb-3">{{ $tin->tieuDe }}</h1>
            
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="text-muted">
                    <i class="far fa-calendar-alt me-1"></i>{{ $tin->created_at->format('H:i d/m/Y') }}
                </div>
                <div>
                    <a href="{{ route('tin.capnhat', ['id' => $tin->id]) }}" class="btn btn-sm btn-outline-primary">
                        <i class="fas fa-edit me-1"></i>Sửa
                    </a>
                    <a href="{{ route('tin.xoa', ['id' => $tin->id]) }}" class="btn btn-sm btn-outline-danger ms-2" onclick="return confirm('Bạn có chắc muốn xóa tin này?')">
                        <i class="fas fa-trash me-1"></i>Xóa
                    </a>
                </div>
            </div>

            @if($tin->urlHinh)
            <div class="mb-4">
                <img src="{{ asset('image/' . $tin->urlHinh) }}" class="img-fluid rounded" alt="{{ $tin->tieuDe }}" style="max-height: 500px; width: auto;">
                @if($tin->tomTat)
                <p class="text-muted mt-2"><em>{{ $tin->tomTat }}</em></p>
                @endif
            </div>
            @endif

            <div class="article-content py-3">
                {!! nl2br(e($tin->noiDung)) !!}
            </div>
        </div>
    </article>
</div>
@endsection