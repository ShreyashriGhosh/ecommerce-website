<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
    <div id="content">
    <div id="bg">
    <div id="content">
    <div id="bg">
        <div class="container" style="padding-top: 100px;">
            <!-- Carousel Start -->
            <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>
                    <li data-target="#mainCarousel" data-slide-to="2"></li>
                    <li data-target="#mainCarousel" data-slide-to="3"></li>
                    <li data-target="#mainCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" style="border-radius: 0.5rem; overflow: hidden;">
                    <div class="carousel-item active" style="background-color: #343a40; height: 400px;">
                        <div class="d-flex h-100 align-items-center justify-content-center text-center text-white">
                            <img src= "images/slide1.webp" style= "object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item" style="background-color: #007bff; height: 400px;">
                        <div class="d-flex h-100 align-items-center justify-content-center text-center text-white">
                        <img src= "images/slide2.webp" style= "object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item" style="background-color: #28a745; height: 400px;">
                        <div class="d-flex h-100 align-items-center justify-content-center text-center text-white">
                        <img src= "images/slide3.webp" style= "object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item" style="background-color: #ffc107; height: 400px;">
                        <div class="d-flex h-100 align-items-center justify-content-center text-center text-dark">
                        <img src= "images/slide4.avif" style= "object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item" style="background-color: #dc3545; height: 400px;">
                        <div class="d-flex h-100 align-items-center justify-content-center text-center text-white">
                           
                        <img src= "images/slide5" style= "object-fit: cover">
                           
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
        </div>
    </div>
</div>

        </div>
    </div>
</div>

    </div>
    <div class="text-center pt-4 h3">
        * Be fashionable Men *
    </div>
    <!--menu highlights start-->
 <div class="container pt-3">
        <div class="row text-center ">
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#watch"> <img src="images/watch.jpg" class="img-fluid " alt="" style="border-radius:0.5rem">
                <!-- https://images.unsplash.com/photo-1523170335258-f5ed11844a49?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fm=jpg&w=400&fit=max-->
                    <div class="h5 pt-3 font-weight-bolder">
                      Watches
                   </div>
                 </a>
             </div>
            <div class="col-6 col-md-3 py-3 " >
                <a href="products.php#shirt"  >
                  <img src="images/clothing.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Clothing
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#shoes">
                 <img src="images/shoes.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Shoes
                 </div>
             </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="products.php#headphones">
                 <img src="images/headphones.jpg" class="img-fluid  " alt="" style="border-radius:0.5rem">
                 <div class="h5 pt-3 font-weight-bolder">
                    Headphones
                 </div>
              </div>
            </a>
        </div>
    </div>

    <!--menu highlights end-->
    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>