<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAVE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="icon" type="image/ico" href="../webicon.png" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
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
									<li><a href="index.php">จองตั๋วเครื่องบิน</a></li>
									<li class="active"><a href="promotion.php" onclick="$('html, body').animate({
										scrollTop: $('h2').offset().top }, 'slow');">ข้อมูลโปรโมชั่น</a></li>
									<li><a href="payment.php">การจองของฉัน</a></li>
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
												|
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
			   	<li style="background-image: url(images/blog-2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h1>Good</h1>
				   					<h1>ข้อเสนอพิเศษและโปรโมชั่น</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>ThaiAirWays Promotion</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro1.png" class="room image-popup-link" style="background-image: url(images/pro1.png);"></a>
						<div class="desc ">
							<h3><a href="https://www.thaiairways.com/th_TH/offer/special_offers/wonder-visit-campaign.page?">WONDER VISIT CAMPAIGN </a></h3><br> <h5>สิทธิพิเศษสำหรับลูกค้าการบินไทยเมื่อแสดง Boarding Pass รับคูปองส่วนลดเพื่อซื้อสินค้าที่ทาคาชิมายะ ในประเทศญี่ปุ่น <br><br>วันนี้ - 31 กรกฎาคม 2562</h5>
							<p class="price">
					
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.thaiairways.com/th_TH/rop/index.page">อ่านต่อ</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro2.png" class="room image-popup-link" style="background-image: url(images/pro2.png);"></a>
						<div class="desc">
							<h3><a href="https://www.thaiairways.com/th_TH/offer/special_offers/OW_AUNZ.page?">ONE WAY TO AUSTRALIA AND NEW ZEALAND</a></h3><br> <h5>เที่ยวบินราคาพิเศษสู่ออสเตรเลียและนิวซีแลนด์ <br><br>วันนี้ - 30 มิถุนายน 2562</h5>
							<p class="price">
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.thaiairways.com/th_TH/offer/special_offers/OW_AUNZ.page?">อ่านต่อ</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro3.png" class="room image-popup-link" style="background-image: url(images/pro3.png);"></a>
						<div class="desc ">
							<h3><a href="https://www.thaiairways.com/th_TH/offer/special_offers/AUNZ_GV2.page?">AUSTRALASIA DELIGHT FOR 2</a></h3> <br> <h5>เที่ยวบินราคาพิเศษสู่ออสเตรเลียและนิวซีแลนด์ <br><br>วันนี้ - 30 มิถุนายน 2562</h5>
							<p class="price">
								
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.thaiairways.com/th_TH/offer/special_offers/AUNZ_GV2.page?">อ่านต่อ</a></p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>NOK ARI</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro4.PNG" class="room image-popup-link" style="background-image: url(images/pro4.PNG);"></a>
						<div class="desc ">
							<h3><a href="https://content.nokair.com/th/Booking/Promotion/ChildrenFare.aspx">เที่ยวหน้าร้อนก่อนเปิดเทอม</a></h3><br><h5>สำหรับเด็กที่มีอายุ 2 – 12 ปี รับส่วนลดเพิ่ม 100 บาท จากราคาโปรโมชั่น</h5> <br> <h2>เริ่มต้น</h2>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">550.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://content.nokair.com/th/Booking/Promotion/ChildrenFare.aspx">อ่านต่อ</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro5.PNG" class="room image-popup-link" style="background-image: url(images/pro5.PNG);"></a>
						<div class="desc ">
							<h3><a href="https://content.nokair.com/th/Booking/Promotion/HottestSummer.aspx">หนีร้อนไปนอนทะเล</a></h3><br> <h2>เริ่มต้น</h2>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">650.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://content.nokair.com/th/Booking/Promotion/HottestSummer.aspx">อ่านต่อ</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/pro6.PNG" class="room image-popup-link" style="background-image: url(images/pro6.PNG);"></a>
						<div class="desc ">
							<h3><a href="https://content.nokair.com/th/Booking/Promotion/KTCSpecial.aspx">นกแอร์ร่วมกับบัตรเครดิตเคทีซี</a></h3> <br><h5>มอบส่วนลดพิเศษ</h5> <br> <h2>เริ่มต้น</h2>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">200.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://content.nokair.com/th/Booking/Promotion/KTCSpecial.aspx">อ่านต่อ</a></p>
						</div>
					</div>
				</div>
 <!------------------------------------------------------------------------------------------------------->


				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Lion Air Thai</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
						<div class="desc ">
							<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK) > เชียงใหม่ (CNX)</a></h3><br><h5>ราคารวมเริ่มต้น </h5>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">850.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
						<div class="desc ">
							<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK) > พิษณุโลก (PHS)</a></h3><br><h5>ราคารวมเริ่มต้น </h5>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">590.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
						<div class="desc ">
							<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK) > ขอนแก่น (KKC)</a></h3> <br><h5>ราคารวมเริ่มต้น </h5>
							<p class="price">
								<span class="currency currency-menu">฿</span>
								<span class="price-room price-menu">695.00</span>
							</p>
							<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 room-wrap animate-box">
							<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
							<div class="desc ">
								<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK)  กระบี่ (KBV)</a></h3><br><h5>ราคารวมเริ่มต้น </h5>
								<p class="price">
									<span class="currency currency-menu">฿</span>
									<span class="price-room price-menu">790.00</span>
								</p>
								<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
							</div>
						</div>
						<div class="col-md-4 room-wrap animate-box">
							<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
							<div class="desc ">
								<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK)  อุดรธานี (UTH)</a></h3><br><h5>ราคารวมเริ่มต้น </h5>
								<p class="price">
									<span class="currency currency-menu">฿</span>
									<span class="price-room price-menu">590.00</span>
								</p>
								<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
							</div>
						</div>
						<div class="col-md-4 room-wrap animate-box">
							<a href="images/lion.jpg" class="room image-popup-link" style="background-image: url(images/lion.jpg);"></a>
							<div class="desc ">
								<h3><a href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">กรุงเทพฯ-ดอนเมือง (DMK)  อุบลราชธานี (UBP)</a></h3> <br><h5>ราคารวมเริ่มต้น </h5>
								<p class="price">
									<span class="currency currency-menu">฿</span>
									<span class="price-room price-menu">695.00</span>
								</p>
								<p><a class="btn btn-primary btn-book" href="https://www.lionairthai.com/th/Special-Offer/Latest-Promotion">ดูเพิ่มเติม</a></p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
								<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
								<h2>ARI ASIA/<h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 room-wrap animate-box">
								<a href="images/asa1.PNG" class="room image-popup-link" style="background-image: url(images/asa1.PNG);"></a>
								<div class="desc ">
									<h3><a href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">โปรโมชั่นพิเศษ</a></h3><br><h4>ฟุกุโอกะ</h4> <br> <h2>เริ่มต้น</h2>
									<p class="price">
										<span class="currency currency-menu">฿</span>
										<span class="price-room price-menu">x.xxx</span>
									</p>
									<p><a class="btn btn-primary btn-book" href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">อ่านต่อ</a></p>
								</div>
							</div>
							<div class="col-md-4 room-wrap animate-box">
								<a href="images/asa2.PNG" class="room image-popup-link" style="background-image: url(images/asa2.PNG);"></a>
								<div class="desc ">
									<h3><a href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">โปรโมชั่นพิเศษ</a></h3><br><h4>พัทยา</h4><h2>เริ่มต้น</h2>
									<p class="price">
										<span class="currency currency-menu">฿</span>
										<span class="price-room price-menu">783.00</span>
									</p>
									<p><a class="btn btn-primary btn-book" href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">อ่านต่อ</a></p>
								</div>
							</div>
							<div class="col-md-4 room-wrap animate-box">
								<a href="images/asa3.PNG" class="room image-popup-link" style="background-image: url(images/asa3.PNG);"></a>
								<div class="desc ">
									<h3><a href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">โปรโมชั่นพิเศษ</a></h3> <br><h4>ภูเก็ต</h4> <br> <h2>เริ่มต้น</h2>
									<p class="price">
										<span class="currency currency-menu">฿</span>
										<span class="price-room price-menu">1533.00</span>
									</p>
									<p><a class="btn btn-primary btn-book" href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">อ่านต่อ</a></p>
								</div>
							</div>
							<div class="col-md-4 room-wrap animate-box">
								<a href="images/asa4.PNG" class="room image-popup-link" style="background-image: url(images/asa4.PNG);"></a>
								<div class="desc ">
									<h3><a href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">โปรโมชั่นพิเศษ</a></h3> <br><h4>หาดใหญ่</h4> <br> <h2>เริ่มต้น</h2>
									<p class="price">
										<span class="currency currency-menu">฿</span>
										<span class="price-room price-menu">1130.00</span>
									</p>
									<p><a class="btn btn-primary btn-book" href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">อ่านต่อ</a></p>
								</div>
							</div>
							<div class="col-md-4 room-wrap animate-box">
								<a href="images/asa5.PNG" class="room image-popup-link" style="background-image: url(images/asa5.PNG);"></a>
								<div class="desc ">
									<h3><a href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">โปรโมชั่นพิเศษ</a></h3> <br><h4>ขอนแก่น</h4> <br> <h2>เริ่มต้น</h2>
									<p class="price">
										<span class="currency currency-menu">฿</span>
										<span class="price-room price-menu">733.00</span>
									</p>
									<p><a class="btn btn-primary btn-book" href="https://www.airasia.com/select/th/th/CNX/FUK/2019-05-09/N/1/0/0/O/N/THB/ST">อ่านต่อ</a></p>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
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

