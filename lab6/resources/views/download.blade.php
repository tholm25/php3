<p>Chào bạn {{ Auth::user()->name }}</p>
Đây là trang Download Software, chỉ dành cho thành viên đăng nhập
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Thoát</button>
</form>