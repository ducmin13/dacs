<?php 
include "/xampp/htdocs/doancoso/admin/class/header_class.php";


$con = mysqli_connect("localhost", "root", "", "dacs");
?>

<header>
            <div class="logo">
                <a class="fa-solid fa-medal" href="index.php"></a>
            </div>
                <div class="menu">
                                <li><a href="giohang.php">Sản phẩm</a></li>
                                <li><a href="giohang2.php">Sale</a></li>
                                
                    <ul class="sub-menu">
                        <?php 
                        $query = "SELECT brand_name FROM tbl_brand ORDER BY brand_id DESC ";     
                        $result = mysqli_query($con, $query);                   
                        if(mysqli_num_rows($result) > 0){
                            while ($row = mysqli_fetch_array($result)){
                        ?>
                        <li> <a><?php echo $row['brand_name'] ?></a> </li>
                        <?php                 
                        }
                       }                   
                    ?>   
                            <!-- <ul>
                                <li><a href="">Giày Yonex</a></li>
                            </ul>
                        </li>                
                        <li><a href="">Vợt cầu lông</a>               
                            <ul>
                                <li><a href="">Vợt Yonex</a></li>
                                <li><a href="">Vợt Mizuno</a></li>
                                <li><a href="">Vợt Victor</a></li>
                                <li><a href="">Vợt Lining</a></li>
                                <li><a href="">Vợt Kawasaki</a></li>
                           </ul>                           
                        </li>                        
                    </ul>                                     
                <li>
                <li><a href="">THÔNG TIN</a></li>
                <li><a href="">HƯỚNG DẪN</a></li>
                <li><a href="">SALE</a></li>
                <li><a href="">
                    
                </a></li> -->
                
                     
            </div>
            <div class="other">
                <li><input placeholder="Tìm Kiếm" type="text"> <i class="fas fa-search"></i></li>             
                <li><a class="fa fa-shopping-bag" href="giohang2.php"></a></li>
                <li ><a class="fa fa-user" href="./admin/formdangnhap.php"></a></li>
                <?php 
                if(isset($_SESSION))
                       echo $_SESSION['username'];
                else
                       echo "Chưa đăng nhập";
                ?>
                <li><a class='fa-solid fa-arrow-right-from-bracket' href= "index.php?id=1" onclick=" return confirm('Bạn muốn đăng xuất?')" > </a> </li>   
                              
</div>
        </header>
     