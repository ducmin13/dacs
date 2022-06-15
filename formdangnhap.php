<?php
    include('/xampp/htdocs/doancoso/admin/database.php');
    $con = mysqli_connect("localhost", "root", "", "dacs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action='./admin/login.php' method='POST' class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3"> Đăng Nhập</h1>
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" 
                        id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" 
                        id="password" class="form-control"required>
                    </div>
                        <input type="Checkbox" name="remember-me" id="remember-me">
                        <label for="p-3">Lưu tài khoản</label>
                    <input type="submit" value="Đăng nhập" class="btn-primary btn btn-block my-3">
                    <p>Chưa có tài khoản?
                    <a href='./formdangky.php' title='Đăng ký' >Đăng ký </a>
                    <a style="float: right;" href='./index.php' title='Trang chủ' >Trang chủ</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>