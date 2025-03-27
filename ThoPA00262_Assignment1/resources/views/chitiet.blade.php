@extends('layout')

@section('title', $post->name)

@section('noidung')
<div class="container mt-5">
    <div class="news-container mx-auto">
        <h1 class="news-title">{{ $post->name }}</h1>
        <p class="news-date">Ngày đăng: {{ $post->created_at->format('d/m/Y H:i') }} | Lượt xem: {{ $post->viewers }}</p>
        <p>{{ $post->description }}</p>
        <hr>
        @if($post->image)
            <img src="{{ asset('image/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid rounded mb-4" style="max-height: 400px; object-fit: cover; width: 100%;">
        @endif
        <div class="news-content">
            
            <p>{!! nl2br(e($post->detail)) !!}</p>
        </div>
    </div>
</div>

<style>
    .news-container {
        max-width: 900px;
        background: white;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease-in-out;
    }
    .news-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .news-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .news-date {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 15px;
    }
    .news-content {
        font-size: 1.1rem;
        color: #333;
        line-height: 1.8;
    }
    .news-content p {
        margin-bottom: 15px;
    }
    .back-link {
        font-size: 1rem;
        color: #d32f2f;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    .back-link:hover {
        color: #ff5252;
        text-decoration: underline;
    }
</style>
@endsection