<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "dacs");


if(isset($_POST['btnlayma'])==true){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $query = mysqli_query($con,"SELECT * FROM member WHERE username = '$username' and email = '$email'");
    $row = mysqli_fetch_array($query);

    if($username != $row['username'] || $email != $row['email'] || $username == $row['username'] && $email != $row['email'] || $username != $row['username'] && $email == $row['email'] ){   
        echo "
        <script language='javascript'>
        alert('Thông tin tài khoản hoặc email không chính xác. Vui lòng nhập lại.');
        window.open('./formquenmk.php','_self', 1);
        </script>";
        exit;
    }else {
        $maxacnhan = substr(rand(000001,999999),0,6); 
        $query1 = mysqli_query($con, "UPDATE member SET maxn = '$maxacnhan' WHERE username = '$username' and email = '$email'");
        $stmt = $con -> prepare($query1);
        laymatkhau($email, $maxacnhan);
    } 
}


if(isset($_POST['btnlaymk'])==true){
    $username = $_POST['username'];
    $maxn = $_POST['maxn'];
    $_SESSION['username'] = $username;
    $query2 = mysqli_query($con,"SELECT maxn FROM member WHERE username='$username'");
    $row2 = mysqli_fetch_array($query2);
    if($maxn != $row2['maxn']){
        echo "
                <script language='javascript'>
                alert('Mã xác nhận sai!');
                window.open('./formquenmk.php','_self', 1);
                </script>";
        
    }
    else{
        header("Location: ./formquenmk1.php");
    }
}
?>

<?php 
    function laymatkhau($email, $maxacnhan){
        require "./PHPMailer-master/src/PHPMailer.php";
        require "./PHPMailer-master/src/SMTP.php"; 
        require './PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'ngogiaanhtuan1@gmail.com'; // SMTP username
        $mail->Password = 'steivwntbjdhaout';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('ngogiaanhtuan1@gmail.com', 'TMDsport.vn' ); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Yêu cầu lấy lại mật khẩu';
        $noidungthu = "<p> Mã xác nhận của bạn là: {$maxacnhan} </p>" ; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo "Mã xác nhận đã gửi đến gmail của bạn!";
    } catch (Exception $e) {
        return false;
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
    <title>Đăng nhập</title>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <div class="row justify-content-around">
                <form action='' method='POST' class="col-md-6 bg-light p-3 my-3">
                    <h1 class="text-center text-uppercase h3 py-3">Quên mật khẩu</h1>
                   
                    <div class="form-group">
                        <label for="username">Tên tài khoản</label>
                        <input type="text" name="username"  value="<?php if(!isset($_POST['btnlayma'])==true){
                            echo "";
                        }else echo $username;?>"
                        id="username" class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php if(!isset($_POST['btnlayma'])==true){
                            echo "";
                        }else echo $email;?>" 
                        id="email" class="form-control"required>                       
                    </div>

                    <div class="form-group">
                        <label for="maxn">Mã xác nhận</label>
                        <input type="maxn" name="maxn" value="" 
                        id="maxn" class="form-control" <?php if(!isset($_POST['btnlayma'])==true){
                            echo "readonly";
                        }else echo "required";?>>                       
                    </div>

                    <input type="submit" name="<?php if(!isset($_POST['btnlayma'])==true){
                            echo "btnlayma";
                        }else echo "btnlaymk";?>" value="<?php if(!isset($_POST['btnlayma'])==true){
                            echo "Lấy mã xác nhận";
                        }else echo "Xác nhận";?>" class="btn-primary btn btn-block my-3">
                    
                    <a href='./formdangnhap.php' title='Trở về' >Trở về</a>
                    </p>
                </form>
            </div>
        </div>
        
    </div>
</body>