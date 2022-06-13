<?php session_start(); ?>
<?php 
    include "header.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f8d037ce4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.php" media="screen">
    <title>TMDSport</title>
</head>
<body  >
 <!-- ---------slider-------- -->
        <section id="Slider">
<div class="aspect-ratio-169">
        <img src="images/25(2).jpg">
        <img src="images/33333333.jpg">
        <img src="images/444444444444444.jpg">
        <img src="images/6.jpg">
        <img src="images/yonex-astrox88-1920x812px-1400x592.jpg">
</div>
<div class="dot-container">
    <div class="dot active"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
</div>
</section>
<!-- ****************apppppppppppppp telephone***************** -->
<section class="app-BadmintonSport">
    <p>Tải ứng dụng TMDSport</p>
    <div class="Download-App">
        <img src="https://pubcdn2.ivymoda.com/images/googleplay.png">
        <img src="https://pubcdn2.ivymoda.com/images/appstore.png" >
    </div>
    <p>Nhận thông báo TMDSport</p>
    <input type="text" placeholder="Nhập email của bạn...">

</section>
<!-- ****************footerrrrrrrr cuối***************** -->
<div class="footer-top">
    <li><a href=""><img src="https://shopvnb.com/templates/images/bct.png" width="120" height="70" alt=""></a></li>
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>Công ty thể thao Uy tín - Chất lượng - Số 1 Việt Nam TMD Sport <br>
        Địa chỉ đăng ký: 19DTHA3, Đồ án cơ sở cuối kì , Hutech khu E, Xa lộ hà nội, Việt Nam - 0839101201 <br>
        Đặt hàng online tại: <b>0888323441</b> 
        </p> 
</div>

<div class="footer-bottom">
    @TMDSport The Best Shop
</div>
</body>

<script>
// chỉnh vị trí jvscrip
const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
const imgContainer = document.querySelector('.aspect-ratio-169')
const dotItem = document.querySelectorAll(".dot")
let imgNumber = imgPosition.length
let index = 0
// console.log(imgPosition) để xem nó đã nhận được chưa
// Dùng foreach để căn chỉnh 
imgPosition.forEach(function(image,index){
    // căn theo chiều ngang câu lệnh dưới 
    image.style.left = index*100 + "%"
    dotItem[index].addEventListener("click",function(){
    slider(index)

    })
    // cho nó auto andgogo

})
// tạo phần tử let cho nó trượt và cho index =0 dùng function cộng nó lên
function imgSlide (){
    index ++;
    console.log(index)
    if (index >=imgNumber){index =0}
    slider(index)
    
    
    
}
function slider (index) {
    // nhân lên cho thẻ con chạy với 3s 1 lượt chuyển
    imgContainer.style.left = "-" +index*100+ "%"
    // slide tới đâu thì chạy dot tới đó
    const dotActive = document.querySelector('.active')
    dotActive.classList.remove("active")
    dotItem[index].classList.add("active")
 
}
//   setInterval(imgSlide,4000)
</script>
</html>