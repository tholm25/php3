@extends('layout')

@section('title', "Kết quả tìm kiếm cho ". request()->input('name'))

@section('noidung')
<div class="container mt-4 mb-5">
    @if($posts->isEmpty())
        <div class="alert alert-info text-center" role="alert">
            Không tìm thấy kết quả nào cho từ khóa "{{ request()->input('name') }}".
        </div>
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-12 mb-4">
                    <div class="news-card">
                        <div class="row g-0">
                            @if($post->image)
                                <div class="col-md-4">
                                    <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}"><img src="{{ asset('image/' . $post->image) }}" class="img-fluid rounded-start" alt="{{ $post->name }}" style="height: 100%; object-fit: cover;"></a>
                                </div>
                            @endif
                            <div class="col-md-{{ $post->image ? '8' : '12' }}">
                                <div class="card-body">
                                    <h3 class="news-title">
                                        <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}">{{ $post->name }}</a>
                                    </h3>
                                    <a href="{{ route('thongtin.chiTiet', ['id' => $post->id]) }}"><p class="text-muted">{{ Str::limit($post->description, 150) }}</p></a>
                                    <p class="text-muted"><small>Lượt xem: {{ $post->viewers }} | Ngày đăng: {{ $post->created_at->format('d/m/Y') }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links() }}
        </div>
    @endif
</div>

<style>
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
    .alert-info {
        background-color: #e9f7ff;
        border-color: #b8e2ff;
        color: #31708f;
    }
    a{
        text-decoration: none;
    }
</style>
@endsection