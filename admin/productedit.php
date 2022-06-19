<?php
    include "./header.php";
    include "slider.php";
    include "/xampp/htdocs/doancoso/admin/class/product_class.php";
    
?>

<?php
    $product = new product;
    
    $product_id = $_GET['product_id'];

    $get_product = $product -> get_product($product_id);
    if($get_product){
        $result1 = $get_product-> fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $brand_id = $_POST['brand_id'];
        $product_amount = $_POST['product_amount'];
        $product_price = $_POST['product_price'];
        $product_discount= $_POST['product_discount'];
        $product_desc = $_POST['product_desc'];
        $update_product= $product -> update_product($category_id,$product_name,$product_id,$brand_id,$product_amount, $product_price, $product_discount, $product_desc);
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
                <input name="product_name" required type="text" value="<?php echo $result1['product_name'] ?>">
        
                <label for="category_id">Chọn danh mục <span style="color: red;"> *</span></label>
                <select name="category_id" id="category_id">
                <option required value="category_id">Chọn</option>
                    <?php 
                        $show_category = $product-> show_category();
                        if($show_category){
                            while($result2 = $show_category ->fetch_assoc()){                       
                    ?>
                    <option <?php if($result1['category_id'] == $result2['category_id']) {
                    } ?> value="<?php echo $result2['category_id'] ?>"> <?php echo $result2['category_name'] ?> </option>
                    <?php
                    }
                }
                    ?>
                </select>

                <label for="brand_id">Chọn loại <span style="color: red;"> *</span></label>
                <select name="brand_id" id="brand_id">
                <option required value="brand_id">Chọn</option>
                    <?php 
                        $show_brand = $product-> show_brand();
                        if($show_brand){
                            while($result3 = $show_brand ->fetch_assoc()){                       
                    ?>
                    <option <?php if($result1['brand_id'] == $result3['brand_id']) {
                    } ?> value="<?php echo $result3['brand_id'] ?>"> <?php echo $result3['brand_name'] ?> </option>
                    <?php
                    }
                }
                    ?>
                </select>
                <label for="">Số lượng <span style="color: red;"></span></label>
                <input name="product_amount" required type="text" value="<?php echo $result1['product_amount'] ?>">

                <label for="">Giá sản phẩm <span style="color: red;"> *</span></label>
                <input name="product_price" required type="text" value="<?php echo $result1['product_price'] ?>">

                <label for="">Giá khuyến mãi <span style="color: red;"> *</span></label>
                <input name="product_discount" required type="text" value="<?php echo $result1['product_discount'] ?>">

                <label for="">Mô tả <span style="color: red;"> *</span></label>
                <textarea name="product_desc" required id="editor1" cols="30" rows="10" value=""><?php echo $result1['product_desc'] ?></textarea>

                <label for="">Ảnh sản phẩm <span style="color: red;"> *</span></label>
                <input name="product_img" required type="file" value="<?php echo $result1['product_img'] ?>">

                <label for="">Ảnh mô tả <span style="color: red;"></span></label>
                <input name="img_desc[]" multiple type="file" value="">

                <button type="submit"> Sửa </button>
            </form>
            </div>
        </div>
        
</body>
<script>

CKEDITOR.replace( 'editor1',
{
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
    filebrowserUploadUrl:
       'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/',
    filebrowserImageUploadUrl:
       'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/'
});
</script>

<script>
    $(document).ready(function(){
        $('#category_id').change(function(){
            var x =$(this).val()
            $.get("productadd_ajax.php",{category_id:x},function(data){
                $("#brand_id").html(data);
            })
        })
    })
</script>

</html>