@extends('layout')
@section('title', $thongtin->name)
@section('noidung')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi Tiết Tin Tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .news-container {
            max-width: 800px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .news-title {
            color: #007bff;
            font-weight: bold;
        }
        .news-date {
            font-size: 14px;
            color: #6c757d;
        }
        .news-content {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        .back-link {
            font-size: 14px;
            color: #6c757d;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        .back-link:hover {
            text-decoration: underline;
            color: #5a6268;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center mt-5">
    <div class="news-container">
        <h1 class="news-title">{{ $thongtin->name }}</h1>
        <p class="news-date">Ngày đăng: {{ $thongtin->created_at->format('d/m/Y') }}</p>
        <hr>
        <p class="news-content">{{ $thongtin->description }}</p>
        <p class="news-content">{{ $thongtin->detail }}</p>
    </div>
</div>

</body>
</html>

@endsection
