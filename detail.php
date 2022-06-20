<?php 
    include "./header.php";
?>

</section>
<!-- Breadcrumb Section End -->
<!-- Product Details Section Begin -->
<section class="product-details spad">
        <?php 
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "SELECT * FROM tbl_product WHERE product_id = $id";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0 ){   
                while($row = mysqli_fetch_assoc($result)){
                    
          ?>
    <div class="container">
        <form method="GET" action="cart1.php">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                             src="<?php echo "./admin/uploads/".$row["product_img"] ?>" alt="<?php echo $row["product_name"]?>">
                    </div>
                    <?php 
                    $query1 =" SELECT * FROM tbl_img_desc WHERE product_id = $id";
                    $result1 = mysqli_query($con, $query1);
                    if(mysqli_num_rows($result1) > 0 ){   
                    while($row1 = mysqli_fetch_assoc($result1)){
                     ?>
                    <div class="product__details__pic__slider owl-carousel">
                        <img src="./images/<?php echo $row1["img_desc"] ?>" alt="<?php echo $row1["product_id"]?>">
                    </div>
                    <?php }} ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?php echo $row["product_name"]?></h3>                  
                    <div style="text-decoration: line-through;" class="product__details__price">Giá gốc: <?php echo number_format($row["product_price"],0,",",".")?> đ </div>
                    <div class="product__details__price">Giá hiện tại: <?php echo number_format($row["product_discount"],0,",",".")?> đ</div>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="quantity">                           
                                <div class="pro-qty">
                                    <input name="quantity" type="number" value="1" min="1" max="1000">
                                    <input type="hidden" name="id" value="<?php echo $row['product_id']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" href="<?php echo "./cart1.php?page=cart&id=".$row["product_id"] ?>" class="primary-btn">Thêm vào giỏ hàng</button>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                    <p> 
                        <?php echo $row["product_desc"]?>
                    </p>
                    
                        <li>
                            <b>Share on</b>
                            <div class="share">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>      
        </div>
        </form>
    </div>
    <?php
             }}}
    ?>
</section>
<!-- Product Details Section End -->