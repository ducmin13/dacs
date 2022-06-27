<?php
    include "./header.php";
  
    $query = mysqli_query($con,"SELECT orders.*, member.* FROM orders JOIN member ON orders.id_account = member.id WHERE id_account = '$_GET[id]'");
    $member=mysqli_fetch_assoc($query);
    $order = mysqli_query($con,"SELECT orders.* FROM orders WHERE orders.id_account = $member[id]");
?>


<link rel="stylesheet" href="./admin/style.css" media="screen" >
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<div class="admin_content-right-category_list">
                <h3>Đơn hàng của tôi</h3>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã đơn hàng</th>
                        <th>Tổng tiền</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Tùy chọn</th>
                    </tr>
                    <?php 
                    foreach($order as $key => $value):
                    ?>
                    <tr>
                        <td>
                            <?php echo $key+1 ?>
                        </td>
                        <td>
                            <?php echo $value['order_id'] ?>
                        </td>
                        <td>                     
                            <?php echo number_format($value["total_price"],0,",",".")?>                    
                        </td>
                        <td>
                            <?php echo $value['create_at']?>
                        </td>
                        <td>
                            <?php if($value['status']==1){
                                echo '<span class="label bg-red">Đang xử lý</span>';
                                }elseif($value['status']==2){
                                    echo '<span class="label bg-green">Đã nhận</span>';
                                }elseif($value['status']==3){
                                    echo '<span class="label bg-green">Đang giao hàng</span>'; 
                                }elseif($value['status']==4){
                                    echo '<span class="label bg-green">Đã giao hàng thành công</span>';
                                }elseif($value['status']==5){
                                    echo '<span class="label bg-green">Đơn hàng bị hủy</span>';  }?>                                   
                        </td>
                        <td>
                            <a href="./mycart_detail.php?id=<?php echo $value['order_id']?>" title="Xem chi tiết" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
                        </td>
                    </tr>
                    <?php
                endforeach
                ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>