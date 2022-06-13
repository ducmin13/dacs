<?php
    include "/xampp/htdocs/doancoso/admin/database.php"
?>

<?php
    class product{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }


        public function show_category(){
            $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
            $result = $this ->db->select($query);
            return $result;
        }

        public function show_brand_ajax($category_id){
            $query = "SELECT * FROM tbl_brand WHERE category_id = '$category_id'";
            $result = $this ->db->select($query);
            return $result;
        }

        public function show_brand(){
            $query = " SELECT tbl_brand.*, tbl_category.category_name FROM tbl_brand 
            INNER JOIN tbl_category ON tbl_brand.category_id = tbl_category.category_id
            ORDER BY tbl_brand.brand_id DESC";
            $result = $this ->db->select($query);
            return $result;
        }


        public function insert_product(){

            $product_name = $_POST['product_name'];
            $category_id = $_POST['category_id'];
            $brand_id = $_POST['brand_id'];
            $product_price = $_POST['product_price'];
            $product_discount = $_POST['product_discount'];
            $product_desc = $_POST['product_desc'];
            $product_img = $_FILES['product_img']['name'];

            move_uploaded_file($_FILES['product_img']['tmp_name'],"uploads/".$_FILES['product_img']['name']);
            $query = "INSERT INTO tbl_product (
            product_name,
            category_id,
            brand_id,
            product_price,
            product_discount,
            product_desc,
            product_img) 
            VALUES (
            '$product_name',
            '$category_id',
            '$brand_id',
            '$product_price',
            '$product_discount',
            '$product_desc',
            '$product_img')";

            $result = $this -> db ->insert($query);
        
            
            if(isset($result)){
                $query = " SELECT * FROM tbl_product ORDER BY product_id DESC LIMIT 1";
                $result = $this -> db -> select($query) -> fetch_assoc();
                $product_id = $result ['product_id'];
                $file_name = $_FILES ['img_desc'] ['name'];
                $file_tmp = $_FILES['img_desc']['tmp_name'];            
                
                foreach ((array)$file_name as $key => $value){
                    move_uploaded_file($file_tmp [$key], "uploads/".$value);
                    $query = "INSERT INTO tbl_img_desc (product_id, img_desc) VALUES ('$product_id','$value')";
                $result = $this -> db ->insert($query);
                }        
            }
            return $result;
        }

        public function show_product(){
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";       
            $result = $this ->db->select($query);
            return $result;
        }
       
        public function get_product($product_id){
            $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
            $result = $this ->db->select($query);
            return $result;
        }

        public function update_product($category_id,$brand_name,$brand_id,$product_name,$product_id){
            $query = "UPDATE tbl_product SET brand_name = '$brand_name', category_id = '$category_id', product_name= '$product_name' WHERE product_id = '$product_id' " ;
            $result = $this ->db->update($query);
            header('Location:productlist.php');
            return $result;
        }

        public function delete_product($product_id){
            $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
            $result = $this ->db->delete($query);
            header('Location:productlist.php');
            return $result;
        }



    }

?>