<?php
    include "./header.php";
    include "./func.php";

    if(isset($_GET['id'])){

        $id_order = $_GET['id'];
        $order_query = mysqli_query($con,"SELECT * FROM orders WHERE order_id = $id_order");
        $order = mysqli_fetch_assoc($order_query);

        $id_account = $order['id_account'];
        $account_query = mysqli_query($con,"SELECT * FROM member WHERE id = $id_account ");
        $account = mysqli_fetch_assoc($account_query);

        $product = mysqli_query($con,"SELECT order_detail.order_id, order_detail.price, order_detail.quantity, tbl_product.product_img, tbl_product.product_name
        FROM order_detail JOIN tbl_product ON order_detail.product_id = tbl_product.product_id WHERE order_detail.order_id = $id_order");

    }

?>


<link rel="stylesheet" href="./admin/style.css" media="screen" >
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<div class="admin_content-right-category_list">
<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin chi tiết</h3>
            </div>
            <div class="panel-body text-left">
                <p>Tên khách hàng: <?php echo $order['order_name'] ?></p>
                <p>Số điện thoại: <?php echo $account['phone']?></p>
                <p>Địa chỉ: <?php echo $order['address_ship'] ?></p>
                <p>Ghi chú: <?php echo $order['note']?></p>
                <p>Ngày đặt hàng: <?php echo $order['create_at']?></p>

                <p>Trạng thái đơn hàng:<?php if($order['status']==1) { ?>
                    Đang xử lý
                    <?php }elseif($order['status']==2) { ?>
                    Đã nhận
                    <?php }elseif($order['status']==3) { ?>
                    Đang giao hàng
                    <?php }elseif($order['status']==4) { ?>
                    Đã giao hàng thành công
                    <?php }else{ ?>
                    Đơn bị hủy
                    <?php } ?>
                    </p>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Chi tiết đơn hàng</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                       
                        <tbody>               
                            <?php foreach($product as $key => $value): ?>            
                            <tr>
                                <td><?php echo $key+1 ?></td>
                                <td><?php echo $value['product_name'] ?></td>    
                                <td><img width="250px" src="./admin/uploads/<?php echo $value['product_img']?>" ></td>
                                <td><?php echo $value['quantity'] ?></td>
                                <td><?php echo number_format($value['price'],0,",",".") ?></td>
                                <td><?php echo number_format($value['price']*$value['quantity'],0,",",".") ?></td>
                            </tr>      
                            <?php endforeach ?>   
                            <tr class="bg-danger">
                                <td>Tổng hóa đơn: </td>
                                <td colspan="5"><?php echo number_format(total_price($product),0,",",".") ?></td>
                            </tr>                
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>    
    </div>

</div>