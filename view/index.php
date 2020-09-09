<?php
   $title = "UK Planet"; 
   include ('header.php') ;
  ?>

<link rel="stylesheet" type="text/css" href="css/carousal.css">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="car/banner1.jpg" alt="Macbook & UK Planet">
    </div>

    <div class="item">
      <img src="car/banner2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="car/banner3.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="car/banner4.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container"></div>

<section class="container trending">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 hidden-xs">
        <a href="accessories.php" class="thumbnail">
          <img src="img/accessoriesThumb.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <a href="mbpro.php" class="thumbnail">
          <img src="img/trend.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
        <a class="thumbnail">
          <img src="img/policy.jpg" alt="..." class="">
        </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 visible-xs">
        <a href="accessories.php" class="thumbnail">
          <img src="img/accessoriesThumb.jpg" alt="...">
        </a>
      </div>

    </div>
</section>

<div class="container"></div>

<link rel="stylesheet" href="css/carousel2.css">
<div class="gallery">
    <div class="gallery-container">
      <img class="gallery-item" src="http://fakeimg.pl/300/?text=1">
      <img class="gallery-item" src="http://fakeimg.pl/300/?text=2">
      <img class="gallery-item" src="http://fakeimg.pl/300/?text=3">
      <img class="gallery-item" src="http://fakeimg.pl/300/?text=4">
      <img class="gallery-item" src="http://fakeimg.pl/300/?text=5">
    </div>
    <div class="gallery-controls"></div>
</div>

<script src="js/carousel.js"></script>

<div class="container"></div>

<section>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
  <div class="container2 col-lg-10 col-md-10 col-sm-10 col-xs-10">
    <div class="card col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <h3 class="title">Card 1</h3>
    </div>
    <div class="card col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <h3 class="title">Card 2</h3>      
    </div>
    <div class="card col-lg-3 col-md-3 col-sm-3 hidden-xs">
      <h3 class="title">Card 3</h3>        
    </div>
    <div class="card col-lg-3 col-md-3 col-sm-3 hidden-xs">
      <h3 class="title">Card 4</h3>       
    </div>
  </div>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
</section>

<div class="container"></div>

<section class="hidden-lg hidden-md hidden-sm">
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
    <div class="container2 col-lg-10 col-md-10 col-sm-10 col-xs-10">
      <div class="card hidden-lg hidden-md hidden-sm col-xs-6">
        <h3 class="title">Card 3</h3>        
      </div>
      <div class="card hidden-lg hidden-md hidden-sm col-xs-6">
        <h3 class="title">Card 4</h3>       
      </div>
    </div>
  <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
</section>

<div class="container"></div>

<section class="container trending">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="mbpro.php" class="thumbnail">
          <img src="img/mbProThumb.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="mbair.php" class="thumbnail">
          <img src="img/mbAirThumb.jpg" alt="...">
        </a>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="mb.php" class="thumbnail">
          <img src="img/mb12Thumb.jpg" alt="...">
        </a>
      </div>
    </div>
</section>


	
<?php include ('footer.php') ?>