
<!DOCTYPE HTML>
<?php

    $server     =   "localhost:8080 ";
    $user       =   "root";
    $password   =   "";
    $db_name    =   "freeflight";
    $conn       =   new mysqli($server, $user, $password, $db_name);

    if($conn->connect_errno){
        printf("ไม่สามารถเชื่อมต่อฐานข้อมูลได้",$conn->connect_error);
        exit();
    }

    mysqli_set_charset($conn, 'utf8');

?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FREE FLIGHT ADMIN</title>
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
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

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <style>
    #delete{
        color: red;
    }
    #added{
        color: green;
    }
    body{
        background-color: whitesmoke;
    }
    .top-menu{
        font-family: 'Mitr', sans-serif;
        background-color: midnightblue;
      }
    .colorlib-nav #colorlib-logo a{
        color: mintcream;
      }
    .w3-row,.tab,h2{
        font-family: 'Mitr', sans-serif;
        font-size: 1.5em;
    }
    .marg{
        margin: 0 5%;
    }
    th,td{
        font-size: 0.8em;
    }
    .colorlib-nav .top-menu {
    padding: 40px 30px; }
    @media screen and (max-width: 768px) {
        .colorlib-nav .top-menu {
            padding: 28px 1em; 
        } 
    }
    .colorlib-nav #colorlib-logo {
        font-size: 24px;
        margin: 0;
        padding: 0;
        text-transform: uppercase;
        font-weight: 600; 
    }
    .colorlib-nav #colorlib-logo a {
        position: relative;
        color: rgb(255, 255, 255); 
    }
    .colorlib-nav #colorlib-logo a i {
        position: absolute;
        top: 4px;
        left: 0;
        color: #4586FF; 
    }
    .colorlib-nav ul {
        padding: 0;
        margin: 8px 0 0 0; 
    }
    .colorlib-nav ul li {
        padding: 0;
        margin: 0;
        list-style: none;
        display: inline;
        font-weight: 400; 
    }
    .colorlib-nav ul li a {
        position: relative;
        font-size: 15px;
        padding: 30px 12px;
        color: rgb(255, 255, 255);
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s; 
    }
    .colorlib-nav ul li a:hover {
        color: rgb(174, 95, 248); 
    }
    a {
        color: #4586FF;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s; 
    }   
    a:hover, a:active, a:focus {
        color: #4586FF;
        outline: none;
        text-decoration: none; 
    }
    </style>
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<div id="colorlib-logo"><a href="admin.php">FREE FLIGHT ADMIN</a></div>
                        </div>
						<div class="col-xs-8 text-right menu-1" style="text-align: right;">
                                <ul>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
					</div>
				</div>
			</div>
        </nav>
    <div class="marg">
        <div class="w3-container">
            <label></label>
                <div class="w3-row">
                  <a href="javascript:void(0)" onclick="openCity(event, 'flight');">
                    <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">เที่ยวบิน</div>
                  </a>
                  <a href="javascript:void(0)" onclick="openCity(event, 'promotion');">
                    <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">โปรโมชั่น</div>
                  </a>
                  <a href="javascript:void(0)" onclick="openCity(event, 'customer');">
                    <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">ลูกค้า</div>
                  </a>
                  <a href="javascript:void(0)" onclick="openCity(event, 'airline');">
                    <div class="w3-quarter tablink w3-bottombar w3-hover-light-grey w3-padding">สายการบิน</div>
                  </a>
                </div>
                <div id="flight" class="w3-container tab" style="display:none">
                <label></label>
                  <h2>เที่ยวบิน</h2>
                  <?php   
                $stmt = $pdo->prepare("SELECT flightID,AirPortID,ToAirPortID,flightTime,Price,AirlineID
                                        FROM flight
                                        ORDER BY flightID");
                $stmt->execute();
                ?>
                        <table class="table table-borderless table-hover" >
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">หมายเลขเที่ยวบิน</th>
                                    <th scope="col">หมายเลขสนามบินต้นทาง</th>
                                    <th scope="col">หมายเลขสนามบินปลายทาง</th>
                                    <th scope="col">เวลาบิน</th>
                                    <th scope="col">ราคา</th>
                                    <th scope="col">หมายเลขสายการบิน</th>
                                    <th scope="col">แก้ไข</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = $stmt->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['flightID'] . "</td>";
                                    echo "<td>" . $row['AirPortID'] . "</td>";
                                    echo "<td>" . $row['ToAirPortID'] . "</td>";
                                    echo "<td>" . $row['flightTime'] . "</td>";
                                    echo "<td>" . $row['Price'] . "</td>";
                                    echo "<td>" . $row['AirlineID'] . "</td>";
                                    echo "<td><a id='delete' href='#' onclick='confirmDelete(" . $row ['flightID'] .")'>ลบ</a>&nbsp;&nbsp;";
                                    echo "<a id='added' href='#' onclick='EditF(" . $row ['flightID'] .")'>แก้ไข</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table><label></label><hr>
                  <form action="additem-Ac.php" method="post">
                  <h2>เพิ่มเที่ยวบิน</h2>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">หมายเลขเที่ยวบิน :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">หมายเลขสนามบิน :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label  class="col-3 col-form-label">เวลาบิน :</label> 
                          <div class="col-9">
                            <input id="text2" name="iquan" type="text" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">ราคา :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label  class="col-3 col-form-label">หมายเลขสายการบิน :</label> 
                          <div class="col-9">
                            <input id="text2" name="iquan" type="text" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-3 col-1">
                            <button name="submit" type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
                      </form> 
                </div>
              
                <div id="promotion" class="w3-container tab" style="display:none">
                <label></label>
                  <h2>โปรโมชั่น</h2>
                  <?php   
                    $stmt = $pdo->prepare("SELECT promotionID,promotionName,price
                                        FROM promotion
                                        ORDER BY promotionID");
                $stmt->execute();
                ?>
                  <table class="table table-borderless table-hover" >
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">รหัสโปรโมชั่น</th>
                                    <th scope="col">ชื่อโปรโมชั่น</th>
                                    <th scope="col">ส่วนลด(เปอร์เซ็น)</th>
                                    <th scope="col">แก้ไข</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = $stmt->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['promotionID'] . "</td>";
                                    echo "<td>" . $row['promotionName'] . "</td>";
                                    echo "<td>" . $row['price'] . "</td>";
                                    echo "<td><a id='delete' href='#' onclick='confirmDelete(" . $row ['promotionID'] .")'>ลบ</a>&nbsp;&nbsp;";
                                    echo "<a id='added' href='#' onclick='EditP(" . $row ['promotionID'] .")'>แก้ไข</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                        <label></label><hr>
                  <form action="additem-Ac.php" method="post">
                  <h2>เพิ่มโปรโมชั่น</h2>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">รหัสโปรโมชั่น :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">ชื่อ :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label  class="col-3 col-form-label">ส่วนลด :</label> 
                          <div class="col-9">
                            <input id="text2" name="iquan" type="text" required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-3 col-1">
                            <button name="submit" type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
                      </form> 
                </div>
              
                <div id="customer" class="w3-container tab" style="display:none">
                <label></label>
                  <h2>ข้อมูลลูกค้า</h2>
                  <?php   
                $stmt = $pdo->prepare("SELECT customerID,title,Fname,Lname,tel,email,username,password,PersonalID
                                        FROM customer
                                        ORDER BY customerID");
                $stmt->execute();
                ?>
                        <table class="table table-borderless table-hover" >
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">หมายเลขลูกค้า</th>
                                    <th scope="col">คำนำหน้า</th>
                                    <th scope="col">ชื่อ</th>
                                    <th scope="col">นามสกุล</th>
                                    <th scope="col">เบอร์โทรศัพท์</th>
                                    <th scope="col">อีเมล</th>
                                    <th scope="col">username</th>
                                    <th scope="col">password</th>
                                    <th scope="col">SSN</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = $stmt->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['customerID'] . "</td>";
                                    echo "<td>" . $row['title'] . "</td>";
                                    echo "<td>" . $row['Fname'] . "</td>";
                                    echo "<td>" . $row['Lname'] . "</td>";
                                    echo "<td>" . $row['tel'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['password'] . "</td>";
                                    echo "<td>" . $row['PersonalID'] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>

            <div id="airline" class="w3-container tab" style="display:none">
                <label></label>
                  <h2>ข้อมูลสายการบิน</h2>
                  <?php   
                    $stmt = $pdo->prepare("SELECT AirlineID,AirlineName
                                            FROM airline
                                            ORDER BY AirlineID");
                    $stmt->execute();
                  ?>
                  <table class="table table-borderless table-hover" >
                            <thead class="table-success">
                                <tr>
                                <th scope="col">หมายเลขสายการบิน</th>
                                    <th scope="col">ชื่อสายการบิน</th>
                                    <th scope="col">แก้ไข</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = $stmt->fetch()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['AirlineID'] . "</td>";
                                    echo "<td>" . $row['AirlineName'] . "</td>";
                                    echo "<td><a id='delete' href='#' onclick='confirmDelete(" . $row ['AirlineID'] .")'>ลบ</a>&nbsp;&nbsp;";
                                    echo "<a id='added' href='#' onclick='EditA(" . $row ['AirlineID'] .")'>แก้ไข</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                        <label></label><hr>
                  <form action="additem-Ac.php" method="post">
                  <h2>เพิ่มสายการบิน</h2>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">หมายเลขสายการบิน :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="text1" class="col-3 col-form-label">ชื่อสายการบิน :</label> 
                          <div class="col-9">
                            <input id="text1" name="iname" type="text"  required class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-3 col-1">
                            <button name="submit" type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
                      </form> 
                </div>   
            </div>
        </div>
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
    <script>
    function EditF(flightID) { 
        var ans = prompt("กรอกราคาที่ต้องการแก้ไข ของเที่ยวบิน"+ flightID);
        if (ans==true){
            document.location = "delete.php?flightID=" + flightID;
        }
    }
    </script>
    <script>
    function EditA(AirlineID) { 
        var ans = prompt("กรอกชื่อที่ต้องการแก้ไข ของสายการบิน"+ AirlineID);
        if (ans==true){
            document.location = "delete.php?AirlineID=" + AirlineID;
        }
    }
    </script>
    <script>
    function EditP(promotionID) { 
        var ans = prompt("กรอกส่วนลดที่ต้องการแก้ไข ของโปรโมชั่น"+ promotionID);
        if (ans==true){
            document.location = "delete.php?promotionID=" + promotionID;
        }
    }
    </script>
    <script>
    function confirmDelete(promotionID) { 
        var ans = confirm("ต้องการลบโปรโมชั่น" + promotionID + "หรือไม่");
        if (ans==true){
            document.location = "delete.php?p_id=" + promotionID;
        }
    }
    </script>
    <script>
        function openCity(evt, cityName) {
          var i, x, tablinks;
          x = document.getElementsByClassName("tab");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < x.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.firstElementChild.className += " w3-border-red";
        }
    </script>
	</body>
</html>

