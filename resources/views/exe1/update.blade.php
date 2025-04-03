
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Màn hình cập nhật</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-3 text-center border py-2">
        <a href='{{ route("exe.index") }}'>Home</a> | 
        <a href='{{ route("exe.login") }}'>Đăng xuất</a>
      </div>
<div class="container vh-100 d-flex justify-content-center align-items-center">
  <div class="card p-4 shadow-sm" style="width: 400px;">
    <h4 class="text-center mb-3">Màn hình cập nhật</h4>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Username">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Mật khẩu">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" placeholder="Email">
      </div>
      <button class="btn btn-primary w-100">Cập nhật</button>
      <div class="text-center mt-3">
        <a href="dangnhap.html">Đã có tài khoản</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
