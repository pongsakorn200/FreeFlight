<?php
include "connectDB/connectDB.php";
$sql = "SELECT * FROM flight";
$check_log = mysqli_query($conn, $sql);
$airport=$_POST['airport'];
$toAirport=$_POST['toAirport'];
$toGo= date('Y-m-d', strtotime($_POST['DateA']));
$toBack=date('Y-m-d', strtotime($_POST['DateB']));
?>
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=freeflight;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "เกิดข้อผิดพลาด : " . $e->getMessage();
}
?>
<?php   
$stmt = $pdo->prepare("SELECT flightID,AirPortID,ToAirPortID,flightDate,flightTime,Price,AirlineID FROM flight WHERE AirPortID = '".$airport."' and ToAirPortID ='".$toAirport."' and flightDate ='".$toGo."' or AirPortID = '".$toAirport."' and ToAirPortID ='".$airport."' and flightDate ='".$toBack."' ORDER BY flightID ;");
$stmt->execute();
?>
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <nav id="nav">
                                <ul>
                                    <li class="active"><a href="index.php">จองตั๋วเครื่องบิน</a></li>
                                    <li><a href="promotion.php">ข้อมูลโปรโมชั่น</a></li>
                                    <li><a href="showflight.php">การจองของฉัน</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">ล็อกอิน</a></li>
                                    <li><a href="register.php">สมัครสมาชิก</a></li>
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
                        <form name='form2' class='form' method='post' action='register1.php' enctype='multipart/form-data'>
                            <center>
                                <table>
                                    <div id='form1' class='conrainer'>
                                        <h1 style=color:#595959>เข้าสู่ระบบสมาชิก </h1>
                                    </div>
                                    <tr>
                                        <td><input id='input-box' type='text' name='username' placeholder=' ชื่อผู้ใช้งาน / Username' required /></td>
                                        <td><input id='input-box' type='password' name='password' placeholder=' รหัสผ่าน / Password' required /></td>
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
                                            <td><input id='input-box-2' type='submit' class="btn btn-primary" name='btnSubmit' value='เข้าสู่ระบบ' /></td>
                                            <td><input id='input-box-2' type='reset' class="btn btn-secondary" name='btnReset' value='ล้างข้อมูล' /></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td>
                                                <h5 style=color:#595959>
                                                    <a href="#">ลืมรหัสผ่าน?</a>
                                                    |
                                                    <a href="register.php">สมัครสมาชิก</a>
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
          <table class="table table-borderless table-hover" >
            <thead class="table-success">
                <tr>
                    <th scope="col">หมายเลขเที่ยวบิน</th>
                    <th scope="col">จาก</th>
                    <th scope="col">ไปยัง</th>
                    <th scope="col">วันที่</th>
                    <th scope="col">เวลาบิน</th>
                    <th scope="col">ราคา</th>
                    <th scope="col">สายการบิน</th>
                </tr>
            </thead>
            <tbody>
                <form method="post" class="colorlib-form" action="order.php?">
                <?php
                while ($row = $stmt->fetch()) {
                    echo "<tr>";
                    echo "<td name='fid'>" . $row['flightID'] . "</td>";
                    /*-----จาก-----*/
                    if ($row['AirPortID']=="A001"){
                        echo"<td name='formA'>" ."Bangkok/Donmueng (DMC)". "</td>";
                    }
                    elseif($row['AirPortID']=="A002"){
                        echo "<td name='formA'>" ."Thaiwan (TWC)". "</td>";
                    }
                    /*------ไป-----*/
                    if ($row['ToAirPortID']=="A001"){
                        echo"<td name='toB'>" ."Bangkok/Donmueng (DMC)". "</td>";
                    }
                    elseif($row['ToAirPortID']=="A002"){
                        echo "<td name='toB'>" ."Thaiwan (TWC)". "</td>";
                    }
                    echo "<td>" . $row['flightDate'] . "</td>";
                    echo "<td>" . $row['flightTime'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    /*----สายการบิน----*/
                    if ($row['AirlineID']=="AL0002") {
                        echo "<td>" . "<img src='img/KBT.jpg' width='80px'" . "</td>";
                    }
                    elseif($row['AirlineID']=="AL0004") {
                        echo "<td>" . "<img src='img/KOREA-Airline.jpg' width='80px'" . "</td>";
                    }
                    elseif($row['AirlineID']=="AL0005") {
                        echo "<td>" . "<img src='img/Nok-Air.jpg' width='80px'" . "</td>";
                    }
                    
                    echo "<td><input type='submit' name='submit' id='submit' value='เลือก' class='btn btn-primary btn-block'>&nbsp;&nbsp;";
                    echo "</tr>";
                }
                ?>
            </form>
            </tbody>
        </table><label></label><hr>
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