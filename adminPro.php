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

  <link rel="stylesheet" href="css/bootstrap.min.css">

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

      <div class='colorlib-loader'></div>
      <div id='page'>
        <nav class='colorlib-nav' role='navigation'>
          <div class='top-menu'>
            <div class='container'>
              <div class='row'>
                <div class='col-xs-3'>
                  <div id='colorlib-logo'>
                    <a href='index.php'>
                      <img src='images/logo1.png' width='20%'> FREE FLIGHT
                    </a>
                  </div>
                </div>
                <div class='col-xs-9 text-right menu-1'>
                  <ul>
                    <li><a href='profile.php'>Admin</a></li>
                    <li><a href='logout.php'>ออกจากระบบ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
        

        <aside id='colorlib-hero'>
          <div class='flexslider'>
            <ul class='slides'>
              <li style='background-image: url'images/img_bg_5.jpg';'>
                <div class='overlay'></div>
                <div class='container-fluid'>
                  <div class='row'>
                    <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                      <div class='slider-text-inner slider-text-inner2 text-center'>
                        <div id='colorlib-rooms' class='colorlib-light-grey'>
                        
                              <center>
                              <table class='table'>
                              <thead class='thead-dark'>
                                  <tr>
                                  <th scope='col'>customerID</th>
                                  <th scope='col'>title</th>
                                  <th scope='col'>Fname</th>
                                  <th scope='col'>Lname</th>
                                  <th scope='col'>tel</th>
                                  <th scope='col'>email</th>
                                  <th scope='col'>username</th>
                                  <th scope='col'>password</th>
                                  <th scope='col'>PersonalID</th>
                                  <th scope='col'>Edit</th>
                                  <th scope='col'>Delete</th>

  
                                  </tr>
                              </thead>
                              <tbody>
                              <?php
                              $sql = mysqli_query($conn, "Select * from customer");
                              while($row = mysqli_fetch_array($sql)){
                                $customerID    =   $row['customerID']; 
                                $title         =   $row['title']; 
                                $Fname         =   $row['Fname']; 
                                $Lname         =   $row['Lname']; 
                                $tel           =   $row['tel']; 
                                $email         =   $row['email']; 
                                $username      =   $row['username']; 
                                $password      =   $row['password']; 
                                $PersonalID    =   $row['PersonalID']; 
                                  echo "
                                <tr>";
                                echo "<th scope='row'>".$customerID."</th>";
                                echo "<td>".$title."</td>";
                                echo "<td>".$Fname."</td>";
                                echo "<td>".$Lname."</td>";
                                echo "<td>".$tel."</td>";
                                echo "<td>".$email."</td>";
                                echo "<td>".$username."</td>";
                                echo "<td>".$password."</td>";
                                echo "<td>".$PersonalID."</td>";
                                echo "<td><a href='edit_user.php? customerID=".$customerID."'>";
                                echo "<span class = 'glyphicon glyphicon-pencil' aria-hidden = 'true'></span>";
                                echo "</a></td>";
                                echo "<td><a href='del_user.php? customerID=".$customerID."' onclick='return confirm(\'คุณแน่ใจที่ต้องการลบ?\');'>";
                                echo "<span class = 'glyphicon glyphicon-trash' aria-hidden = 'true'></span>";
                                echo "</a></td>";
                                echo "</tr>";
                                echo "<br>";

                            }?>

                            </tbody>
                            </table>
                            

                              </center>
                                  <br/>
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