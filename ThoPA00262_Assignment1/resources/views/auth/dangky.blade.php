@extends('layout')

@section('title', 'Đăng ký')

@section('noidung')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="register-card p-4">
                <h2 class="section-title text-center mb-4">Đăng ký</h2>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Đăng ký</button>
                </form>

                <p class="text-center mt-3">Đã có tài khoản? <a href="{{ route('dangnhap') }}" class="text-danger">Đăng nhập ngay</a></p>
            </div>
        </div>
    </div>
</div>

<style>
    .section-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 2rem;
        border-bottom: 2px solid #d32f2f;
        /* display: inline-block; */
        text-align: center
    }
    .register-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }
    .register-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .form-label {
        font-weight: 500;
        color: #333;
    }
    .form-control {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
    }
    .form-control:focus {
        border-color: #d32f2f;
        box-shadow: 0 0 5px rgba(211, 47, 47, 0.5);
    }
    .btn-danger {
        background: #d32f2f;
        border: none;
        padding: 12px;
        font-weight: 500;
        transition: background 0.3s ease;
    }
    .btn-danger:hover {
        background: #ff5252;
    }
    .text-danger {
        color: #d32f2f;
        text-decoration: none;
        font-weight: 500;
    }
    .text-danger:hover {
        color: #ff5252;
        text-decoration: underline;
    }
    .alert ul {
        padding-left: 20px;
    }
</style>
@endsection