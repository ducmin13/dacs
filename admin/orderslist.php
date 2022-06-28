<?php
    include "./header.php";
    include "./slider.php";
    include "./func.php";
    $con = mysqli_connect("localhost", "root", "", "dacs");
    $order = mysqli_query($con,"SELECT orders.*, member.name as 'Name' FROM orders JOIN member ON orders.id_account = member.id");

?>


<div class="admin_content-right">
<div class="admin_content-right-category_list">
                <h1>Danh sách đơn hàng</h1>
                <table>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
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
                            <?php echo $value['order_id'] ?>
                        </td>
                        <td>
                            <?php echo $value['Name'] ?>
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
                            <a href="./orderdetail.php?id=<?php echo $value['order_id']?>" title="Xem chi tiết" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
                           
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