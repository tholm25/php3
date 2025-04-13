@extends('layout')

@section('title', 'Thông tin tài khoản - THOLM NEWS')

@section('noidung')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="section-title text-center mb-4">Thông tin tài khoản</h2>
            <div class="profile-card">
                <div class="profile-info">
                    <p class="d-flex align-items-center">
                        <i class="bi bi-person-fill"></i>
                        <strong>Họ tên:</strong>
                        <span>{{ Auth::user()->name }}</span>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="bi bi-envelope-fill"></i>
                        <strong>Email:</strong>
                        <span>{{ Auth::user()->email }}</span>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="bi bi-calendar-check-fill"></i>
                        <strong>Ngày tạo:</strong>
                        <span>{{ Auth::user()->created_at->format('d/m/Y') }}</span>
                    </p>
                </div>
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

    .profile-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
        padding: 2rem;
    }

    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }

    .profile-info p {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .profile-info .d-flex {
        flex-wrap: nowrap;
        align-items: center;
    }

    .profile-info strong {
        min-width: 100px;
        font-weight: 600;
        color: #1a1a1a;
    }

    .profile-info i {
        color: #d32f2f;
        margin-right: 0.75rem;
        font-size: 1.2rem;
    }

    @media (max-width: 576px) {
        .profile-card {
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.75rem;
        }

        .profile-info p {
            font-size: 1rem;
        }

        .profile-info strong {
            min-width: 80px;
        }

        .profile-info i {
            font-size: 1.1rem;
            margin-right: 0.5rem;
        }
    }
</style>
