<?php 
include "/xampp/htdocs/doancoso/admin/class/header_class.php";


$con = mysqli_connect("localhost", "root", "", "dacs");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TMDSport - Hệ thống Shop đồ thể thao uy tín</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!--load jquery truoc khi load bootstrap js-->
	<script src="jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <!--start menu-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container">
			<a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="./index.php">Trang chủ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Giới thiệu<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link" href="./giohang.php" id="navbarDropdown">
          Sản phẩm
        </a>
        <div class="dropdown-content">
          <a class="dropdown-item" href="#">Vợt cầu lông Yonex</a>
          <a class="dropdown-item" href="#">Vợt cầu lông Victor</a>
        </div>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="./admin/formdangnhap.php">Đăng nhập<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./admin/formdangky.php">Đăng ký<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
		</div>
    </nav>
    <!--end menu-->


 