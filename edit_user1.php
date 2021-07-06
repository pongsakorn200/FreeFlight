<?php date_default_timezone_set('Asia/Bangkok'); ?> 
<?php include "connectDB/connectDB.php"; 
    session_start(); 
    if(isset($_POST)) { 
        $customerID     =   $_POST['customerID'];
        $title          =   $_POST['title'];
        $Fname          =   $_POST['Fname']; 
        $Lname          =   $_POST['Lname']; 
        $tel            =   $_POST['tel'];
        $email          =   $_POST['email'];
        $username       =   $_POST['username'];
        $password       =   $_POST['password'];
        $PersonalID     =   $_POST['PersonalID'];
        $databaseType   =   '0';

        $sql_update = "UPDATE customers SET databaseType = '".$databaseType."',title = '".$title. "',Fname='".$Fname."',Lname='".$Lname. "',tel = '".$tel."', email = '".$email. "',username = '".$username."',password = '".$password."', PersonalID = '".$PersonalID."' where customerID = '".$customerID."'"; 

        $query_sql = mysqli_query($conn, $sql_update);
        $check_edit = "select * from customers where email ='$email' and password ='$password'";
        $query1 = mysqli_query($conn, $check_edit); 
        if($query_sql){
            while ($data = mysqli_fetch_array($query1)) { 
                echo "
                <!DOCTYPE html> 
                <head>
                    <title>กรุณารอสักครู่</title>
                    <link rel='stylesheet' type='text/css' href='css/style.css'> 
                </head>
                <body> 
                    <div class='boxLogin'> 
                        <div>
                            กรุณารอสักครู่<br /> 
                        </div> 
                    </div> 
                </body> 
                </html>";
                $_SESSION["ses_id"]        =   session_id();//สร้าง Session สําหรับเก็บค่า ID ของ session 
                $_SESSION["ses_userid"]    =   $data["id"];// ส่วไป Sassion สําหรับเก็บค่า ID ของ User 
                $_SESSION["ses_date"]      =   date("d/M/Y");//สร้าง session สําหรับเก็บค่าวันที่ล้อคอน 
                $_SESSION["ses_time"]      =   date("H:i:s");//สร้าง session สําหรับเก็บค่าเวลาตอนล้อคอิน 
                echo "<meta http-equiv='refresh' content='1;URL=index_user.php'>"; 
                //ส่งค่าจากหน้านี้ไปหน้า index user.php
            }
        }
        else{
            $msg = "ไม่สามารถแก้ไขข้อมูลได้ "; 
            echo $msg ;
            echo "<br/><a href='index.php'>กลับ</a>";
        }
    }
?>            