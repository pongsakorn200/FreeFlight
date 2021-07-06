<?php include "connectDB/connectdb.php"; ?>
<?php include "check_session.php"; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>สมัครสมาชิก</title>
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
                                <li class="active"><a href="index.html">จองตั๋วเครื่องบิน</a></li>
                                <li><a href="promotion.html">ข้อมูลโปรโมชั่น</a></li>
                                <li><a href="aminities.html">การจองของฉัน</a></li>
                                <li><a href="login.php">ล็อกอิน</a></li>
                                <li><a href="register.php">สมัครสมาชิก</a></li>
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
                                                <?php

                                                $sql = mysqli_query($conn, "Select * from customer where id = " . $ses_userid . " ");
                                                $n = 1;
                                                while ($row = mysqli_fetch_array($sql)) {
                                                    $id         =   $row['id'];
                                                    $title      =   $_POST['title'];
                                                    $Fname      =   $_POST['Fname'];
                                                    $Lname      =   $_POST['Lname'];
                                                    $tel        =   $_POST['tel'];
                                                    $email      =   $_POST['email'];
                                                    $username   =   $_POST['username'];
                                                    $password   =   $_POST['password'];
                                                    $PersonalID =   $_POST['PersonalID'];

                                                    echo " <div class='show'>
                <div class='t-center'> สวัสดี ". $title . $Fname . " " . $Lname . " </div><br/>
                <table width='100%'> 
                    <tr>
                        <td class='t-right'>ID :</td>
                        <td>" . $id . "</td> 
                    </tr>

                    <tr>
                        <td class='t-right'>ชื่อ:</td>
                        <td>" . $Fname . "</td> 
                    </tr>

                    <tr>
                        <td class='t-right'>นามสกุล : </td>
                        <td>" . $Lname . " </td> 
                    </tr>

                    <tr>
                        <td class='t-right'>ชื่อเล่น :</td>
                        <td>" . $tel . "</td> 
                    </tr>

                    <tr>
                        <td class='t-right'>วันเกิด :</td>
                        <td>" . $email . " </td> 
                    </tr>

                    <tr>
                        <td class='t-right'>อายุ : </td>
                        <td>" . $username . "</td> 
                    </tr>

                    <tr>
                        <td class='t-right'>email :</td>
                        <td>" . $password . "</td> 
                    </tr>

                    <tr>
                        <td class='t-right'>กรุ๊ปเลือด :</td>
                        <td>" . $PersonalID . "</td> 
                    </tr>
				</table> 
                <br/>
                <center>
                	<a href='logout.php'><input type='submit' value='ออกจากระบบ'' /></a>
                	<a href='edit_user.php'><input type='submit' value='แก้ไขข้อมูลสมาชิก' /></a>
                </center> 
                </div>";
                                                }
                                                ?>
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