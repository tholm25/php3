@extends('layout')

@section('title', "Tin tức theo loại: $category->name")

@section('noidung')
<div class="container mt-4 mb-5">
    <h1 class="section-title mb-4">{{ $category->name }}</h1>
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-12 mb-4">
                <div class="news-card">
                    <div class="row g-0">
                        @if($post->image)
                            <div class="col-md-4">
                                <img src="{{ asset('image/' . $post->image) }}" class="img-fluid rounded-start" alt="{{ $post->name }}" style="height: 100%; object-fit: cover;">
                            </div>
                        @endif
                        <div class="col-md-{{ $post->image ? '8' : '12' }}">
                            <div class="card-body">
                                <h2 class="news-title">
                                    <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}">{{ $post->name }}</a>
                                </h2>
                                <p class="text-muted">{{ Str::limit($post->description, 150) }}</p>
                                <p class="text-muted"><small>Lượt xem: {{ $post->viewers }} | Ngày đăng: {{ $post->created_at->format('d/m/Y') }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Hiện tại chưa có tin tức nào trong chuyên mục này.</p>
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
    </div>
</div>

<style>
    .section-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 2rem;
        border-bottom: 2px solid #d32f2f;
        display: inline-block;
    }
    .news-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        overflow: hidden;
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .news-title a {
        color: #333;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }
    .news-title a:hover {
        color: #d32f2f;
    }
    .card-body {
        padding: 20px;
    }
    .text-muted {
        font-size: 1rem;
        line-height: 1.5;
    }
</style>
@endsection