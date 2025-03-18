<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tin tức theo loại: {{ $loai }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .news-card {
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
            padding: 15px;
            background: #ffffff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        }
        .news-title a {
            text-decoration: none;
            color: #333;
            font-weight: 600;
        }
        .back-link {
            text-decoration: none;
            color: #6c757d;
            font-size: 14px;
        }
        .back-link:hover {
            text-decoration: underline;
            color: #5a6268;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4 text-primary">Danh sách tin trong loại: {{ $loai }}</h1>

    <div class="row">
        @foreach ($thongtins as $thongtin)
            <div class="col-md-6 mb-3">
                <div class="news-card">
                    <h2 class="news-title">
                        <a href="{{ route('thongtin.chiTiet', ['id' => $thongtin->id]) }}">{{ $thongtin->name }}</a>
                    </h2>
                    <p class="text-muted">{{ $thongtin->description }}</p>
                    <p class="text-muted"><small>Số lượt xem: {{ $thongtin->viewers }}</small></p>
                </div>
            </div>
        @endforeach
    </div>

    <a href="{{ route('thongtin.danhsach') }}" class="back-link">Quay lại danh sách tin</a>
</div>

</body>
</html>
