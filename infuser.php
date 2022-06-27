<?php 
    include "./header.php";
    $con = mysqli_connect("localhost", "root", "", "dacs");
    $username  = $_SESSION["username"];
    $query = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
    $r=mysqli_fetch_array($query);

    if(isset($_POST['btncapnhat'])==true){

        $username   = $_POST['username'];
        $name   = $_POST['name'];
        $email      = $_POST['email'];
        $phone   = $_POST['phone'];
        $address = $_POST['address'];

        if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email))
    {
        echo "
			<script language='javascript'>
			alert('Email này không hợp lệ. Vui lòng nhập email khác.');
			window.open('./infuser.php','_self', 1);
			</script>";
        exit;
    }


    if (!preg_match("/((09|03|07|08|05)+([0-9]{8})\b)/", $phone))
    {
            echo "
			<script language='javascript'>
			alert('Số điện thoại không hợp lệ. Vui lòng nhập lại.');
			window.open('./infuser.php','_self', 1);
			</script>";
            exit;
        }

        $query1 = mysqli_query($con,"UPDATE member SET 
        name = '$name',
        email = '$email',
        phone = '$phone',
        address = '$address'
        WHERE username = '$username' ");
        
        if($query1){
            echo "
			<script language='javascript'>
			alert('Cập nhật thành công');
			window.open('./infuser.php','_self', 1);
			</script>";
        }else{
            echo "
			<script language='javascript'>
			alert('Cập nhật thất bại');
			window.open('./infuser.php','_self', 1);
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
    <title>Thông tin</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action='' method='POST' class="col-md-6 bg-light p-3 my-3">
                    <legend class="text-center text-uppercase h3 py-3">Thông tin</legend>
                    <div class="form-group">
                        <label for="username">Tên tài khoản</label>
                        <input value="<?php echo $r['username'] ?>" type="username" name="username" 
                        id="username" class="form-control"required readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên </label>
                        <input value="<?php echo $r['name'] ?>" type="name" name="name" 
                        id="name" class="form-control"required>
                    </div>   
                
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input value="<?php echo $r['phone'] ?>" type="phone" name="phone" 
                        id="phone" class="form-control"required>
                    </div>    

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $r['email'] ?>" 
                        id="email" class="form-control"required>                       
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="address" name="address" value="<?php echo $r['address'] ?>"
                        id="address" class="form-control">                       
                    </div>               

                    <input type="submit" name="btncapnhat" value="Cập nhật" class="btn-primary btn btn-block my-3">
                    <a href='./formdoimk.php' title='Đổi mật khẩu' >Đổi mật khẩu</a>
                    <a style="float: right;" href='./index.php' title='Trang chủ' >Trang chủ</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>