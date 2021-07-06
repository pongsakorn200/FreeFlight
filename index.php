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
								<a href="index.php">
									<img src="images/logo1.png" width="20%"> FREE FLIGHT
								</a>
							</div>
						</div>
						<div class="col-xs-9 text-right menu-1">
							<nav id="nav">
								<ul>
									<li class="active"><a href="index.php">จองตั๋วเครื่องบิน</a></li>
									<li><a href="promotion.php" onclick="$('html, body').animate({
										scrollTop: $('h2').offset().top }, 'slow');">ข้อมูลโปรโมชั่น</a></li>
									<li><a href="showflight.php">การจองของฉัน</a></li>
									<?php
									if (!isset($_SESSION["ses_userid"])) {
										echo "<li><a href='#' data-toggle='modal' data-target='#exampleModal'>ล็อกอิน</a></li>
											<li><a href='register.php'>สมัครสมาชิก</a></li>";
									} else {
										echo "<li><a href='#'>" . $Fname . ' ' . $Lname . "</a></li>
											<li><a href='logout.php'>ออกจากระบบ</a></li>";
									}
									?>
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
												<a href="#" data-toggle='modal' data-target='#Modal2'>ลืมรหัสผ่าน?</a>
												
												<a href="register.php">สมัครสมาชิก</a>
											</h5>
										</td>
									</tr>
								</table>
							</center>
						</form>
					</div>
				</div>
			</div>
		</div>

	<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form name='form2' class='form' method='post' action='index.php' enctype='multipart/form-data'>
						<center>
							<table>
								<div id='form1' class='conrainer'>
									<h1 style=color:#595959>ส่งข้อมูลการรีเซ็ตรหัสผ่านไปที่ E-mail </h1>
								</div>
								<tr>
									<td><input id='input-box' type='email' name='email' placeholder=' อีเมล / E-mail' required /></td>
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
										<td><input id='input-box-2' type='submit' class="btn btn-primary" value='ยืนยัน' /></td>
										<td><button type="button" id='input-box-2' class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button></td>
									</tr>
							</table>
						</center>
					</form>
				</div>
			</div>
		</div>
	</div>

	<aside id="colorlib-hero">
		<div class="flexslider">
			<ul class="slides">
				<li style="background-image: url(images/P1.png);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
								<div class="slider-text-inner text-center">

									<h1>Welcome to the FREE FLIGHT</h1>
									<h1>Comfortable flights</h1>

									<!--p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p-->
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(images/P2.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
								<div class="slider-text-inner text-center">
									<h1>Discover &amp; Enjoy</h1>
									<h1>Everything you need in FREE FLIGHT</h1>
									<!--p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p-->>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(images/amenities-2.jpg);">
					<div class="overlay"></div>
					<div class="container-fluids">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
								<div class="slider-text-inner text-center">
									<h1>We want to make you satisfied</h1>
									<h1>With our service</h1>
									<!--p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p-->
								</div>
							</div>
						</div>
					</div>
				</li>
				<li style="background-image: url(images/P4.jpg);">
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
								<div class="slider-text-inner text-center">
									<h1>Come to enjoy the unforgettable trip</h1>
									<h1>In the heart of FREE FLIGHT</h1>
									<!--p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p-->
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</aside>
	<!-- Tab links -->

	<div id="London" class="tabcontent">
		<div id="colorlib-reservation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">

						<!--<a href="#" onclick="toBackHome()">ไป-กลับ</a>
						<a href="#" onclick="toGo()">เที่ยวเดียว</a>-->

						<form method="post" class="colorlib-form" action="showflight.php?">
							<div class="row">
								<div class="col-md-3">
									<div id="toGo" class="form-group">
										<label for="date">จาก</label>
										<!--<input id="from" type="text" class="form-control ui-autocomplete-input" name="from" value="กรุงเทพมหานคร (สุวรรณภูมิ) - ไทย [BKK]" onfocus="if(this.value == 'กรุงเทพมหานคร (สุวรรณภูมิ) - ไทย [BKK]') this.value=''" onblur="if(this.value == '') this.value='กรุงเทพมหานคร (สุวรรณภูมิ) - ไทย [BKK]';changeDepartureCity(this);" aria-required="true" autocomplete="off" style="width: 268px;">-->
										<select name="airport" class="form-control" id="airport">
											<option value=" ">ทั้งหมด</option>
											<?PHP
											$sql1 = "SELECT * FROM airport";
											$check_log1 = mysqli_query($conn, $sql1);

											while ($data = mysqli_fetch_array($check_log1)) {
												$AirPortID 	= $data['AirPortID'];
												$AirPortName= $data['AirPortName'];
												echo  '<option value="' . $AirPortID . '">' . $AirPortName . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div id="toBack" class="form-group">
										<label for="date">ถึง</label>
										<!--<input id="to" type="text" class="form-control ui-autocomplete-input" name="to" value="-- ระบุ ชื่อเมือง หรือสนามบินปลายทาง --" onfocus="if(this.value == '-- ระบุ ชื่อเมือง หรือสนามบินปลายทาง --') this.value=''" onblur="if(this.value == '') this.value='-- ระบุ ชื่อเมือง หรือสนามบินปลายทาง --';changeDepartureCity(this);" aria-required="true" autocomplete="off" style="width: 268px;">-->
										<select name="toAirport" class="form-control" id="toAirport">
											<option value=" ">ทั้งหมด</option>
											<?PHP
											$sql2 = "SELECT * FROM airport";
											$check_log2 = mysqli_query($conn, $sql2);

											while ($data = mysqli_fetch_array($check_log2)) {
												$AirPortID 	= $data['AirPortID'];
												$AirPortName= $data['AirPortName'];
												echo  '<option value="' . $AirPortID . '">' . $AirPortName . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div name="DateA" id="toGo" class="form-group">
										<label for="date">วันที่ออกเดินทาง</label>
										<div class="form-field">
											<i class="icon icon-calendar2"></i>
											<input type="text" name="DateA" id="DateA" class="form-control date" placeholder="Check-in date">
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div name="DateB" id="toBack" class="form-group">
										<label for="dateB">วันที่เดินทางกลับ</label>
										<div class="form-field">
											<i class="icon icon-calendar2"></i>
											<input type="text" name="DateB" id="DateB" class="form-control date" placeholder="Check-out date">
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-2">
								<input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-rooms" class="colorlib-light-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
					<h2 class="pro">โปรชั่นและข้อเสนอที่น่าสนใจ</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 animate-box">
					<div class="owl-carousel owl-carousel2">
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">สุวรรณภูมิ<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency">฿</span>
									<span class="price-room">1,200</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
						</div>
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">อุดร<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency">฿</span>
									<span class="price-room">199</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
						</div>
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">ร้อยเอ็ด<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency">฿</span>
									<span class="price-room">249</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
						</div>
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">หนองบัวลำพู<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency">฿</span>
									<span class="price-room">150</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
						</div>
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">เชียงใหม่<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency">฿</span>
									<span class="price-room">200</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
						</div>
						<div class="item">
							<a href="images/p1.png" class="room image-popup-link" style="background-image: url(images/p1.png);"></a>
							<div class="desc text-center">
								<!--span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span-->
								<h3><a href="rooms-suites.html">หนองคาย<br>ขอนแก่น</a></h3>
								<p class="price">
									<span class="currency"><small>฿</small></span>
									<span class="price-room">299</span>
									<span class="per">/ per seat</span>
								</p>
								<ul>
									<li><i class="icon-check"></i> บริการจากพนักงานเต็มรูปแบบ</li>
									<li><i class="icon-check"></i> อาหารฟรี 1 อย่าง</li>
									<li><i class="icon-check"></i>ราคานี้ไม่รวมภาษีมูลค่าเพิ่ม &amp; services fee</li>
								</ul>
								<p><a class="btn btn-primary btn-book">จองเลย!</a></p>
							</div>
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