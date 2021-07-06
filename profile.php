<?php 
include "connectDB/connectdb.php";
include "check_session.php";

//date_default_timezone_set('Asia/Bangkok');
//echo '<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />';
//$check_log = "select * from customer where customerID ='".$_SESSION["ses_userid"]."';";
//$check_log2 = mysqli_query($conn, $check_log);
//$num = mysqli_num_rows($check_log2);

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
                                <li class="active"><a href="check_login.php">จองตั๋วเครื่องบิน</a></li>
                                <li><a href="#" onclick="$('html, body').animate({
                                        scrollTop: $('h2').offset().top }, 'slow');">ข้อมูลโปรโมชั่น</a></li>
                                <li><a href="aminities.html">การจองของฉัน</a></li>
                                <li>
                                    <a href='profile.php'>สวัสดี 
                                    <?php 
                                            echo $_SESSION['name'];
                                    ?>
                                    </a>
                                </li>
                                <li><a href='logout.php'>ออกจากระบบ</a></li>
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
                                                    $sql = mysqli_query($conn, "Select * from customers where customerID = '".$ses_userid."' ");
                                                    while ($data = mysqli_fetch_array($sql)) {
                                                        $id         =   $data['customerID'];
                                                        $title      =   $data['title'];
                                                        $Fname      =   $data['Fname'];
                                                        $Lname      =   $data['Lname'];
                                                        $tel        =   $data['tel'];
                                                        $email      =   $data['email'];
                                                        $username   =   $data['username'];
                                                        $password   =   $data['password'];
                                                        $PersonalID =   $data['PersonalID'];

                                                        echo " <div class='show'>
                                                                        <div class='t-center'><h3 style=color:#a537fd> ข้อมูลส่วนตัว </h1></div><br/>
                                                                        <center>
                                                                            <table> 
                                                                        
                                                                                <tr>
                                                                                    <td class='t-right'>Customer ID :</td>
                                                                                    <td class='t-left'>" . $id . "</td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>ชื่อ:</td>
                                                                                    <td class='t-left'>" . $Fname . "</td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>นามสกุล : </td>
                                                                                    <td class='t-left'>" . $Lname . " </td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>เบอร์โทรฯ :</td>
                                                                                    <td class='t-left'>" . $tel . "</td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>E-mail :</td>
                                                                                    <td class='t-left'>" . $email . " </td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>ชื่อผู้ใช้งาน : </td>
                                                                                    <td class='t-left'>" . $username . "</td> 
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class='t-right'>เลขบัตรประจำตัวประชาชน :</td>
                                                                                    <td class='t-left'>" . $PersonalID . "</td> 
                                                                                </tr>
                                                                            
                                                                            </table>
                                                                        </center><br/>
                                                                        <center>
                                                                            <a href='logout.php'><input id='input-box-3' type='submit' class='btn btn-warning' name='btnLogout' value='ออกจากระบบ'' /></a>
                                                                            <a href='edit_user.php'><input id='input-box-3' type='submit' class='btn btn-info' name='btnEdit' value='แก้ไขข้อมูลสมาชิก' /></a>
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
                <div class="col-md-12 text-center"></div>
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