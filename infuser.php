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
                <form action='login.php' method='POST' class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3">Thông tin</h1>
                    <div class="form-group">
                        <label for="username">Tên tài khoản</label>
                        <input type="text" name="username" 
                        id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="phone" name="phone" 
                        id="phone" class="form-control"required>
                    </div>      
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" 
                        id="email" class="form-control"required>                       
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="address" name="address" 
                        id="address" class="form-control"required>                       
                    </div>               

                    <input type="submit" value="Xác nhận" class="btn-primary btn btn-block my-3">
                    <a href='./admin/forgotpass.php' title='Đổi mật khẩu' >Đổi mật khẩu</a>
                    <a style="float: right;" href='index.php' title='Trang chủ' >Trang chủ</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>