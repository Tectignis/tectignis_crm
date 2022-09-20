<?php
include("config.php");
if(isset($_POST['chec'])){
    foreach($_POST['chec'] as $updateid){
        $sql=mysqli_query($conn,"UPDATE `todo` SET `status`='close' where todo='$updateid'");
    }
}

if(isset($_POST['chec1'])){
    foreach($_POST['chec1'] as $updateid){
        $sql=mysqli_query($conn,"UPDATE `todo` SET `status`='open' where todo='$updateid'");
    }
}
?>