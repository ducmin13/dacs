<?php 
    include 'login.php';
    
    if($_SESSION['username']==NULL){
            // Haven't log in
            echo "You haven't log in";
            }else{
            // Logged in
            echo "Đăng nhập thành công <a href='../index.php'>Tiếp tục </a> ";
            } 
?>
