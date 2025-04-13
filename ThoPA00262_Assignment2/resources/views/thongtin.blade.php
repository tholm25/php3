@extends('layout')

@section('title', 'Tin Tức Nổi Bật')

@section('noidung')
<div class="container mt-4">
    <h1 class="mb-4" style="color: #d32f2f; font-weight: bold;">Tin tức nổi bật</h1>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-12 mb-4">
                <div class="news-card">
                    <h2 class="news-title">
                        <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}">{{ $post->name }}</a>
                    </h2>
                    <p class="text-muted"><a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}">{{ $post->description }}</a></p>
                    @if($post->image)
                    <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}"><img src="{{ asset('image/' . $post->image) }}" alt="{{ $post->name }}" class="img-fluid rounded" style="max-height: 250px; object-fit: cover;"></a>
                    @endif
                    <small class="text-muted d-block mt-2">Lượt xem: {{ $post->viewers }}</small>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>

<style>
    .news-card {
        border-radius: 12px;
        transition: transform 0.3s ease-in-out;
        padding: 20px;
        background: #ffffff;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.08);
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.12);
    }
    .news-title a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
        font-size: 1.5rem;
        transition: color 0.3s ease;
    }
    .news-title a:hover {
        color: #d32f2f;
    }
    .text-muted {
        font-size: 1rem;
        line-height: 1.5;
    }
    .text-muted a{
        color: #6c757d;
        text-decoration: none;
    }
</style>
@endsection