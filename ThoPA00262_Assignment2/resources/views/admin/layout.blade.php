<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quản Trị - THOLM NEWS')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="sidebar">
        <h2><a href="{{ route('trangchu') }}">THOLM NEWS</a></h2>
        <a href="{{ route('admin.dashboard') }}"><i class="bi bi-house-fill"></i> Tổng Quan</a>
        <a href="{{ route('admin.categories') }}"><i class="bi bi-tags-fill"></i> Quản Lý Danh Mục</a>
        <a href="{{ route('admin.posts') }}"><i class="bi bi-file-text-fill"></i> Quản Lý Bài Viết</a>
        <a href="{{ route('admin.users') }}"><i class="bi bi-people-fill"></i> Quản Lý Người Dùng</a>
        <a href="{{ route('logout') }}" 
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
            class="logout-btn">
            <i class="bi bi-arrow-left-circle-fill"></i> Đăng xuất
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    <div class="content">
        <div class="header">
            <h3>@yield('page-title')</h3>
            <div class="user-info">
                <i class="bi bi-person-circle"></i> Xin chào, {{ Auth::user()->name }}
            </div>
        </div>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: #f5f6fa;
        margin: 0;
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 250px;
        background: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%);
        color: white;
        padding: 20px;
        position: fixed;
        height: 100%;
        box-shadow: 2px 0 8px rgba(0, 0, 0, 0.15);
    }

    .sidebar h2 a{
        padding: 5px;
        font-size: 1.75rem;
        margin-bottom: 2rem;
        text-align: center;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .sidebar a {
        color: #fff;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 12px 15px;
        margin: 8px 0;
        border-radius: 8px;
        font-size: 1.05rem;
        font-weight: 500;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .sidebar a:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateX(5px);
    }

    .sidebar a i {
        margin-right: 10px;
        font-size: 1.2rem;
    }

    .content {
        margin-left: 250px;
        padding: 30px;
        flex: 1;
        background: #f5f6fa;
    }

    .header {
        background: white;
        padding: 15px 30px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
        border-radius: 12px;
    }

    .header h3 {
        color: #d32f2f;
        font-weight: 600;
        font-size: 1.5rem;
        margin: 0;
    }

    .header .user-info {
        font-size: 1rem;
        color: #1a1a1a;
        font-weight: 500;
        display: flex;
        align-items: center;
    }

    .header .user-info i {
        color: #d32f2f;
        margin-right: 8px;
        font-size: 1.2rem;
    }

    .btn-primary {
        background: #d32f2f;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
        background: #ff5252;
        transform: translateY(-2px);
    }

    .table {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .table th {
        background: #d32f2f;
        color: white;
        font-weight: 600;
    }

    .table td {
        color: #333;
        font-size: 0.95rem;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 200px;
            padding: 15px;
        }

        .sidebar h2 {
            font-size: 1.5rem;
        }

        .sidebar a {
            font-size: 1rem;
            padding: 10px 12px;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            padding: 12px 20px;
        }

        .header h3 {
            font-size: 1.25rem;
        }

        .header .user-info {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: static;
            box-shadow: none;
        }

        .content {
            margin-left: 0;
            padding: 15px;
        }

        .header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }
</style>