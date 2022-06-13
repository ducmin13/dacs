* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
li {
    list-style-type: none;
}
a{
    text-decoration: none;
    color: #333;
}
header {
    display: flex;
    justify-content: space-between;
    padding: 12px 50px;
    height: 70px;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
    background: rgba(255, 255, 255, 0.3);

}
/* ấn vào nó sẽ hiện lên khung trắng  */
header:hover {
    background: rgba(255, 255, 255, 1);
}
.logo {
    flex: 1;
    height: 20px;
    
}
.menu {
    flex: 3;
    display: flex;
}
.menu > li{
    padding: 0 12px;
    position: relative;

}
/* hover menu ẩn vào phần sản phẩm */
/* transition : hiệu ứng làm chậm // Visibility : ẩn menu */
.menu > li:hover .sub-menu {
    visibility: visible;
    top: 50px;
}

.sub-menu {
    position: absolute;
    width: 150px;
    border: 1px solid #ccc;
    padding: 10px 0 10px 20px;
    visibility: hidden;
    top: 60px;
    transition: 0.3s;
    z-index: 1;
    background: #fff ;
}
.sub-menu ul {
    padding-left: 15px;

}
.sub-menu ul a {
    font-weight: normal !important;
    font-size: 12px !important;

}
.menu > li a {
    font-size: 12px;
    font-weight: bold !important ;
    display: block;
    line-height: 25px;
  
}
.other {
    flex: 1;
    display: flex;
}
.other > li {
    padding: 0 12px;
}
.other > li:first-child {
    position: relative;
}
/* chỉnh cho outline lên vừa đủ hình */
.other > li:first-child input {
    width: 100%;
    border: none;
    border-bottom: 1px solid #333;
    background: transparent;
    outline: none ;
   
}
.other > li:first-child i {
    position: absolute;
    right: 10px;
}
#Slider {
    padding-bottom: 30px;
    border-bottom: 2px solid #000;
    overflow: hidden;

}
.aspect-ratio-169 {
    display: block;
    position: relative;
    padding-top: 56.25%;
    transition: 0.3s;
    
  }
  
.aspect-ratio-169 img {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
  }
.dot-container {
    position: absolute;
    height: 30px;
    width: 100%;
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
}
.dot {
    height: 13px;
    width: 13px;
    background-color: #CCC;
    border-radius: 50%;
    margin-right: 12px;
    cursor: pointer;
}
.dot.active {
    background-color: #333;
}
/* -------------------app-BadmintonSport----------------- */
.app-BadmintonSport {
    text-align: center;
    align-items: center;
    padding: 150px 0 50px 0;
}
.Download-App {
    margin: 50px;
    height: 50px;
}
.Download-App img {
    height: 50px;
    cursor: pointer;
}
.app-BadmintonSport p {
    line-height: 20px;
    letter-spacing: 1px;
    font-size: 17px;
    color: #000;
    font-weight: bold;
}
.app-BadmintonSport input {
    margin-top: 50px;
    border: none;
    border-bottom: 1px solid #000;
    padding-bottom: 20px;
    width: 400px;
    text-align: center;
    outline: none;
    
}
/* -------------------footer----------------- */
footer {
    text-align: center;

}
/* chỉnh cho các footer ra giữa và căn chỉnh */
.footer-top {
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    height: 70px;
}
.footer-top li {
    padding: 0 12px;
    position: relative;
}
/* chỉnh gạch dòng cho footer */
.footer-top li::after {
    content: "";
    display: block;
    width: 1px;
    height: 80%;
    background: #cccccc;
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
}
.footer-top li:last-child::after {
    display: none;
}
/* chỉnh item footer  */
.footer-top li:last-child a {
    margin-right: 12px;
    color: #333;
}
.footer-center {
    text-align: center;
}
/* .right-footer.register-form {
    padding: 24px 16px;
    background: #ffffff;
    border: 6px solid #E7E8E9;
    border-radius: 56px 0px;
    padding: 32px 28px;
    margin-bottom: 32bx;
}
.btn-submid {
    position: relative;
    display: inline-block;
    background: #fff;
    border-radius: 24px 0px;
} */
.footer-bottom {
    padding: 10px 0;
    font-size: 12px;
    font-family: var(--main-text-font);
    background-color: #dddddd;
    width: 100%;
    text-align: center;
    margin-top: 30px;

}
/* .row {
    display: flex;
    flex-wrap: wrap;
} */
   
/* CSS GIỎ HÀNG */
.row {
    display: flex;
    flex-wrap: wrap;
}

.giohang {
    padding: 100px 0 0 ;
}
.giohang-top {
    margin-bottom: 50px;
}

.giohang-top p {
    font-family: var(--main-text-font);
    /* trên dưới 0 , trái phải 12px */
    margin: 0 12px; 
    font-size: 12px;
}
.giohang-left  {
    width: 20%;
}
.giohang-right {
    width: 80%;
}
.giohang-right-top-item:first-child {
    flex: 2;
    font-size: 16px;
    font-family: var(--main-text-font);
    font-weight: bold;
}
.giohang-right-top-item {
    flex: 1;
    padding: 0 10px;

}
/* button bộ lọc  */
.giohang-right-top-item button {
    width: 100%;
    padding: 10px 15px;
    display: flex;
    justify-content: space-between;
    background-color: #ffff;
    border: 1px solid #dddddd;
    cursor: pointer;
}
/* button sắp xếp  */
.giohang-right-top-item select {
    width: 100%;
    padding: 10px 15px;
    display: flex;
    justify-content: space-between;
    background-color: #ffff;
    border: 1px solid #dddddd;
    cursor: pointer;
}
/* justify-content space betwwenn để căn chỉnh ngang */
.giohang-right-content  {
    margin-top: 20px;
    justify-content: space-between;

}
.giohang-right-content-item {
    width: calc(25% - 12px);
    text-align: center;
    padding: 12px 0;

}
.giohang-right-content-item h1 {
    font-size: 11px;
    font-family: var(--main-text-font);
    margin-top: 6px;
    color: #333333;
}
.giohang-right-content-item img {
    width: 100%;
}
.giohang-right-content-item p {
    font-size: 12px;
}
.giohang-right-content-item td {
    margin: 15px;
}

.giohang-right-bottom {
    justify-content: space-between;
    margin: 30px 0 20px;
    width: 100%;
    font-weight: 300;
}
.giohang-right-bottom p {
    font-family: var(--main-text-font);
    font-size: 11px;
}
/* css phần bên trái thẻ ul  */
.giohang-left ul li {
    padding: 12px 0;

}
.giohang-left ul li>a {
    color: #000;
    font-size: 16px;
    font-weight: bold;
    font-family: var(--main-text-font);
}
.giohang-left ul li ul li {
    padding-left: 10px;

}
.giohang-left-li ul {
    display: none;
}
.giohang-left-li.block ul {
    display: block;
}
.giohang-left ul li ul li a {
    color: #333333;
    font-size: 12px;
}

/* chitietsanphamnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn */
.product {
    padding: 100px 0;
}
.product-top {
    margin-bottom: 30px;
}
.product-top p {
    font-family: var(--main-text-font);
    margin: 0 12px;
    font-size: 12px;
}
.product-content-left {
    width: 50%;
}
.product-content-right {
    width: 50%;
}
.product-content-left-big-img {
    width: 80%;
    padding-right: 40px;
}
.product-content-left-big-img img {
    width: 100%;
}
.product-content-left-small-img {
    width: 20%;
}
.product-content-left-small-img img {
    width: 100%;
}
.product-content-right {
    width: 50%;
    padding-left: 20px;
}
.product-content-right-product-name h1 {
    font-family: var(--main-text-font);
    font-size: 16px;
}
.product-content-right-product-name p {
    color: #cccccc;
    font-size: 12px;
}
.product-content-right-product-price {
    margin: 12px 0;
    font-size: 20px;
    font-weight: bold;
    font-family: var(--main-text-font);
}
.product-content-right-product-color img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}
.product-content-right-product-price-img {
    height: 40px;
    width: 40px;
    border: 1px solid #333;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 12px 0;
}
.size span {
    display: inline-block;
    padding: 3px 6px;
    border: 1px solid #dddddd;
    margin: 12px 10px 12px 0;
    font-size: 12px;
    cursor: pointer;
}
.quantity {
    display: flex;
    margin-bottom: 20px;

}
.quantity input {
    width: 35px;
    padding-left: 3px;
    
}
.product-content-right-product-button button {
    width: 150px;
    height: 40px;
    display: block;
    margin: 20px 0 12px;
    transition: all 0.3s ease;
}
.product-content-right-product-button button:first-child {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: #fff;
    border: 2px solid #000;
    cursor: pointer;
}
.product-content-right-product-button button:first-child:hover {
    background-color: black;
    color: #fff;
}
.product-content-right-product-button button:last-child {
    border: 2px solid #BF8A49;
    color: #BF8A49;
    background-color: #ffff;
    cursor: pointer;
}
.product-content-right-product-icon {
    display: flex;
}
.product-content-right-product-icon-item {
    display: flex;
    margin-right: 12px;
    justify-content: center;
    align-items: center;

}
.product-content-right-product-icon-item i {
    font-size: 12px;
    margin-right: 6px;
}
.product-content-right-product-icon-QRcode {
    margin: 20px 0;
}
.product-content-right-bottom-top {
    position: absolute;
}
/* related */
.product-related {
    margin-bottom: 50px;

}
.product-related-title {
    margin: 20px 0;
}
.product-related-title p {
    font-family: var(--main-text-font);
    font-size: 14px;
    font-weight: bold;
    color: #333333;
}
.product-related-item {
    width: 20%;
    text-align: center;
    padding: 0 6px;
}
.product-related-item img {
    width: 100%;
}
.product-related-item h1 {
    font-family: var(--main-text-font);
    font-size: 11px;
    color: #333333;
    margin-top: 16px;
}
.product-related-item p {
    font-size: 12px;
    /* text-decoration: line-through; */
}
/* giohang2 22222222-- */
.cart {
    padding: 100px 0;
}
.cart-top-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}
.cart-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0 100px;
}
.cart-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.cart-top-item i {
    color: #dddddd;
}
/* thẻ card itemgiohang */
.cart-top-cart {
    border: 1px solid #0db7ea;
}
.cart-top-cart i {
    color: #0db7ea;
}
.cart-content-left {
    flex: 2;
    padding-right: 12px;
}
.cart-content-left table {
    width: 100%;
    text-align: center;

}
.cart-content-left table th {
    padding-bottom: 30px;
    font-family: var(--main-text-font);
    font-size: 12px;
    text-transform: uppercase;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
}
.cart-content-left table p {
    font-family: var(--main-text-font);
    font-size: 12px;
    color: #333;

}
.cart-content-left table input {
    width: 30px;
}
.cart-content-left table span {
    display: block;
    width: 20px;
    height: 20px;
    border: 1px solid #dddddd;
    cursor: pointer;
}
.cart-content-left table td {
    padding: 20px 0;
    border-bottom: 2px solid #dddddd;
}
.cart-content-left td:first-child img {
    width: 250px;
}
.cart-content-left td:nth-child(2) {
    max-width: 130px;
}
.cart-content-left td:nth-child(3) img{
    width: 50px;
}
/* right đường giữa */
.cart-content-right { 
    float: 1;
    padding-left: 12px;
    border-left: 2px solid #dddddd;
}
.cart-content-right table {
    width: 100%;
}
.cart-content-right table th {
    padding-bottom: 130px;
    font-family: var(--main-text-font);
    font-size: 15px;
    color: #333;
    border-collapse: collapse;
    border-bottom: 2px solid #dddddd;
}
.cart-content-right table td {
    font-family: var(--main-text-font);
    font-size: 15px;
    color: #333;
    padding: 6px 0;
}
.cart-content-right tr:nth-child(4) td {
    border-bottom: 2px solid #dddddd;

}
.cart-content-right tr td:last-child {
    text-align: right;
}
.cart-content-right-text {
    margin: 20px 0;
    text-align: center;

}
.cart-content-right-text p {
    font-family: var(--main-text-font);
    font-size: 15px;
    color: #333;
}
.cart-content-right-button {
    text-align: center;
    align-items: center;
}
.cart-content-right-button button {
    padding: 0 18px;
    height: 35px;
    cursor: pointer;   
}
.cart-content-right-button button:first-child {
    background-color: #fff;
    border: 1px solid #000;
    margin-right: 20px;
}
.cart-content-right-button button:first-child:hover {
    background-color: #BF8A49;
    color: white;
    border: none;
    border: 1px solid black;
}
/* -------------------------------giaohang1------------------------------- */
.giaohang {
    padding: 100px 0;
}
.giaohang-top-wrap {
    display: flex;
    justify-content: center;
    align-items: center;
}
.giaohang-top {
    height: 2px;
    width: 70%;
    background-color: #dddddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0 100px;
}
.giaohang-top-item {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid #dddddd;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #fff;
}
.giaohang-top-item i {
    color: #dddddd;
}
.giaohang-top-adress  {
    border: 1px solid #0db7ea;
}
.giaohang-top-adress i {
    color: #0db7ea;
}
.giaohang-content-left {
    width: 60%;
    padding-right: 12px;
}
.giaohang-content-left p {
    font-family: var(--main-text-font);
    font-size: 12px;
}
.giaohang-content-left label {
    font-family: var(--main-text-font);
    font-size: 12px;
    margin-bottom: 6px;
    display: block;
}
.giaohang-content-left> p {
    font-weight: bold;
}
.giaohang-content-left-dangnhap {
    margin-top: 12px;
}
.giaohang-content-left-dangnhap i {
    font-size: 12px;
    margin-right: 12px;
}
.giaohang-content-left-khachle {
    margin: 12px 0;
}
.giaohang-content-left-khachle input {
    margin-right: 12px;
}
.giaohang-content-left-dangky {
    margin-bottom: 30px;
}
.giaohang-content-left-dangky input {
    margin-right: 12px;
}
.giaohang-content-left-input-top {
    justify-content: space-between;
}
.giaohang-content-left-input-top-item {
    width: calc(50% - 12px);
}
.giaohang-content-left-input-top-item input {
    width: 100%;
    height: 35px;
    border: 1px solid #dddddd;
    padding-left: 6px;
}
.giaohang-content-left-input-bottom input {
    width: 100%;
    height: 35px;
    border: 1px solid #dddddd;
    padding-left: 6px;
}
.giaohang-content-left-button p {
    display: inline-block;
    font-family: var(--main-text-font);
    font-size: 12px;
}
.giaohang-content-left-button span {
    margin-right: 12px;
}
.giaohang-content-left-button {
    justify-content: space-between;
    padding-top: 20px;
}
.giaohang-content-left-button button {
    height: 35px;
    border: 2px solid #333;
    padding: 6px 12px;
    cursor: pointer;
}
.giaohang-content-left-button button:hover {
    background-color: #000;
    color: #fff;
}
.giaohang-content-right {
    width: 40%;
    padding-left: 12px;
    border-left: 2px solid #dddddd;
    height: auto;
}
.giaohang-content-right table {
    width: 100%;
    font-family: var(--main-text-font);
    font-size: 12px;
    text-align: center;
}
.giaohang-content-right table tr th:first-child {
    text-align: left;
}
.giaohang-content-right table tr th {
    padding-bottom: 12px;
    border-bottom: 2px solid #dddddd;
}
.giaohang-content-right table tr th:last-child {
    text-align: right;
}
.giaohang-content-right table tr td {
    padding: 6px 0;
}
.giaohang-content-right table tr:nth-child(4) {
    border-top: 2px solid #dddddd;
}
.giaohang-content-right table tr td:last-child {
    text-align: right;
}
.giaohang-content-right table tr td:first-child {
    text-align: left;
}










 

