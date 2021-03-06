<?php 
include "connectDB/connectDB.php";
session_start();

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Free Flight</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="icon" type="image/ico" href="../webicon.png" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="colorlib-loader"></div>
  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-xs-3">
              <div id="colorlib-logo">
                <a href="index.php" >
                  <img src="images/logo1.png" width="20%"> FREE FLIGHT
                </a>
              </div>
            </div>
            <div class="col-xs-9 text-right menu-1">
              <nav id="nav">
                <ul>
                    <li><a href='profile.php'>Admin</a></li>
                    <li><a href='logout.php'>??????????????????????????????</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div>
            </div>
            <div class="modal-body">
              <form name='form2' class='form' method='post' action='check_login.php' enctype='multipart/form-data'>
                <center>
                  <table>
                    <div id='form1' class='conrainer'>
                      <h1 style=color:#595959>??????????????????????????????????????????????????? </h1>
                    </div>
                    <tr>
                      <td><input id='input-box' type='text' name='username' placeholder=' ??????????????????????????????????????? / Username' required /></td>
                      <td><input id='input-box' type='password' name='password' placeholder=' ???????????????????????? / Password' required /></td>
                    </tr>
                    <tr>
                      <td>
                        <br>
                      </td>
                    </tr>
                  </table>
                  <table>
                    <div>
                      <tr>
                        <td><input id='input-box-2' type='submit' class="btn btn-primary" name='btnSubmit' value='?????????????????????????????????' /></td>
                        <td><input id='input-box-2' type='reset' class="btn btn-secondary" name='btnReset' value='??????????????????????????????' /></td>
                      </tr>
                    </table>
                    <table>
                      <tr>
                        <td>
                          <h5 style=color:#595959>
                            <a href="#">??????????????????????????????????</a>
                            |
                            <a href="register.php">?????????????????????????????????</a>
                          </h5>
                        </td>
                      </tr>
                    </div>
                  </tr>
                </table>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>

    

  <div id="colorlib-rooms" class="colorlib-light-grey">
    <div class="container">
      <div class="row">

      </div>
      <div class="row">
        <div class="col-md-12 animate-box">
          
            <div class=" col-md-3 contain-box" >
              <a href="images/pro.png" class="room image-popup-link" style="background-image: url(images/1.png);"></a>
              <div class="desc text-center "style="background-color: rgba(165, 55, 253, 1);">
                <!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
                <h3><a href="promotion.php" style="color: #fff">Promotion</a></h3>
                
              </div>
            </div>
            <div class="col-md-3 contain-box">
              <a href="#" class="room image-popup-link" style="background-image: url(images/2.png);"></a>
              <div class="desc text-center"style="background-color: rgba(165, 55, 253, 1);">
                <!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
                <h3><a href="addflight.php"style="color: #fff;">???????????????????????????</a></h3>
                
              </div>
            </div>
            <div class="col-md-3 contain-box">
              <a href="images/pro.png" class="room image-popup-link" style="background-image: url(images/3.png);"></a>
              <div class="desc text-center"style="background-color: rgba(165, 55, 253, 1);">
                <!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
                <h3><a href="Admin_user.php"style="color: #fff;">??????????????????</a></h3>
                
              </div>
            </div>
            <div class="col-md-3">
              <a href="images/pro.png" class="room image-popup-link" style="background-image: url(images/4.png);"></a>
              <div class="desc text-center"style="background-color: rgba(165, 55, 253, 1);">
                <!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
                <h3><a href="addflight.php"style="color: #fff;">???????????????????????????</a></h3>
               
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>

  <footer id="colorlib-footer" role="contentinfo">
    <div class="row">
      <div class="col-md-12 text-center">
      </div>
    </div>
  </footer>
</div>

<div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Date Picker -->
<script src="js/bootstrap-datepicker.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>

</html>