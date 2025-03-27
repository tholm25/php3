<!DOCTYPE html>
<html lang="vi">
<head>     
    <title>@yield('title', 'THOLM NEWS')</title> 
    <meta charset="utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/> 
    <style> 
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        header {
            height: 80px; 
            background: #007bff; 
            color: white; 
            padding-left: 30px; 
            line-height: 80px; 
            font-size: 24px; 
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            background: #ffc107;
            font-weight: bold;
        }
        .navbar a {
            color: #343a40 ;
            padding: 10px 15px;
            transition: 0.3s;
        }
        .navbar a:hover {
            background: #e0a800;
            color: white ;
        }
        main {
            display: flex; 
            min-height: 500px; 
            margin-top: 20px;
        }
        footer {
            height: 50px; 
            background: #343a40; 
            color: white; 
            margin-top: 10px;
            text-align: center; 
            line-height: 50px;
            font-size: 14px;
            font-weight: 600;
        }
        article {
            flex: 3;
            background: white;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        aside {
            flex: 1;
            background: #17a2b8;
            padding: 20px;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            margin-left: 20px;
        }
        .dropdown-menu a:hover {
            background: #e0a800;
            color: white ;
        }
        a{
            text-decoration: none
        }
    </style> 
</head> 
<body> 
    <div class="container"> 
        <a href="{{ route('trangchu') }}"><header>THOLM NEWS</header></a> 
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('trangchu') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('thongtin.danhsach') }}">Tin Tức Nổi Bật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin.loai', ['loai' => 1]) }}">Thời sự</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin.loai', ['loai' => 2]) }}">Kinh tế</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tin.loai', ['loai' => 3]) }}">Thế giới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('lienhe') }}">Liên Hệ</a>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>         
        <main class="container">
            <article> 
                @yield('noidung')
            </article> 
            <aside> 
                <h4>Thông Tin Bổ Sung</h4>
                <ul>
                    <li>Tin nổi bật hôm nay</li>
                    <li>Xu hướng đọc nhiều</li>
                    <li>Dự báo thời tiết</li>
                </ul>
            </aside> 
        </main> 
        <footer>Phát triển bởi Lê Minh Thọ - PA00262</footer> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>  
</html>
