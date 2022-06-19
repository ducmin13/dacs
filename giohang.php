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
                            <tr>
                                <td class="shoping__cart__item">
                                    <img style="width:200px;height:200px;" src="./images/sp1.jpg" alt="">
                                    <h5>Giày cầu lông Yonex</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    1.200.000 VNĐ
                                </td>
                                <td class="shoping__cart__quantity">
                                    1
                                </td>
                                <td class="shoping__cart__total">
                                    1.200.000 VNĐ
                                </td>
                                <td class="shoping__cart__item__close">
                                    <button type="button" class="btn btn-danger">Huỷ</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img style="width:200px;height:200px;" src="./images/sp6.jpg" alt="">
                                    <h5>Giày cầu lông Victor AS 37D Đỏ Vàng</h5>    
                                </td>
                                <td class="shoping__cart__price">
                                    900.000 VNĐ
                                </td>
                                <td class="shoping__cart__quantity">
                                    2
                                </td>
                                <td class="shoping__cart__total">
                                    1.800.000 VNĐ
                                </td>
                                <td class="shoping__cart__item__close">
                                    <button type="button" class="btn btn-danger">Huỷ</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="shoping__cart__item">
                                    <img style="width:200px;height:200px;" src="./images/sp7.jpg" alt="">
                                    <h5>Vợt cầu lông Yonex Astrox 88S Pro</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    4.150.000 VNĐ
                                </td>
                                <td class="shoping__cart__quantity">
                                    5
                                </td>
                                <td class="shoping__cart__total">
                                    20.750.000 VNĐ
                                </td>
                                <td class="shoping__cart__item__close">
                                    <button type="button" class="btn btn-danger">Huỷ</button>
                                </td>
                            </tr>
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
                        <li>Tổng tiền<span>23.750.000 VNĐ</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>