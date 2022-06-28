<?php
    include "./header.php";
    include "slider.php";
    include "class/product_class.php";
?>

<?php
    $product = new product;
    $show_product = $product-> show_product();
?>

<div class="admin_content-right">
<div class="admin_content-right-category_list">

                <h1>Danh sách sản phẩm</h1>         
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>Tên SP</th>
                        <th>Danh mục</th>
                        <th>Loại</th>
                        <th>Số lượng</th>
                        <th>Giá gốc</th>
                        <th>Giá giảm</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php 
                    if($show_product){ $i=0;
                        while($result = $show_product->fetch_assoc()){
                            $i++;
                    ?>
                    <tr>
                        <td>
                            <?php echo $i ?>
                        </td>
                        <td>
                            <?php echo $result['product_id'] ?>
                        </td>
                        <td>
                            <?php echo $result['product_name']?>
                        </td>
                        <td>
                            <?php echo $result['category_name']?>
                        </td>
                        <td>
                            <?php echo $result['brand_id'] ?>
                        </td>
                        <td>
                            <?php echo $result['product_amount'] ?>
                        </td>
                        <td>
                            <?php echo $result['product_price']?>
                        </td>
                        <td>
                            <?php echo $result['product_discount']?>
                        </td>
                        <td>
                            <?php echo $result['product_desc']?>
                        </td>
                        <td>
                            <style>img{
                                display: block;
                                max-width:250px;
                                max-height:100px;
                                width: auto;
                                height: auto;
                                } </style>             
                            <img style="" src="./uploads/<?php echo $result["product_img"] ?>" alt="<?php echo $row1["product_id"]?>">              
                            
                        </td>
                        <td>
                        <a href="productedit.php?product_id=<?php echo $result['product_id'] ?>" title="Sửa" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
                        <a href="productdelete.php?product_id=<?php echo $result['product_id'] ?> " title="Xóa" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php 
                    }
                }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>