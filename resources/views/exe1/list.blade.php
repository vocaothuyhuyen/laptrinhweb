
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Danh sách user</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <div class="container my-3 text-center border py-2">
        <a href='{{ route("exe.index") }}'>Home</a> | 
        <a href='{{ route("exe.login") }}'>Đăng xuất</a>
      </div>
  <h4 class="text-center mb-3">Danh sách user</h4>
  <!-- Hiển thị username nếu có -->
 
  <table class="table table-bordered table-striped text-center">
    <thead>
      <tr>
        <th>#</th>
        <th>Username</th>
        <th>Email</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>user1</td>
        <td>{{ $username }}</td>
        <td>
          <a href='{{ route("exe.update") }}'>Edit</a> |
          <a href='{{ route("exe.view") }}'>View</a> |
          <a href="#">Delete</a>
        </td>
      </tr>
      <!-- Thêm các dòng tương tự theo nhu cầu -->
    </tbody>
  </table>
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </nav>
</div>
</body>
</html>
