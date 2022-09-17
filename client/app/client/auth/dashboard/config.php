<?php
$conn=mysqli_connect("151.106.124.51","u188140722_crm1","Admin@123","u188140722_crm1");

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php
session_start();
include("config.php");
$id=$_SESSION['id'];

if(!isset($_SESSION['id']))
{
  header("location:login.php");
}
?>