
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
    <link rel="stylesheet" href="/admin/style.php" media="screen">
    <title>Đăng ký tài khoản</title>
</head>
<body >
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action="registor.php" method="POST" class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3"> Đăng ký tài khoản</h1>

                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" 
                        id="usename" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" name="password" 
                        id="password" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="cfpassword">Nhập lại mật khẩu</label>
                        <input type="password" name="cfpassword" 
                        id="cfpassword" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" 
                        id="email" class="form-control"required>                       
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="phone" name="phone" 
                        id="phone" class="form-control"required>
                    </div>              
                    <input  type="submit" value="Đăng ký" class="btn-primary btn btn-block">
                    <p>Đã có tài khoản?
                    <a href='formdangnhap.php' title='Đăng nhập' >Đăng nhập </a>
                </form>
            </div>
        </div>
        
    </div>
</div>
</div>
</html>