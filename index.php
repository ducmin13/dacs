<?php session_start(); ?>
<?php 
    include "header.php";
    include "footer.php";
    
?>

     <!--start slide anh-->
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
         <div style="width: 1920;height: 530;" class="carousel-item active">
        <img class="d-block w-100" src="img/hinh1.jpg" alt="First slide">
        </div>
        <div style="width: 1920;height: 530;" class="carousel-item">
        <img class="d-block w-100" src="img/hinh2.jpg" alt="Second slide">
         </div>
        <div style="width: 1920;height: 530;" class="carousel-item">
          <img class="d-block w-100" src="img/hinh3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     <!--end slide anh-->


  
		

	
</body>
</html>