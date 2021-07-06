<?php 
include "connectDB/connectDB.php";

date_default_timezone_set('Asia/Bangkok');

session_start();
echo '<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />';

if (isset($_SESSION['ses_userid'])){
    $check_log = "select * from customers where customerID ='".$_SESSION["ses_userid"]."';";
    $check_log2 = mysqli_query($conn, $check_log);
    $num = mysqli_num_rows($check_log2);
}else{ 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $check_log = "select * from customers where username ='".$username."' and password = '".$password."'";
    $check_log2 = mysqli_query($conn, $check_log);
    $num = mysqli_num_rows($check_log2);
}

if ($num <= 0) {
    echo "<script>alert('username or password is incorrect!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
} else {

    while ($data = mysqli_fetch_array($check_log2)) {
        $Fname = $data['Fname'];
        $Lname = $data['Lname'];
        $_SESSION['name'] = $Fname.''.$Lname;
        $databaseType = $data['databaseType'];
        if($databaseType=='1'){
            echo "<meta http-equiv='refresh' content='1;URL=ampage.php'>";
        }else{
        echo "<!DOCTYPE HTML>
                    <html>
                    <head>
                    <meta charset='utf-8'>
                    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                    <title>ข้อมูล</title>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <meta name='description' content='' />
                    <meta name='keywords' content='' />
                    <meta name='author' content='' />
                    <link rel='icon' type='image/ico' href='../webicon.png' />
                    
                    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700' rel='stylesheet'>
                    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet'>
                    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
                    
                    
                    <link rel='stylesheet' href='css/animate.css'>
                    <!-- Icomoon Icon Fonts-->
                    <link rel='stylesheet' href='css/icomoon.css'>
                    <!-- Bootstrap  -->
                    <link rel='stylesheet' href='css/bootstrap.css'>
                    
                    <!-- Magnific Popup -->
                    <link rel='stylesheet' href='css/magnific-popup.css'>
                    
                    <!-- Flexslider  -->
                    <link rel='stylesheet' href='css/flexslider.css'>
                    
                    <!-- Owl Carousel -->
                    <link rel='stylesheet' href='css/owl.carousel.min.css'>
                    <link rel='stylesheet' href='css/owl.theme.default.min.css'>
                    
                    <!-- Date Picker -->
                    <link rel='stylesheet' href='css/bootstrap-datepicker.css'>
                    <!-- Flaticons  -->
                    <link rel='stylesheet' href=fonts/flaticon/font/flaticon.css'>
                    
                    <!-- Theme style  -->
                    <link rel='stylesheet' href='css/style.css'>
                    
                    <!-- Modernizr JS -->
                    <script src='js/modernizr-2.6.2.min.js'></script>
                    <!-- FOR IE9 below -->
                    <!--[if lt IE 9]>
                        <script src='js/respond.min.js'></script>
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
                                                    <a href='check_login.php'>
                                                        <img src='images/logo1.png' width='20%'> FREE FLIGHT
                                                    </a>
                                                </div>
                                            </div>
                                            <div class='col-xs-9 text-right menu-1'>
                                                <ul>
                                                    <li class='active'><a href='check_login.php'>จองตั๋วเครื่องบิน</a></li>"
                                                    ;?>
                                                    <li><a href="promotion.php" onclick="$('html, body').animate({scrollTop: $('h2').offset().top }, 'slow');">ข้อมูลโปรโมชั่น</a></li>
                                                    <?php echo "
                                                    <li><a href='payment.php'>การจองของฉัน</a></li>
                                                    <li><a href='profile.php'>สวัสดี " . $Fname .' '. $Lname . "</a></li>
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
                                        <li style='background-image: url(images/P1.png);'>
                                            <div class='overlay'></div>
                                            <div class='container-fluid'>
                                                <div class='row'>
                                                    <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                                                        <div class='slider-text-inner text-center'>

                                                            <h1>Welcome to the FREE FLIGHT</h1>
                                                            <h1>Comfortable flights</h1>

                                                            <!--p><a class='btn btn-primary btn-demo' href='#'></i> View Detail</a> <a class='btn btn-primary btn-learn'>Know More</a></p-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='background-image: url(images/P2.jpg);'>
                                        <div class='overlay'></div>
                                        <div class='container-fluid'>
                                            <div class='row'>
                                                <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                                                    <div class='slider-text-inner text-center'>
                                                        <h1>Discover &amp; Enjoy</h1>
                                                        <h1>Everything you need in FREE FLIGHT</h1>
                                                        <!--p><a class='btn btn-primary btn-demo' href='#'></i> View Detail</a> <a class='btn btn-primary btn-learn'>Know More</a></p-->>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </li>
                                        <li style='background-image: url(images/amenities-2.jpg);'>
                                            <div class='overlay'></div>
                                            <div class='container-fluids'>
                                                <div class='row'>
                                                    <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                                                        <div class='slider-text-inner text-center'>
                                                            <h1>We want to make you satisfied</h1>
                                                            <h1>With our service</h1>
                                                            <!--p><a class='btn btn-primary btn-demo' href='#'></i> View Detail</a> <a class='btn btn-primary btn-learn'>Know More</a></p-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li style='background-image: url(images/P4.jpg);'>
                                            <div class='overlay'></div>
                                            <div class='container-fluid'>
                                                <div class='row'>
                                                    <div class='col-md-6 col-sm-12 col-md-offset-3 slider-text'>
                                                        <div class='slider-text-inner text-center'>
                                                            <h1>Come to enjoy the unforgettable trip</h1>
                                                            <h1>In the heart of FREE FLIGHT</h1>
                                                            <!--p><a class='btn btn-primary btn-demo' href='#'></i> View Detail</a> <a class='btn btn-primary btn-learn'>Know More</a></p-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- Tab links -->
                        
                            <div id='London' class='tabcontent'>
                                <div id='colorlib-reservation'>
                                    <div class='container'>
                                        <div class='row'>
                                            <div class='col-md-12 search-wrap'>
                                                <form method='post' class='colorlib-form' action='showflight.php'>
                                                    <div class='row'>
                                                        <div class='col-md-3'>
                                                            <div class='form-group'>
                                                                <label for='date'>จาก</label>
                                                                <select name='airport' class='form-control' id='airport'>
											                        <option value=' '>ทั้งหมด</option>";
											                    $sql1 = "SELECT * FROM airport";
											                    $check_log1 = mysqli_query($conn, $sql1);

                                                                while ($data = mysqli_fetch_array($check_log1)) {
                                                                    $AirPortID 	= $data['AirPortID'];
                                                                    $AirPortName= $data['AirPortName'];
                                                                    echo  '<option value="' . $AirPortID . '">' . $AirPortName . '</option>';
                                                                }
                                                                echo "
                                                            </select>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <div class='form-group'>
                                                                <label for='date'>ถึง</label>
                                                                <select name='toAirport' class='form-control' id='toAirport'>
											                        <option value=' '>ทั้งหมด</option>";
                                                                    $sql2 = "SELECT * FROM airport";
                                                                    $check_log2 = mysqli_query($conn, $sql2);

                                                                    while ($data = mysqli_fetch_array($check_log2)) {
                                                                        $AirPortID 	= $data['AirPortID'];
                                                                        $AirPortName= $data['AirPortName'];
                                                                        echo  '<option value="' . $AirPortID . '">' . $AirPortName . '</option>';
                                                                    }
                                                                    echo "
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <div class='form-group'>
                                                                <label for='date'>วันที่ออกเดินทาง</label>
                                                                <div class='form-field'>
                                                                    <i class='icon icon-calendar2'></i>
                                                                    <input type='text' id='date' class='form-control date' placeholder='Check-in date'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='col-md-3'>
                                                            <div class='form-group'>
                                                                <label for='date'>วันที่เดินทางกลับ</label>
                                                                <div class='form-field'>
                                                                    <i class='icon icon-calendar2'></i>
                                                                    <input type='text' id='date' class='form-control date' placeholder='Check-out date'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-md-2'>
                                                        <input type='submit' name='submit' id='submit' value='Search' class='btn btn-primary btn-block'>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                            <div id='colorlib-rooms' class='colorlib-light-grey'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-6 col-md-offset-3 text-center colorlib-heading animate-box'>
                                            <h2>โปรชั่นและข้อเสนอที่น่าสนใจ</h2>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 animate-box'>
                                            <div class='owl-carousel owl-carousel2'>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'>฿</span>
                                                            <span class='price-room'>1,200</span>
                                                            <span class='per'></span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'>฿</span>
                                                            <span class='price-room'>199</span>
                                                            <span class='per'>/ per night</span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'>฿</span>
                                                            <span class='price-room'>249</span>
                                                            <span class='per'>/ per night</span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'>฿</span>
                                                            <span class='price-room'>150</span>
                                                            <span class='per'>/ per night</span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'>฿</span>
                                                            <span class='price-room'>200</span>
                                                            <span class='per'>/ per night</span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                                <div class='item'>
                                                    <a href='images/pro.png' class='room image-popup-link' style='background-image: url(images/pro.png);'></a>
                                                    <div class='desc text-center'>
                                                        <!--span class='rate-star'><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full full'></i><i class='icon-star-full'></i></span-->
                                                        <h3><a href='rooms-suites.html'>สุวรรณภูมิ<br>ขอนแก่น</a></h3>
                                                        <p class='price'>
                                                            <span class='currency'><small>฿</small></span>
                                                            <span class='price-room'>299</span>
                                                            <span class='per'>/ per night</span>
                                                        </p>
                                                        <ul>
                                                            <li><i class='icon-check'></i> บริการจากพนักงานเต็มรูปแบบ</li>
                                                            <li><i class='icon-check'></i> รวมอาหารเช้า</li>
                                                            <li><i class='icon-check'></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
                                                        </ul>
                                                        <p><a class='btn btn-primary btn-book'>จองเลย!</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-md-12 text-center animate-box'>
                                            <a href='#'>View all rooms <i class='icon-arrow-right3'></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
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
                    
                        <!-- jQuery -->
                        <script src='js/jquery.min.js'></script>
                        <!-- jQuery Easing -->
                        <script src='js/jquery.easing.1.3.js'></script>
                        <!-- Bootstrap -->
                        <script src='js/bootstrap.min.js'></script>
                        <!-- Waypoints -->
                        <script src='js/jquery.waypoints.min.js'></script>
                        <!-- Flexslider -->
                        <script src='js/jquery.flexslider-min.js'></script>
                        <!-- Owl carousel -->
                        <script src='js/owl.carousel.min.js'></script>
                        <!-- Magnific Popup -->
                        <script src='js/jquery.magnific-popup.min.js'></script>
                        <script src='js/magnific-popup-options.js'></script>
                        <!-- Date Picker -->
                        <script src='js/bootstrap-datepicker.js'></script>
                        <!-- Main -->
                        <script src='js/main.js'></script>
                        </body>
                        </html>";
                        $_SESSION["ses_id"]        =   session_id();
                        $_SESSION["ses_userid"]    =   $data["customerID"];
                        $_SESSION["ses_date"]      =   date("d/M/Y");
                        $_SESSION["ses_time"]      =   date("H:i:s");
        }
    }
}
?>
