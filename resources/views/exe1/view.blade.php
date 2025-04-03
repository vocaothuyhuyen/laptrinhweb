<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Màn hình chi tiết user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-3 text-center border py-2">
        <a href='{{ route("exe.index") }}'>Home</a> |
        <a href='{{ route("exe.login") }}'>Đăng xuất</a>
    </div>
    <div class="container vh-100 d-flex justify-content-center align-items-center">

        <div class="card p-4 shadow-sm" style="width: 400px;">
            <h4 class="text-center mb-3">Màn hình chi tiết</h4>
            <p><strong>Username:</strong> test1</p>
            <p><strong>Email:</strong> test1@gmail.com</p>
            <a href="update.html" class="btn btn-primary">Chỉnh sửa</a>
        </div>
    </div>
</body>

</html>