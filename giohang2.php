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
<body>
<!-- cartgiohang2 -->
<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fa-solid fa-cart-shopping "></i>   
                </div>
                <div class="cart-top-map cart-top-item">
                    <i class="fa-solid fa-location-dot "></i>   
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fa-solid fa-money-check-dollar "></i>   
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Màu</th>
                        <th>Size</th>
                        <th>Số lượng </th>
                        <th>Thành tiền</th>
                        <th>Xóa sản phẩm</th>
                    </tr>
                    <tr>
                        <td><img src="https://shopvnb.com/img/600x600//uploads/gallery/giay-cau-long-yonex-shb-66z-trang-hong-ma-jp.jpg" alt=""></td>
                        <td><p>Giày cầu lông Yonex SHB 66Z Trắng hồng (Mã JP)</p></td>
                        <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT49hvm0rWvGxfjYYToSJ5m_6LeowurwNa74Q&usqp=CAU" width="50px"; height="50px" alt=""></td>
                        <td><p>41</p></td>
                        <td><input type="number" value="1" min="1"></td>
                        <td><p>2.650.000<sup>đ</sup></p> </td>
                        <td><span>X</span></td>
                    </tr>
                </table>

            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">TỔNG TIỀN TRONG GIỎ HÀNG</th>
                    </tr>
                    <tr>
                        <td>TỔNG SẢN PHẨM TRONG GIỎ HÀNG</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>TỔNG TIỀN HÀNG</td>
                        <td><p>2.650.000<sup>đ</sub></p> </td>
                    </tr>
                    <tr>
                        <td>TẠM TÍNH</td>
                        <td><p style="color:black; font-weight:bold;">2.650.000<sup>đ</sub></p></td>
                    </tr>
                </table>
                <div class="cart-content-right-text">
                    <p>Bạn sẽ được free ship với đơn hàng có tổng giá trị trên 1.500.000 đ</p>
                </div>
                <div class="cart-content-right-button">
                    <button>TIẾP TỤC MUA SẮM <link rel="stylesheet" href="index.php"> </button>
                    <button>THANH TOÁN <link rel="stylesheet" href="giaohang.php"> </button>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Footer đầu -->
  
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
    <!-- <div class="right-footer">
        <div class="register-form">
            <p class="title-footer">Nhận thông tin các chương trình khuyến mãi của TMDSport</p>
            <form id="frm_subscribe">
                <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required">
                <div class="btn-submit">        
                    <input id="btn-submit" class="form-submit" value="Đăng ký" type="submit">
                </div>
            </form>
        </div id="subscribe_error">
    </div> -->
    <div class="footer-bottom">
        @TMDSport The Best Shop
    </div>
</body>
</html>