<?php


    function total_price($cart){
        $total = 0;
        foreach($cart as $key => $value){
            $total += $value['quantity'] * $value['price'];
        }
        return $total;
    }

?>