<?php
  include("../config.php");
  ?>
<?php
//leads post


if(isset($_POST['leadsubmitt'])){
    $sis=$_POST['sid'];
    $uid=$_POST['uid'];
    $Client_Name=$_POST['Client_Name'];
    $Mobile_Number=$_POST['Mobile_Number'];
    $Requirement=$_POST['Requirement'];
   
    $sql=mysqli_query($conn,"INSERT INTO `lead`(`Firm_Name`,`Client_Name`, `Mobile_Number`,`Requirement`,`added_by`) VALUES ('$sis','$Client_Name','$Mobile_Number','$Requirement','$uid')");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:../lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>


