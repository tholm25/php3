@extends('layout') 

@section('title', 'Đặt lại mật khẩu')

@section('noidung')
<div class="container">
    <h2>Đặt lại mật khẩu</h2>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mật khẩu mới</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Xác nhận mật khẩu</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
            <p class="text-center mt-3"><a href="{{ route('password.email') }}" class="text-danger">Gửi lại link đặt mật khẩu</a></p>
        </div>
    </form>
</div>
@endsection
<style>
    .submit {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .text-danger{
        text-decoration: none;
    }
    .text-danger:hover{
        text-decoration: underline;
    }
</style>
