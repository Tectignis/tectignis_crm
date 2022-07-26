<?php
include("config.php");
session_start();
$uid=$_SESSION['id'];
mysqli_query($conn,"update lead set status=1 where Firm_Name=$uid");
?>