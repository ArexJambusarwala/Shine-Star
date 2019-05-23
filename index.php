<?php 
  session_start();
/*
  if(!isset($_SESSION['access_token'])){
    header('Location: register.php');
    exit();
  }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('Components/head.php')?>
  <!-- Start Bootstrap Carousel HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End Bootstrap Carousel HEAD section -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <!-- Navbar -->
    <?php  include('./Components/navbar.php')?>
    <!-- Navbar -->

    <!-- Carousel -->

    <div class="container-fluid">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
          
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
          
                <div class="item active">
                  <img src="paneercurrylarge.jpg" alt="Paneer Curry" style="width:100%;">
                  <div class="carousel-caption">
                    <h1 style="font-size:4.5em; color: #4ca1af">Astonishing varieties of curries</h2>
                  </div>
                </div>
          
                <div class="item">
                  <img src="ladyfingercurrylarge.jpg" alt="Lady Finger Curry" style="width:100%;">
                  <div class="carousel-caption">
                    <h1 style="font-size:4.5em; color: #4ca1af">Affordable prices</h2>
                  </div>
                </div>
              
                <div class="item">
                  <img src="brinjalcurrylarge.jpg" alt="Brinjal Curry" style="width:100%;">
                  <div class="carousel-caption">
                    <h1 style="font-size:4.5em; color: #4ca1af">Get food delivered to your doorstep</h2>
                  </div>
                </div>
            
              </div>
          
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

    <!-- Carousel -->

    <h1><?php echo $_SESSION['email']?></h1>
    <h1><?php echo $_SESSION['familyName']?></h1>
    <h1><?php echo $_SESSION['givenName']?></h1>
    <!--Footer-->
		<?php include('./Components/footer.php')?>
    <!--Footer -->
    <script>
        $(document).ready(function(){
            $(".menu-icon").on("click", function(){
                $("nav ul").toggleClass("showing");
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php 
  echo "<script>";
  if(isset($_SESSION['access_token'])){
    echo "document.getElementById('logout').style.display='inline-block';";
    echo "document.getElementById('register').style.display='none';";
  }
  else
  {
    echo "document.getElementById('register').style.display='inline-block';";
    echo "document.getElementById('logout').style.display='none';";
  }
  echo "</script>";

?>
</body>
</html>