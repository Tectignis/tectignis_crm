<?php
include("config.php");
if(isset($_POST['chec'])){
    foreach($_POST['chec'] as $updateid){
        $sql=mysqli_query($conn,"UPDATE `todo` SET `status`='close' where todo='$updateid'");
    }
    if($sql==1){
        echo 'update';
     }
     else{
        echo"connection failed!";
     }
}
?>