<?php include "header.php" ;
    include "slider.php";
?>

<?php 
    $con = mysqli_connect("localhost", "root", "", "dacs");
    if(isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
    }else{
        $keyword = '';
    }
    $query = "SELECT * FROM tbl_product, tbl_brand WHERE tbl_product.brand_id = tbl_brand.brand_id AND tbl_product.product_name LIKE '%".$keyword."%'";
    $result = mysqli_query($con,$query);
?>

<div class="container">
<div class="row">
<?php 
if(mysqli_num_rows($result) > 0 ){   
                while($row = mysqli_fetch_assoc($result)){ 
             ?>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="thumbnail">
                    <style>img{
                                display: block;
                                max-width:800px;
                                max-height:800px;
                                width: auto;
                                height: auto;
                                } </style>
                    <img href="" class="img-thumbnail" src="<?php echo "./admin/uploads/".$row["product_img"] ?>"  alt="<?php echo $row["product_name"]?>" >
                    <div class="caption">     
                        <h6><a href="<?php echo "./detail.php?page=details&id=".$row["product_id"] ?>"><?php echo $row["product_name"]?></a></h6>
                        <div class="card-text">
                            <span style="text-decoration: line-through;" class="del-price"><?php echo number_format($row["product_price"],0,",",".") ?> đ</span>
                            <span class="new-price"><?php echo number_format($row["product_discount"],0,",",".") ?> đ</span>
                        </div>
                        <p>
                            <a href="<?php echo "./cart1.php?page=cart1&id=".$row["product_id"] ?>" class="btn btn-primary"><i class="fa-solid fa-cart-arrow-down"></i></a>
                            <a href="<?php echo "./detail.php?page=details&id=".$row["product_id"] ?>&action='add'" class="btn btn-outline-info">Xem chi tiết</a>
                        </p>
                    </div>
                </div>
            </div>

            <?php
                }
            }else{
                echo "<h3>Không tìm thấy sản phẩm nào</h3>";
            }
            ?>
            </div>   
     </div>
<?php include "footer.php" ?>