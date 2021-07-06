<?php include "connectDB/connectDB.php"; ?>
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
<script>
  function showMajor(str) {
    if (str=="") {
      document.getElementById("txtHint").innerHTML="";
      return;
    } 

    if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else { // code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
              if (this.readyState==4 && this.status==200) {
               console.log(this.responseText);
               document.getElementById("txtHint").innerHTML=this.responseText;

             }
           }
           xmlhttp.open("GET","card.php?q="+str,true);
           xmlhttp.send();

         }
       </script>
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
									<li><a href="promotion.php" onclick="$('html, body').animate({
										scrollTop: $('h2').offset().top }, 'slow');">ข้อมูลโปรโมชั่น</a></li>
									<li class="active" ><a href="showflight.php">การจองของฉัน</a></li>
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
              <li style="background-image: url(images/img_bg_5.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                      <div class="slider-text-inner slider-text-inner2 text-center">
                        <div id="colorlib-rooms" class="colorlib-light-grey">
                          <div id="form1" class="t-center">
                            <form name="form1" class="form" method="post" action="register1.php" enctype="multipart/form-data">
                              <h3 id="form1">ชำระเงิน / Payment</h3>
                              <hr>
                              <center>

                                <table>
                                  <tr>
                                    <td class='t-right'>รูปแบบการชำระเงิน :</td>
                                    <td>
                                      <div id='title' class='t-left' required>
                                        <select id="cmbMake" name="Make" onchange="showMajor(this.value),console.log(this.value)">
                                          <option value="">Select</option>
                                          <option value="0">counterService</option>
                                          <option value="1">paypal</option>
                                          <option value="2">credit</option>
                                          <option value="2">master card</option>
                                        </select>
                                      </div>
                                    </td>
                                  </tr>
                                  
                                     
                                   
                                </table>
                                   <div id="txtHint"></div>
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