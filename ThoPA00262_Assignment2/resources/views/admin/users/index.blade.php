@extends('admin.layout')

@section('title', 'Quản lý Người Dùng')
@section('page-title', 'Quản lý Người Dùng')

@section('content')
<div class="mb-3">
    <h4 class="text-danger">Danh sách người dùng</h4>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Quyền</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <select name="role" onchange="this.form.submit()" class="form-select form-select-sm">
                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                </form>
            </td>
            <td>
                @if($user->is_active)
                    <form method="POST" action="{{ route('admin.users.toggleActive', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-warning">Hủy kích hoạt</button>
                    </form>
                @else
                    <form method="POST" action="{{ route('admin.users.toggleActive', $user->id) }}">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm btn-success">Kích hoạt lại</button>
                    </form>
                @endif
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
