<?php 
    include "./header.php";
    
    $username=$_SESSION["username"];
    

    if(isset($_POST['btndoimk'])==true){
        $password = base64_encode($_POST['password']);
        $newpassword = base64_encode($_POST['newpassword']);
        $cfnewpassword = base64_encode($_POST['cfnewpassword']);

        $con = mysqli_connect("localhost", "root", "", "dacs");
        $query = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
        $row = mysqli_fetch_array($query);
        if ($password != $row['password']) {
            echo "
                <script language='javascript'>
                alert('Mật khẩu cũ sai!');
                window.open('./formdoimk.php','_self', 1);
                </script>";
            exit;
        }

        if($password == $newpassword){
            echo "
            <script language='javascript'>
            alert('Mật khẩu cũ không được trùng với mật khẩu mới!');
            window.open('./formdoimk.php','_self', 1);
            </script>";
        exit;
        }

        if($newpassword != $cfnewpassword){
            echo "
            <script language='javascript'>
            alert('Mật khẩu mới không trùng khớp!');
            window.open('./formdoimk.php','_self', 1);
            </script>";
        exit;
        }else{
            $query1 = mysqli_query($con,"UPDATE member SET password = '$newpassword' WHERE username = '$username' ");
            $stmt = $con -> prepare($query1);
            echo "
                <script language='javascript'>
                alert('Đổi mật khẩu thành công!');
                window.open('./formdoimk.php','_self', 1);
                </script>";
        }

        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Đổi mật khẩu</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action='' method='POST' class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3">Đổi mật khẩu</h1>
                    <div class="form-group">
                        <label for="username">Tên tài khoản</label>
                        <input type="text" name="username"  value="<?php echo "$username" ?>"
                        id="username" class="form-control" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu cũ</label>
                        <input type="password" name="password" 
                        id="password" class="form-control"required>
                    </div>
                    
                    <div class="form-group">
                        <label for="newpassword">Mật khẩu mới</label>
                        <input type="password" name="newpassword" 
                        id="newpassword" class="form-control"required>
                    </div>
                    <div class="form-group">
                        <label for="cfnewpassword">Nhập lại mật khẩu mới</label>
                        <input type="password" name="cfnewpassword" 
                        id="cfnewpassword" class="form-control"required>
                    </div>

                    <input type="submit" name="btndoimk" value="Xác nhận" class="btn-primary btn btn-block my-3">
                    
                    <a href='./infuser.php' title='Đổi mật khẩu' >Trở về</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>