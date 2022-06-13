
<?php
 
    include('/xampp/htdocs/doancoso/admin/database.php');
    $con = mysqli_connect("localhost", "root", "", "dacs");
    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['username'])){
        die('');
    }
    
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];
    $email      = $_POST['email'];
    $phone   = $_POST['phone'];
    
       
    
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$phone)
    {
        echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    if ($password != $cfpassword)
    {
        echo "Mật khẩu không trùng khớp. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;       
    }else{
        $password = md5($password);
    }

         
    //Kiểm tra tên đăng nhập này đã có người dùng chưa

    if (mysqli_num_rows(mysqli_query($con, "SELECT username FROM member WHERE username='$username' " ) ) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    

          
    //Kiểm tra email có đúng định dạng hay không
    if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email))
    {
        echo "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    if (!preg_match("/((09|03|07|08|05)+([0-9]{8})\b)/", $phone))
    {
            echo "Số điện thoại không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
              
      

    //Lưu thông tin thành viên vào bảng
    $data = mysqli_query($con, " INSERT INTO member (
            username,
            password,
            email,
            phone,
            typeuser
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$phone}',
            '0'
        )
    ");                        
    //Thông báo quá trình lưu
                                                                                   
    if ($data)
    {      
        echo "Đăng ký thành công <a href='formdangnhap.php'>Về trang đăng nhập</a>";
        
    }
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='formdangky.php'>Thử lại</a>";

     
        
          
?>

