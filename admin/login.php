<?php
include ('/xampp/htdocs/doancoso/admin/database.php');

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
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($con,"SELECT username, password FROM member WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

     
    // $query1 = mysqli_query($con,"SELECT * FROM member WHERE username='$username' , typeuser = '$typeuser' ");

    if ($username == 'admin') {   
        header("Location: ./categoryadd.php");
        die();           
    }
    else
    {             
        $_SESSION['username'] = $username;
        header("Location: ./checklogin.php");
        die();
    }
}
?>