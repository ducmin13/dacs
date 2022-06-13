<?php 
    include "header.php";
    session_start();  
    $product = new product;
    $show_product = $product-> show_product();
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
    <!-- giohang -->
    <section class="giohang">
        <div class="container">
            <div class="giohang-top row">
                <p>Trang Chủ</p> <span>&#10230;</span> <p>Nam</p> <span>&#10230;</span> <p>Hàng mới về</p>
            <div>
        </div>
        <div class="container">
            <div class="row">
                <div class="giohang-left">               
                </div>
                <div class="giohang-right row">
                    <div class="giohang-right-top-item">
                        <button><span>Bộ lọc</span> <i class="fa-solid fa-sort-down"></i></button>
                    </div>
                    <div class="giohang-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp xếp</option>



                            
                            <option value="">Giá cao đến thấp</option>
                            <option value="">Giá thấp đến cao</option>
                            <option value="">Hàng Khuyến mãi</option>
                        </select>
                    </div>
                    <div class="giohang-right-content row">
                        <div class="giohang-right-content-item">
                        <?php 
                        if($show_product){ 
                        while($result = $show_product->fetch_assoc()){
                        ?>  
                    <table>                 
                        <td>
                            <?php echo "Tên: ".$result['product_name']?>
                        </td>
                        <td>
                            <?php echo "Giá gốc: ".$result['product_price']?>
                        </td>
                        <td>
                            <?php echo "Giá đã giảm: ".$result['product_discount']?>
                        </td>
                        <td>
                            <img src="./admin/uploads/"> <?php echo $result['product_img']?> </img>
                        </td>
                    </table>
                    <?php 
                    }
                }
                    ?>
                        </div>                     
                    </div>
                    <div class="giohang-right-bottom row">
                        <div class="giohang-right-bottom-items">
                            <p>Hiển thị 2 <span>|</span>4 Sản phẩm</p>
                        </div>
                        <div class="giohang-right-bottom-items">
                          <p><span>	&#171;<span>1 2 3 4 5 </span>&#187;</span>Trang cuối</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer đầu -->
    <!-- <p>a<sup>2</sub></p> -->
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
        <script>
        // chỉnh vị trí jvscrip
        const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
        const imgContainer = document.querySelector('.aspect-ratio-169')
        const dotItem = document.querySelectorAll(".dot")
        const itemsliderbar = document.querySelectorAll(".giohang-left-li")
        itemsliderbar.forEach(function(menu,index){
            menu.addEventListener("click",function(){
                menu.classList.toggle("block")
            })
        })
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
          setInterval(imgSlide,4000)
        </script>
        </html>