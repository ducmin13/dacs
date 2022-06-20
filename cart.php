<?php
    include "./header.php";

?>
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>    
                            <?php $total_price = 0; ?>        
                            <?php 
                            foreach ($cart as $key => $value):
                                $total_price += ($value["product_discount"] * $value["quantity"]);
                            ?>                           
                            <tr>
                            
                                <td class="shoping__cart__item">
                                    <img style="width:200px;height:200px;" src="<?php echo "./admin/uploads/".$value["product_img"] ?>" alt="">
                                    <h5><?php echo $value["product_name"]?></h5>
                                </td>
                                <td class="shoping__cart__price">
                                    <?php echo number_format($value["product_discount"],0,",",".") ?> đ
                                </td>
                                <td class="shoping__cart__quantity">                              
                                    <input type="number" value="<?php echo $value["quantity"] ?>" min="1" max="1000">
                                </td>
                                <td class="shoping__cart__total">
                                    <?php echo number_format(($value["product_discount"] * $value["quantity"]),0,",",".")?> đ
                                </td>
                                <td class="shoping__cart__item__close">
                                    <a href="cart1.php?id=<?php echo $value['product_id'] ?>&action=delete" class="btn btn-danger">Huỷ</a>
                                </td>                              
                            </tr>                                                                      
                            <?php endforeach?>            
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Mã giảm giá</h5>
                        <form action="#">
                            <input type="text" placeholder="Nhập mã giảm giá của bạn...">
                            <button type="submit" class="site-btn">Áp dụng</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng thanh toán</h5>
                    <ul>
                        <li>Giảm giá<span>0 NVĐ</span></li>
                        <li>Tổng tiền<span><?php echo number_format(($total_price),0,",",".") ?> đ</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</section>