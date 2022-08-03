<?php
session_start();
include("config.php");



if(isset($_POST['update'])){
    $id=$_POST['dnk'];
    $nature=$_POST['nature'];
     $remark=$_POST['remark'];
    $remainder_date=$_POST['remainder_date'];
    $sitevisit_date=$_POST['sitevisit_date'];
    $id=$_POST['id'];
   
   

    $sql=mysqli_query($conn,"UPDATE `lead` SET `nature`='$nature',`remainder_date`='$remainder_date',`sitevisit_date`='$sitevisit_date' WHERE id='$id'");
     $sql1=mysqli_query($conn,"INSERT INTO `remarks`(`remark`,`lead_id`) VALUES ('$remark','$id')");
 
    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}

                        ?>
                    
