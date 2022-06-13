<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8d037ce4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Trang chủ</title>
</head>

<div class="footer">
        <div class="container">
            <div class="row">
                <!-- download -->
                <div class="footer-col-1">
                    <h3>Tải ứng dụng</h3>
                    <p>Cho hệ điều hành IOS và Android</p>
                    <div class="app-logo">
                        <img src="./images/app-store.png" alt="">
                        <img src="./images/play-store.png" alt="">
                    </div>
                </div>
                <!-- logo footer -->
                <div class="footer-col-2">
                    <img src="./images/logo-one.png" alt="">
                    <p>Viết cái gì đó ở đây!</p>
                </div>
              
                <!-- link -->
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Voucher</li>
                        <li>Blog</li>
                        <li>Policy</li>
                        <li>Become Affiliate</li>
                    </ul>
                </div>
                <!-- follow -->
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Duc Minh</p>
        </div>
    </div>

    <style>
        
.footer {
    background:#000 ;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}

.footer p {
    color: #8a8a8a;
}

.footer h3 {
    color: #fff;
    margin-bottom: 20px;
}

.footer-col-1,
.footer-col-2,
.footer-col-3,
.footer-col-4 {
    min-width: 250px;
    margin-bottom: 20px;
}

.footer-col-1 {
    flex-basis:30% ;
}

.footer-col-2 {
    flex: 1;
    text-align: center;
}

.footer-col-2 img{
    width: 100%;
    margin-bottom: 20px;
}

.footer-col-3,
.footer-col-4 {
    flex-basis: 12%;
    text-align: center;
}

ul {
    list-style-type: none;
}

.app-logo {
    margin-top: 20px;
}

.app-logo img{
    width: 140px;
}

.footer hr {
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}

.copyright {
    text-align: center;
}

    </style>