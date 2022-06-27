<?php
    include "./header.php";
    include "slider.php";
    include "./func.php";
    $con = mysqli_connect("localhost", "root", "", "dacs");
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

    if(isset($_POST['status'])){
        $status = $_POST['status'];

        mysqli_query($con," UPDATE orders SET status = '$status' WHERE order_id = $id_order");
        echo "
			<script language='javascript'>
			alert('Cập nhật đơn hàng thành công');
			window.open('./orderslist.php','_self', 1);
			</script>";
        exit;
    }
?>
<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin khách hàng</h3>
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
                <h3 class="panel-title">Danh sách đơn hàng</h3>
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
                                <td><img width="250px" src="./uploads/<?php echo $value['product_img']?>" ></td>
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
                <form action="" method="POST" class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="">Trạng thái</label>
                        <select name="status" id="input" class="form-control" required="required">
                            <option value="1">Đang xử lý</option>
                            <option value="2">Đã nhận</option>
                            <option value="3">Đang giao hàng</option>
                            <option value="4">Đã giao hàng thành công</option>
                            <option value="5">Đơn hàng bị hủy</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
    </div>

</div>