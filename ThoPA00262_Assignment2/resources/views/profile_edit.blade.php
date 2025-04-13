@extends('layout')

@section('title', 'Chỉnh sửa thông tin - THOLM NEWS')

@section('noidung')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="section-title text-center mb-4">Chỉnh sửa thông tin</h2>
            <div class="edit-card">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Họ tên</label>
                        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email (không thay đổi được)</label>
                        <input type="email" value="{{ Auth::user()->email }}" class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="current_password" class="form-label">Mật khẩu hiện tại</label>
                        <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror">
                        @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="new_password" class="form-label">Mật khẩu mới</label>
                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror">
                        @error('new_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="new_password_confirmation" class="form-label">Xác nhận mật khẩu mới</label>
                        <input type="password" name="new_password_confirmation" class="form-control">
                    </div>

                    <button type="submit" class="submit">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .section-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 2rem;
        border-bottom: 2px solid #d32f2f;
        display: inline-block;
        padding-bottom: 5px;
    }

    .edit-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        padding: 2rem;
    }

    .edit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }

    .form-label {
        font-weight: 600;
        color: #1a1a1a;
        font-size: 1.1rem;
    }

    .form-control {
        border-radius: 8px;
        border: 1px solid #d1d5db;
        padding: 0.75rem;
        font-size: 1rem;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .form-control:focus {
        border-color: #d32f2f;
        box-shadow: 0 0 0 0.2rem rgba(211, 47, 47, 0.25);
        outline: none;
    }

    .form-control[readonly] {
        background: #f5f5f5;
        color: #6b7280;
    }

    .submit {
        background: #d32f2f;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: background 0.3s ease, transform 0.2s ease;
    }

    .submit:hover {
        background: #ff5252;
        transform: translateY(-2px);
    }

    .alert-success {
        background: #f0fdf4;
        color: #15803d;
        border-radius: 8px;
        border: 1px solid #bbf7d0;
        padding: 1rem;
        font-size: 1rem;
    }

    @media (max-width: 576px) {
        .edit-card {
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.75rem;
        }

        .form-label {
            font-size: 1rem;
        }

        .form-control {
            font-size: 0.95rem;
            padding: 0.65rem;
        }

        .submit {
            font-size: 1rem;
            padding: 0.65rem 1.25rem;
        }

        h5 {
            font-size: 1.15rem;
        }
    }
</style>