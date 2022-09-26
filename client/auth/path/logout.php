<?php
session_start();
include('../../app/client/auth/dashboard/config.php');
if(session_destroy()){
    header('location:login.php');
}
else{
    echo"<script>alert('There were some problems with your input.')window.location.href='../../app/client/auth/dashboard/index.php';</script>";
}
?>