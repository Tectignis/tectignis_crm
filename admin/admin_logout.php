<?php
include("config.php");
session_start();
$dnk=session_destroy();
if($dnk){
    header("location:auth-login-basic.php");
}else{
    header("location:dashboard.php");
    echo"<script>alert('There were some problems with your input.');</script>";
}
?>