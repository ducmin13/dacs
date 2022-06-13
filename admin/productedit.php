<?php
    include "header.php";
    include "slider.php";
    include "/xampp/htdocs/doancoso/admin/class/product_class.php";
    
?>

<?php
    $product = new product;
    
    $product_id = $_GET['product_id'];

    $get_product = $product -> get_product($product_id);
    if($get_product){
        $result = $get_product-> fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $update_product= $product -> update_product($category_id,$brand_name,$brand_id,$product_name,$product_id);
    }

?>
<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>

<div class="admin_content-right">
<div class="admin_content-right-product_add">
                <h1>Sửa sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                <label for="">Tên sản phẩm <span style="color: red;"> *</span></label>
                <input name="product_name" required type="text" value="<?php echo $result['product_name'] ?>">
                <label for="">Chọn danh mục <span style="color: red;"> *</span></label>
                <select name="category_id" id="category_id" <?php echo $result['category_name'] ?>>
                <option value="">Chọn</option>
                    <?php 
                        $category_id = $_GET['category_id'];
                        $show_category = $product-> show_category();
                        if($show_category){
                            while($result = $show_category ->fetch_assoc()){
                        
                    ?>
                    <option value="<?php echo $result['category_id'] ?>"> <?php echo $result ['category_name'] ?></option>
                    <?php                           
                        }}
                    ?>
                </select>

                <label for="">Chọn loại sản phẩm <span style="color: red;"> *</span></label>
                <select name="brand_id" id="brand_id">             
                    <option value="">Chọn</option> 
                    <?php                    
                    $show_brand = $product-> show_brand();
                    if($show_brand){
                        while($result = $show_brand ->fetch_assoc()){
                        
                    ?>
                <option value="<?php echo $result ['brand_id'] ?>"> <?php echo $result ['brand_name'] ?> </option>
                <?php                           
                    }
                }
                ?> 
                </select>

                <label for="">Giá sản phẩm <span style="color: red;"> *</span></label>
                <input name="product_price" required type="text" value="">

                <label for="">Giá khuyến mãi <span style="color: red;"> *</span></label>
                <input name="product_discount" required type="text" value="">

                <label for="">Mô tả <span style="color: red;"> *</span></label>
                <textarea name="product_desc" required id="editor1" cols="30" rows="10" value=""></textarea>

                <label for="">Ảnh sản phẩm <span style="color: red;"> *</span></label>
                <input name="product_img" required type="file">

                <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                <input name="img_desc[]" required multiple type="file">

                <button type="submit"> Sửa </button>
            </form>
            </div>
        </div>
</body>
</html>