<?php
session_start();
include("config.php");

if(session_destroy()){
    header("location:auth-login-basic.php");
}else{
    header("location:dashboard.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}
?>