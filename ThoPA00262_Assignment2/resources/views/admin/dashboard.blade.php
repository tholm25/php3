@extends('admin.layout')

@section('title', 'Tổng Quan - THOLM NEWS')
@section('page-title', 'Tổng Quan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-family: 'Roboto', sans-serif;">
                                    Tổng Bài Viết</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Montserrat', sans-serif;">{{ $stats['posts'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-family: 'Roboto', sans-serif;">
                                    Tổng Danh Mục</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Montserrat', sans-serif;">{{ $stats['categories'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1" style="font-family: 'Roboto', sans-serif;">
                                    Tổng Người Dùng</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Montserrat', sans-serif;">{{ $stats['users'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1" style="font-family: 'Roboto', sans-serif;">
                                    Bài Viết Mới</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-family: 'Montserrat', sans-serif;">{{ $stats['latest_posts']->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card shadow">
                <h6 class="mt-3 font-weight-bold text-primary" style="font-family: 'Roboto', sans-serif;">BÀI VIẾT MỚI NHẤT</h6>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tiêu Đề</th>
                                    <th>Danh Mục</th>
                                    <th>Ngày Đăng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($stats['latest_posts'] as $post)
                                    <tr>
                                        <td>{{ Str::limit($post->name, 30) }}</td>
                                        <td>{{ $post->category() ? $post->category()->first()->name : 'Không có danh mục' }}</td>
                                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Không có bài viết nào</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .welcome-message {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card {
            transition: all 0.3s ease;
            border: none;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,.1);
        }
        .border-left-primary {
            border-left: 4px solid #4e73df;
        }
        .border-left-success {
            border-left: 4px solid #1cc88a;
        }
        .border-left-info {
            border-left: 4px solid #36b9cc;
        }
        .border-left-warning {
            border-left: 4px solid #f6c23e;
        }
        .btn-block {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection

@section('scripts')
    @if(session('success'))
        <script>
            toastr.success('{{ session('success') }}');
        </script>
    @endif
@endsection

