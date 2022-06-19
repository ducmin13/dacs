
    <?php 
      include "header.php";
      include "slider.php";
    ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Danh mục sản phẩm</span>
                    </div>
                    <ul>
                        <?php 
                        $query = "SELECT * FROM tbl_brand WHERE  status = 1";
                        $result = mysqli_query($con,$query) or die ("lỗi");
                        if(mysqli_num_rows($result) > 0 ){   
                          while($row = mysqli_fetch_assoc($result)){       
                          ?>
                          <li class="nav-item active">
                          <a  class="nav-link" href="./sanpham2.php?page=brand&id=<?php echo $row['brand_id'] ?>"><?php echo $row['brand_name'] ?> <span class="sr-only">(current)</span></a>
                          
                          </li>
                          <?php
                        }
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-9">
                <!--start slider-->
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./template/img/hinh1.jpg" alt="" width="1100" height="500">

                        </div>
                        <div class="carousel-item">
                            <img src="./template/img/hinh1.jpg" alt="" width="1100" height="500">

                        </div>
                        <div class="carousel-item">
                            <img src="./template/img/hinh1.jpg" alt="" width="1100" height="500">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
                <!--end slider-->

            </div>
            </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm nổi bật</h2>
                </div>
            </div>
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg">
                        <img src="./template/img/sp1.jpg" alt="Alternate Text" />
                        <h5><a href="#">Giày Yonex</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg">
                        <img src="./template/img/sp2.jpg" alt="Alternate Text" />
                        <h5><a href="#">Giày Victor</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg">
                        <img src="./template/img/sp3.jpg" alt="Alternate Text" />
                        <h5><a href="#">Vợt Yonex</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg">
                        <img src="./template/img/sp5.jpg" alt="Alternate Text" />
                        <h5><a href="#">Balo Yonex</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="./template/img/banner2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="./template/img/banner2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->
<hr />

<?php include "footer.php"; ?>