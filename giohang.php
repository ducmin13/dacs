<?php
    include "./header.php";
 
?>

   <!--show products-->

   <hr>
     <div class="container">
         <div class="row">
              
            <?php 
            $query = "SELECT * FROM tbl_product WHERE `status` = 1 and category_id =".$_GET['id'];
            $resultPro = mysqli_query($con,$query) or die ("lỗi");
            if(mysqli_num_rows($resultPro) > 0 ){   
                while($row = mysqli_fetch_assoc($resultPro)){ 
             ?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <img href="" class="img-thumbnail" src="<?php echo "./admin/uploads/".$row["product_img"] ?>"  alt="<?php echo $row["product_name"]?>" >
                    <div class="caption">     
                        <h6><a href="./giohang.php?page=product&id=<?php $row["product_id"]?>"><?php echo $row["product_name"]?></a></h6>
                        <div class="card-text">
                            <span style="text-decoration: line-through;" class="del-price"><?php echo number_format($row["product_price"],0,",",".") ?> đ</span>
                            <span class="new-price"><?php echo number_format($row["product_discount"],0,",",".") ?> đ</span>
                        </div>
                        <p>
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"></i></a>
                            <a href="#" class="btn btn-outline-info">Xem chi tiết</a>
                        </p>
                    </div>
                </div>
            </div>

            <?php
                }
            }
            ?>
         </div>
        
     </div>
     <!--end show products-->
