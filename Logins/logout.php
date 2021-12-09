<?php
session_start();
// $_SESSION = array();


    if($_SESSION['admin']=="logged_in") {
        session_destroy();
        header('location: ../View/adminlog.php');
    }else {
        session_destroy();
        header('location: login-register.html');
    }
?>
