<?php
$keysql=mysqli_query($conn,"select * from payment_method");
$fetchsql=mysqli_fetch_array($keysql);

$keyId= $fetchsql['api_key'];
$keySecret= $fetchsql['secret_key'];
$displayCurrency= 'INR';

// Create the Razorpay Order
// error_reporting(E_All);
// ini_set('display_errors', 1);
//rzp_live_2liZeeAflRFo1O = keyId
//rv2s004ytMddMOBOIVnnsBuB = kaysecret
?>