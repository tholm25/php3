<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
</head>
<body>
    <p>Xin chào,</p>
    <p>Bạn vừa yêu cầu đặt lại mật khẩu. Nhấp vào liên kết bên dưới để đặt lại mật khẩu:</p>
    <p>
        <a href="{{ url('/reset-password/'.$token) }}" style="color: #fff; background: #d32f2f; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Đặt lại mật khẩu
        </a>
    </p>
    <p>Nếu bạn không yêu cầu, vui lòng bỏ qua email này.</p>
    <p>Trân trọng,</p>
    <p>Đội ngũ hỗ trợ THOLM NEWS</p>
</body>
</html>
