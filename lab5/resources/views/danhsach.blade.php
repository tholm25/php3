@extends('layout')

@section('title', 'Danh sách tin - THOLM NEWS')

@section('noidung')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">DANH SÁCH TIN TỨC</h1>
        <a href="{{ route('tin.them') }}" class="btn btn-warning">
            <i class="fas fa-plus"></i> Thêm tin mới
        </a>
    </div>

    <div class="list-group">
        @foreach ($data as $tin)
        <div class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <div class="flex-grow-1 me-3">
                    <div class="d-flex align-items-center mb-2">
                        <!-- Badge loại tin -->
                        <span class="badge me-2 
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
                        
                        <!-- Thời gian đăng -->
                        <small class="text-muted">
                            <i class="far fa-clock"></i> {{ $tin->created_at->format('H:i d/m/Y') }}
                        </small>
                    </div>
                    
                    <a href="{{ route('tin.chitiet', ['id' => $tin->id]) }}" class="text-decoration-none">
                        <h5 class="mb-1">{{ $tin->tieuDe }}</h5>
                    </a>
                    <p class="mb-1 text-muted">{{ Str::limit($tin->tomTat, 150) }}</p>
                </div>
                <div class="d-flex flex-column">
                    <a href="{{ route('tin.capnhat', ['id' => $tin->id]) }}" class="btn btn-sm btn-outline-primary mb-2">
                        <i class="fas fa-edit me-1"></i>Sửa
                    </a>
                    <a href="{{ route('tin.xoa', ['id' => $tin->id]) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc muốn xóa tin này?')">
                        <i class="fas fa-trash me-1"></i>Xóa
                    </a>
                </div>
            </div>
        </div>
        @endforeach

        @if($data->isEmpty())
        <div class="text-center py-5">
            <img src="{{ asset('image/no-data.svg') }}" alt="Không có dữ liệu" style="max-width: 300px;" class="mb-4">
            <h4 class="text-muted">Chưa có tin tức nào</h4>
            <a href="{{ route('tin.them') }}" class="btn btn-warning mt-3">
                <i class="fas fa-plus"></i> Thêm tin đầu tiên
            </a>
        </div>
        @endif
    </div>
</div>
@endsection