<?php 
include "./admin/class/header_class.php";
error_reporting(0); 
session_start();
$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
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
    <!-- Css Styles -->
    <link rel="stylesheet" href="./template/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./template/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./template/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./template/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./template/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./template/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./template/css/style.css" type="text/css">
</head>
<body>
    <!--start menu-->
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container">
      <a class="navbar-brand" href="./index.php">
      <img  src="./images/logoolym.png" style="width:50px;"></a>
      
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item active">
        <a class="nav-link" href="./index.php">Trang chủ<span class="sr-only">(current)</span></a>
      </li>  
      <?php 
      $query = "SELECT * FROM tbl_category WHERE  `status` = 1 ";
      $result = mysqli_query($con,$query) or die ("lỗi");
      if(mysqli_num_rows($result) > 0 ){   
        while($row = mysqli_fetch_assoc($result)){       
        ?>
        <li class="nav-item active">
        <a  class="nav-link" href="./sanpham1.php?page=category&id=<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?> <span class="sr-only">(current)</span></a>
        
        </li>
        <?php
      }
      }
      ?>
      
      
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" href="./giohang.php" id="navbarDropdown">Sản phẩm</a>
        <div class="dropdown-content">
          <a class="dropdown-item" href="#">Vợt cầu lông Yonex</a>
          <a class="dropdown-item" href="#">Vợt cầu lông Victor</a>
        </div>
      </li> -->
      <li class="nav-item active">
      <?php    
      $registor = '<a style="float: left;" class="nav-link" href="./formdangky.php"> Đăng ký <span class="sr-only">(current)</span></a>';
      $login = '<a style="float: left;" class="nav-link" href="./formdangnhap.php"> Đăng nhập <span class="sr-only">(current)</span></a>';
      if (isset($_SESSION['username']))
      {
        $logout = '<a style="float: left;" class="nav-link fa-solid fa-arrow-right-from-bracket" href="./admin/logout.php"><span class="sr-only">(current)</span></a>';    
        $name = '<a style="float: left;" class="nav-link" href="./infuser.php" >'.$_SESSION['username'].'<span class="sr-only">(current)</span></a>';        
        echo "$name $logout";}
        else {
         echo "$login $registor";}          
        ?>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="./cart.php?id=<?php echo $_SESSION['cart'] ?>">Giỏ hàng <?php echo count($cart) ?><span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
		</div>
    </nav>
    <!--end menu-->




 