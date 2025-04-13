@extends('layout')

@section('title', 'Quên Mật Khẩu')

@section('noidung')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="login-card p-4">
                <h2 class="section-title text-center mb-4">Quên Mật Khẩu</h2>

                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->has('email'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $errors->first('email') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Gửi Link Đặt Lại Mật Khẩu</button>
                </form>
                <a href="{{ route('dangnhap') }}" class="text-danger">
                <p class="mt-3">
                  Quay lại trang đăng nhập
                </p></a>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .text-danger{
        text-decoration: none
    }
    .text-danger:hover{
        text-decoration: underline;
    }
</style>