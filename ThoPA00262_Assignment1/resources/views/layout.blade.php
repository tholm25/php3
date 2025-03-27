<!DOCTYPE html>
<html lang="vi">
<head>     
    <title>@yield('title', 'THOLM NEWS')</title> 
    <meta charset="utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/> 
</head> 
<body> 
    <header>
        <div class="logo-date-container">
            <a href="{{ route('trangchu') }}" class="logo">
                <img src="{{ asset('image/logo.png') }}" alt="THOLM NEWS">THOLM NEWS
            </a>
            <div class="header-date">
                <span>{{ \Illuminate\Support\Str::title(\Carbon\Carbon::now()->translatedFormat('l')) }}, {{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
            </div>
        </div>
        <div class="auth-links d-flex align-items-center">
            @auth
                <span class="text-white me-2" style="font-size: 17px;">Chào mừng, {{ Auth::user()->name }}</span>
                <a href="#" class="text-white text-decoration-none"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Đăng xuất
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            @else
                <a href="{{ route('login') }}" class="text-white text-decoration-none me-2">Đăng nhập</a>
                <a href="{{ route('register') }}" class="text-white text-decoration-none">Đăng ký</a>
            @endauth
        </div>
    </header>        
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('trangchu') }}">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('thongtin.danhsach') }}">Tin Nổi Bật</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tin.loai', ['loai' => 1]) }}">Thời sự</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tin.loai', ['loai' => 2]) }}">Kinh tế</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tin.loai', ['loai' => 3]) }}">Thế giới</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('lienhe') }}">Liên Hệ</a></li>
            </ul>
            <form class="d-flex" action="{{ route('timkiem') }}" method="GET">
                <input class="form-control me-2" type="search" name="name" placeholder="Nhập thông tin tìm kiếm..." value="{{ request()->input('name') }}">
                <button class="btn btn-light" type="submit">Tìm</button>
            </form>
        </div>
    </nav>         
    <main class="container">
        <div class="news-section">
            <div class="news-content">
                @yield('noidung')
            </div> 
            <div class="sidebar">
                <h4>Xu hướng</h4>
                <ul>
                    <li>Bài viết nổi bật</li>
                    <li>Chuyên đề hot</li>
                    <li>Nhận định chuyên gia</li>
                </ul>
            </div>
        </div>
    </main> 
    <footer>© 2025 - Lê Minh Thọ - PA00262</footer> 

    <style> 
        body {
            background: #f5f6fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            color: #333;
        }
        header {
            background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
            position: relative;
        }
        .logo-date-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .header-date {
            color: white;
            font-size: 12px;
            font-weight: 400;
        }
        .navbar {
            background: #b71c1c;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar a {
            color: white;
            padding: 12px 20px;
            transition: all 0.3s ease;
            border-radius: 4px;
            font-weight: 500;
        }
        .navbar a:hover {
            background: #ff5252;
            color: white;
            transform: translateY(-2px);
        }
        main {
            flex: 1;
            margin: 30px 0;
        }
        .news-section {
            display: flex;
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .news-content {
            flex: 2;
            background: white;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            transition: transform 0.2s ease;
        }
        .news-content:hover {
            transform: translateY(-5px);
        }
        .sidebar {
            flex: 1;
            background: white;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
        }
        .sidebar h4 {
            color: #d32f2f;
            margin-bottom: 15px;
            border-bottom: 2px solid #d32f2f;
            padding-bottom: 5px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }
        footer {
            background: linear-gradient(135deg, #333 0%, #1a1a1a 100%);
            color: #ddd;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            width: 100%;
            font-size: 14px;
        }
        .auth-links a {
            font-size: 16px;
            padding: 6px 12px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .auth-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            text-decoration: none;
            color: white;
        }
        .logo {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: opacity 0.3s ease;
        }
        .logo:hover {
            opacity: 0.9;
            color: white;
        }
        .logo img {
            height: 80px;
            transition: transform 0.3s ease;
        }
        .logo:hover img {
            transform: scale(1.05);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>  
</html>