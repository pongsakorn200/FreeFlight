<?php 
include "connectDB/connectDB.php";

if(isset($_POST)){
	$AirPortID 	= $_POST['AirPortID'];
	$ToAirPort 	= $_POST['ToAirPort'];
	$flightTime = $_POST['flightTime'];
	$Price 		= $_POST['Price'];
	$AirlineID 	= $_POST['AirlineID'];

	$sql = "INSERT INTO `flight` (`flightID`, `AirPortID`, `ToAirPort`, `flightTime`, `Price`, `AirlineID`) 
	VALUES (NULL, '".$AirPortID."','".$ToAirPort."','".$flightTime."','".$Price."','".$AirlineID."');";

	$query=mysqli_query($conn,$sql);

	if($query){
		echo "<!DOCTYPE HTML>
        <html>
        <head>
          <meta charset='utf-8'>
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
          <title>สมัครสมาชิก</title>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <meta name='description' content='' />
          <meta name='keywords' content='' />
          <meta name='author' content='' />
          <link rel='icon' type='image/ico' href='../webicon.png' />
        
          <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700' rel='stylesheet'>
          <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet'>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
        
        
          <link rel='stylesheet' href='css/animate.css'>
          <link rel='stylesheet' href='css/icomoon.css'>
          <link rel='stylesheet' href='css/bootstrap.css'>
          <link rel='stylesheet' href='css/magnific-popup.css'>
          <link rel='stylesheet' href='css/flexslider.css'>
          <link rel='stylesheet' href='css/owl.carousel.min.css'>
          <link rel='stylesheet' href='css/owl.theme.default.min.css'>
          <link rel='stylesheet' href='css/bootstrap-datepicker.css'>
          <link rel='stylesheet' href=fonts/flaticon/font/flaticon.css'>
          <link rel='stylesheet' href='css/style.css'>
          <script src='js/modernizr-2.6.2.min.js'></script>
        <script src='js/respond.min.js'></script>
        
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
                        <li class='active'><a href='index.php'>จองตั๋วเครื่องบิน</a></li>
                        <li><a  href='#' onclick='$('html, body').animate({
                            scrollTop: $('h2').offset().top }, 'slow');'>ข้อมูลโปรโมชั่น</a></li>
                        <li><a href='aminities.php'>การจองของฉัน</a></li>
                        <li><a href='login.php'>ล็อกอิน</a></li>
                        <li><a href='register.php'>สมัครสมาชิก</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
        
            <aside id='colorlib-hero'>
              <div class='flexslider'>
                <ul class='slides'>
                  <li style='background-image: url(images/img_bg_5.jpg);'>
                    <div class='overlay'></div>
                      <div class='row'>
                        <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                          <div class='slider-text-inner slider-text-inner2 text-center'>
                                <h1 style=font-size:80px>สมัครสมาชิกสำเร็จ</h1>
                          </div>
                        </div>
                    </div>
                  </li>
                </ul>
              </div>
            </aside>
        
            <footer id='colorlib-footer' role='contentinfo'>
              <div class='row'>
                <div class='col-md-12 text-center'>
                </div>
              </div>
            </footer>
          </div>
        
          <div class='gototop js-top'>
            <a href='#' class='js-gotop'><i class='icon-arrow-up2'></i></a>
          </div>
          <script src='js/jquery.min.js'></script>
          <script src='js/jquery.easing.1.3.js'></script>
          <script src='js/bootstrap.min.js'></script>
          <script src='js/jquery.waypoints.min.js'></script>
          <script src='js/jquery.flexslider-min.js'></script>
          <script src='js/owl.carousel.min.js'></script>
          <script src='js/jquery.magnific-popup.min.js'></script>
          <script src='js/magnific-popup-options.js'></script>
          <script src='js/bootstrap-datepicker.js'></script>
          <script src='js/main.js'></script>
        </body>
        </html>";
        echo "<meta http-equiv='refresh' content='3;URL=index.php'>";
	}else{
	$msg="ไม่สามารถป้อนข้อมูลได้[".''.$query.''."]"; 
	    echo $msg;
	    echo "<a href='register.php'>กลับ</a>";
	}
}
?>