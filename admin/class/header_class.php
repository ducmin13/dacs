<?php
    include "/xampp/htdocs/doancoso/admin/database.php"
?>

<?php
    class category{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }

        public function show_category(){
            $query = "SELECT category_name FROM tbl_category ORDER BY category_id DESC";
            $result = $this ->db->select($query);
            return $result;
        }

    }
?>

<?php
    class brand{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }

        public function show_brand(){
            $query = " SELECT tbl_brand.*, tbl_category.category_name FROM tbl_brand 
            INNER JOIN tbl_category ON tbl_brand.category_id = tbl_category.category_id
            ORDER BY tbl_brand.brand_id DESC";
            $result = $this ->db->select($query);
            return $result;
        }
    }
?>

<?php
    class product{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }

        public function show_product(){
            $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";       
            $result = $this ->db->select($query);
            return $result;
        }
    }
?>