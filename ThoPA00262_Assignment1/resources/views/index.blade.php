@extends('layout')

@section('title', 'Trang Chủ')

@section('noidung')
<div class="container mt-4">
    <div class="banner text-center mb-5">
        <div class="banner-content">
            <h1 class="display-4 fw-bold text-white">Chào mừng đến với Tholm News</h1>
            <p class="lead text-white">Cập nhật tin tức nóng hổi mỗi ngày!</p>
        </div>
    </div>

    <section class="featured-news mb-5">
        <h2 class="section-title">Tin tức nổi bật</h2>
        <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($featuredPosts as $index => $post)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img src="{{ asset('image/' . $post->image) }}" class="d-block w-100" alt="{{ $post->name }}" style="height: 400px; object-fit: cover;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="fw-bold">{{ $post->name }}</h5>
                            <p>{{ Str::limit($post->description, 100) }}</p>
                            <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Xem chi tiết</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="news-grid">
        <h2 class="section-title">Tin mới nhất</h2>
        <div class="row">
            @foreach($recentPosts as $post)
                <div class="col-md-4 mb-4">
                    <div class="news-card">
                        <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}"><img src="{{ asset('image/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}" style="height: 200px; object-fit: cover;"></a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}">{{ Str::limit($post->name, 50) }}</a>
                            </h5>
                            <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}"><p class="card-text text-muted">{{ Str::limit($post->description, 99) }}</p></a>
                            <small class="text-muted">Lượt xem: {{ $post->viewers }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>

<style>
    .banner {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1504711434969-e26ccdf43545?q=80&w=2074&auto=format&fit=crop');
        background-size: cover;
        background-position: center;
        padding: 100px 20px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .banner-content {
        background: rgba(211, 47, 47, 0.8);
        display: inline-block;
        padding: 20px 40px;
        border-radius: 8px;
    }

    .section-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 1.8rem;
        margin-bottom: 20px;
        border-bottom: 2px solid #d32f2f;
        display: inline-block;
    }

    .carousel-caption {
        background: rgba(0, 0, 0, 0.6);
        padding: 15px;
        border-radius: 8px;
    }
    .carousel-caption h5 {
        color: #fff;
        font-size: 1.5rem;
    }
    .carousel-caption p {
        color: #ddd;
    }

    .news-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .news-card .card-title a {
        color: #333;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }
    .news-card .card-title a:hover {
        color: #d32f2f;
    }
    .card-text {
        font-size: 0.95rem;
        line-height: 1.5;
    }
    a{
        text-decoration: none;
    }
</style>
@endsection