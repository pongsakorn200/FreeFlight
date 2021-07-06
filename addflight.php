<?php include "connectDB/connectDB.php"; ?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
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

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


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
                    <a href="index.php">
                      <img src="images/logo1.png" width="20%"> FREE FLIGHT
                    </a>
                  </div>
                </div>
                <div class="col-xs-9 text-right menu-1">
                  <ul>
                    <li><a href="profile.php">Admin</a></li>
                    <li><a href="logout.php">ออกจากระบบ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <aside id="colorlib-hero">
          <div class="flexslider">
            <ul class="slides">
              <li style="background-image: url(images/img_bg_5.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                      <div class="slider-text-inner slider-text-inner2 text-center">
                        <div id="colorlib-rooms" class="colorlib-light-grey">
                          <div id="form1" class="t-center">
                            <form name="form1" class="form" method="post" action="addflight1.php" enctype="multipart/form-data">
                              <h3 id="form1">เพิ่มเที่ยวบิน</h3>
                              <hr>
                              <center>

                                <table>
                                  <tr>
                                    <td class='t-right'>AirPortID :</td>
                                    <td>
                                      <input type="text" id='input-box' name="AirPortID" class="top-right"required style="padding-left: 5px;" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class='t-right'>ToAirPort :</td>
                                    <td>
                                      <input type="text" id='input-box' name="ToAirPort" class="top-right"required style="padding-left: 5px;" />
                                    </td>
                                  </tr>
                                    <tr>
                                    <td class='t-right'>flightTime :</td>
                                    <td>
                                      <input type="date" id='input-box' name="flightTime" class="top-right"required style="padding-left: 5px;" />
                                    </td>
                                  </tr>
                                     <tr>
                                    <td class='t-right'>Price :</td>
                                    <td>
                                      <input type="text" id='input-box' name="Price" class="top-right"required style="padding-left: 5px;" />
                                    </td>
                                  </tr>
                                  <tr>
                                    <td class='t-right'>AirlineID :</td>
                                    <td>
                                      <input type="text" id='input-box' name="AirlineID" class="top-right"required style="padding-left: 5px;" />
                                    </td>
                                  </tr>
                                   
                                </table>
                                   
                                <center>
                                  <br />
                                  <input id="input-box-2" type="submit" class="btn btn-success" name="btnSubmit" value="ยืนยัน" />
                                  <a href="index.php">
                                    <input id="input-box-2" type="button" class="btn btn-warning" name="btnCancle" value="ยกเลิก" />
                                  </a>
                                  <br />
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </aside>



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