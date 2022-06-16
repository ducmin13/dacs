
<?php
 
    include('./admin/database.php');
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
        echo "
			<script language='javascript'>
			alert('Vui lòng nhập đầy đủ thông tin.');
			window.open('../formdangky.php','_self', 1);
			</script>";
        exit;
    }

    if ($password != $cfpassword)
    {
        echo "
			<script language='javascript'>
			alert('Mật khẩu không trùng khớp. Vui lòng nhập lại.');
			window.open('../formdangky.php','_self', 1);
			</script>";
        exit;       
    }else{
        $password = base64_encode($password);
    }

         
    //Kiểm tra tên đăng nhập này đã có người dùng chưa

    if (mysqli_num_rows(mysqli_query($con, "SELECT username FROM member WHERE username='$username' " ) ) > 0){
        echo "
			<script language='javascript'>
			alert('Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.');
			window.open('../formdangky.php','_self', 1);
			</script>";
        exit;
    }

    

          
    //Kiểm tra email có đúng định dạng hay không
    if (!preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email))
    {
        echo "
			<script language='javascript'>
			alert('Email này không hợp lệ. Vui lòng nhập email khác.');
			window.open('../formdangky.php','_self', 1);
			</script>";
        exit;
    }

    
          
    //Kiểm tra email đã có người dùng chưa
    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM member WHERE email='$email'")) > 0)
    {
        echo "
			<script language='javascript'>
			alert('Email này đã có người dùng. Vui lòng chọn Email khác.');
			window.open('../formdangky.php','_self', 1);
			</script>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    if (!preg_match("/((09|03|07|08|05)+([0-9]{8})\b)/", $phone))
    {
            echo "
			<script language='javascript'>
			alert('Số điện thoại không hợp lệ. Vui lòng nhập lại.');
			window.open('../formdangky.php','_self', 1);
			</script>";
            exit;
        }
              
      
     $ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
    //Lưu thông tin thành viên vào bảng
    $data = mysqli_query($con, " INSERT INTO member (
            username,
            password,
            email,
            phone,
            typeuser,
            ngaydangky
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$email}',
            '{$phone}',
            '0',
            '{$ngay}'
        )
    ");                        
    //Thông báo quá trình lưu
                                                                                   
    if ($data)
    {      
        echo "
			<script language='javascript'>
			alert('Đăng ký thành công');
			window.open('../formdangky.php','_self', 1);
			</script>";
        
    }
    else
    echo "
    <script language='javascript'>
    alert('Đăng ký thất bại. Vui lòng thử lại');
    window.open('../formdangky.php','_self', 1);
    </script>";

     
        
          
?>

