<?php 
    include "./header.php";
    include "./slider.php";
    
    $username = $_SESSION['username'];

    $ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
    $query = mysqli_query($con,"SELECT * FROM member WHERE username='$username'");
    $member=mysqli_fetch_array($query);


    if(isset($_POST['btngiaohang'])){
        $id = $member['id'];
        
        $order_name = $_POST['name'];
        $address_ship = $_POST['address'];
        $phone = $_POST['phone'];
        $note = $_POST['note'];
        $total = $_POST['total'];

        $query = mysqli_query($con,"INSERT INTO orders(id_account, order_name, total_price, address_ship, phone, note, status, create_at) 
        VALUES('$id','$order_name', '$total', '$address_ship', '$phone', '$note', '1', '$ngay' )");

        $select = mysqli_query($con, "SELECT * FROM orders ORDER BY order_id DESC LIMIT 1");
        $orders = mysqli_fetch_array($select);

        if(isset($query)){
            foreach($cart as $value){
                mysqli_query($con,"INSERT INTO order_detail(order_id, product_id, name, img, price, quantity)
                VALUES('$orders[order_id]', '$value[product_id]', '$value[product_name]', '$value[product_img]', '$value[product_discount]', '$value[quantity]')");              
            }
            unset($_SESSION['cart']);
            echo "
                <script language='javascript'>
                alert('Đặt hàng thành công!');
                window.open('./index.php','_self', 1);
                </script>";
            header('Location: mycart.php');
            exit();
        }
    }
?>
<h2 style="text-align:center; color:black;">Thông Tin Đơn Hàng</h2>
<hr/>
<table align="center" border="1">
    <tr style="text-align:center; font-weight:bold;">
        <td>Tên sản phẩm</td>
        <td>Hình ảnh</td>
        <td>Đơn giá</td>
        <td>Số lượng</td>
        <td>Thành tiền</td>
    </tr>       
            <?php $total_price = 0 ?>                     
            <?php 
            foreach ($cart as $key => $value):
                $total_price += ($value["product_discount"] * $value["quantity"]);
            ?>  
<tr style="text-align:center; font-weight:bold;">
    <td style="width:400px;"><?php echo $value["product_name"]?></td>
    <td><img style="width:200px;height:200px;" src="<?php echo "./admin/uploads/".$value["product_img"] ?>" alt=""></td>

        <td style="width:200px;"><?php echo number_format($value["product_discount"],0,",",".") ?> đ</td>
        <td style="width:100px;"><?php echo $value["quantity"] ?></td>
        <td style="width:200px;"><?php echo number_format(($value["product_discount"] * $value["quantity"]),0,",",".")?> đ</td>
</tr> 
    </tr>
    <?php endforeach?>
</table>
<hr />
<?php if(isset($_SESSION['username'])){?>
<div style="border-radius: 5px; background-color: #f2f2f2; padding: 20px;">
        <h3 style="color:blue;">Thông Tin Đặt Hàng</h3>
        <hr />
        <form method="POST"> 
                     
            <label for="name">Họ tên</label>
            <input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="name" id="name" name="name" value="<?php echo $member['name'] ?>">
            <label for="address">Địa chỉ</label>
            <input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="address" id="address" name="address" value="<?php echo $member['address'] ?>">
            <label for="phone">Số điện thoại</label>
            <input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="phone" id="phone" name="phone" value="<?php echo $member['phone'] ?>">
            <label for="note">Ghi chú</label>
            <input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="text" id="note" name="note" value=""> 
            <label for="note">Tổng giá thanh toán</label>
            <input style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" type="text" id="total" name="total" value="<?php echo ($total_price)?> đ" readonly>              
            <input href="" style="width: 100%; background-color: #4CAF50; color: white; padding: 14px 20px; margin: 8px 0; border: none; border-radius: 4px; cursor: pointer;" type="submit" name="btngiaohang" value="Thanh toán khi nhận hàng">
            <div class="m-2 d-flex">
            </div>   
        </form>
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="admin/xulymomo.php">
            <input type="hidden" name ="total" value="<?php echo $total_price ?>">
            <input type="submit" name="momo" value="Thanh toán QR MOMO" class="btn btn-danger">
        </form>
        <hr />
        <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="admin/xulyatm.php">
            <input type="hidden" name ="total" value="<?php echo $total_price ?>">
            <input type="submit" name="atm" value="Thanh toán thẻ ATM" class="btn btn-danger">
        </form>

        
</div>
<?php }else{?>
            <div class="alert alert-danger"></div>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            <strong>Vui lòng đăng nhập để mua hàng</strong><a href="./formdangnhap.php" title=""> Đăng nhập</a>
    <?php } ?>

<style>
    input[type=submit]:hover {
            background-color: #45a049;
    }
</style>