<?php 
if(!isset($_SESSION)){
    session_start();
    if(!isset($_SESSION["ses_id"])) {
        header("Location: index.php"); 
        exit;
    }
}

    $ses_userid     =   $_SESSION["ses_userid"]; 
    $ses_date       =   $_SESSION["ses_date"]; 
    $ses_time       =   $_SESSION["ses_time"];

?>