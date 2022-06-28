<?php
    include "./header.php";
    include "./slider.php";
?>

  <div class="container">
      <div class="row">     
        <?php 
        $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:8;
        $current_page = !empty($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $item_per_page; 

        $query = "SELECT * FROM tbl_product WHERE brand_id = '$_GET[id]' ORDER BY 'id' ASC LIMIT $item_per_page OFFSET $offset";
        $resultPro = mysqli_query($con,$query) or die ("lỗi");

        $pro =  mysqli_query($con,"SELECT * FROM tbl_product WHERE brand_id = '$_GET[id]'");
        $pro =  $pro ->num_rows;
        $total_page = ceil($pro / $item_per_page);

         if(mysqli_num_rows($resultPro) > 0 ){   
             while($row = mysqli_fetch_assoc($resultPro)){ 
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
                         <a name="" href="<?php echo "./detail.php?page=details&id=".$row["product_id"] ?>" class="btn btn-outline-info">Xem chi tiết</a>
                     </p>
                 </div>
             </div>
         </div>
         <?php
            }}
            ?>
        </div>
        <?php include "./page.php" ?>
    </div>
  <?php include "./footer.php" ?>
