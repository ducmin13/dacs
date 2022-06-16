<?php
include ('./admin/database.php');

$con = mysqli_connect("localhost", "root", "", "dacs");
//Khai báo sử dụng session
session_start();

 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Xử lý đăng nhập

if (isset($_POST['username'])) 
{   
    
    
    //Lấy dữ liệu nhập vào
    $username = $_POST['username'];
    $password = $_POST['password'];
    
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "
			<script language='javascript'>
			alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu.');
			window.open('../formdangnhap.php','_self', 1);
			</script>";
        exit;
    }
     
    // mã hóa pasword
    $password = base64_encode($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($con,"SELECT username, password, typeuser FROM member WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "
			<script language='javascript'>
			alert('Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.');
			window.open('../formdangnhap.php','_self', 1);
			</script>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "
			<script language='javascript'>
			alert('Mật khẩu sai');
			window.open('../formdangnhap.php','_self', 1);
			</script>";
        exit;
    }

     
    // $query1 = mysqli_query($con,"SELECT * FROM member WHERE username='$username' , typeuser = '$password' ");
    // $row = mysqli_fetch_array($query1);

    if ($row['typeuser'] == '1') {   
        echo "
			<script language='javascript'>
			alert('Bạn đã đăng nhập với tư cách quản trị viên!');
			window.open('./categoryadd.php','_self', 1);
			</script>";
        die();           
    }
    else
    {             
        $_SESSION['username'] = $username;
        echo "
			<script language='javascript'>
			alert('Đăng nhập thành công');
			window.open('../index.php','_self', 1);
			</script>";
        die();
    }
}
?>