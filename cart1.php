<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "dacs");
    if(isset($_GET['id'])){
            $id= $_GET['id'];
    }


    $action = (isset($_GET['action'])) ? $_GET['action'] : 'add'; 

    $quantity = (isset($_GET['quantity'])) ? $_GET['quantity'] : 1;



    $query = mysqli_query($con,"SELECT * FROM tbl_product WHERE product_id =$id");

        if($query){
            $product = mysqli_fetch_assoc($query);
        }

        $item = [
            'product_id' => $product['product_id'],
            'product_img' => $product['product_img'],
            'product_name' => $product['product_name'],
            'product_discount' => $product['product_discount'],
            'quantity' => $quantity
        ];

        if($action =='add'){
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['quantity'] += $quantity;
            }else{
                $_SESSION['cart'][$id] = $item;
            }
        }

        if($action == 'delete'){
            unset($_SESSION['cart'][$id]);
        }
        header('Location: ./cart.php');

?>