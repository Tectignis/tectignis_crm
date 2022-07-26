<?php 
include("config.php");

?>

<?php
//leads post


if(isset($_POST['submitt'])){
    
    $Client_Name=$_POST['Client_Name'];
    $Mobile_Number=$_POST['Mobile_Number'];
    $Requirement=$_POST['Requirement'];
   
    $sql=mysqli_query($conn,"INSERT INTO `lead`(`Client_Name`, `Mobile_Number`,`Requirement`) VALUES ('$Client_Name','$Mobile_Number','$Requirement')");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>


<?php
//lead delete
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from lead where id='$id'");
    if($sql=1){
        header("location:../lead.php");
    }
    }
?>