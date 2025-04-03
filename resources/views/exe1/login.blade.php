<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Màn hình đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-3 text-center border py-2">
        <a href='{{ route("exe.index") }}'>Home</a> |
        <a href='{{ route("exe.login") }}'>Đăng nhập</a> |
        <a href='{{ route("exe.register") }}'>Đăng ký</a>
    </div>
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card p-4 shadow-sm" style="width: 400px;">

            <h4 class="card-title text-center mb-3">Màn hình đăng nhập</h4>
            <form action="{{ route('exe.list') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Ghi nhớ đăng nhập
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
            </form>

        </div>
    </div>

</body>

</html>