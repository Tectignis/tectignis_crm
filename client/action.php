<?php
include("config.php");
session_start();
?>

<?php
//clients post
if(isset($_POST['submit'])){
    $Firm_Name=$_POST['Fname'];
    $Authorized_Name=$_POST['Aname'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
    $status="Activated";
   
    $sql=mysqli_query($conn,"insert into client( `Firm_Name`, `Authorized_Name`, `Email`, `Mobile_Number`, `Category`, `Status`) values('$Firm_Name','$Authorized_Name','$Email','$Mobile_Number','$Category','$status')");

    if($sql==1){
        echo '<script>alert("data successfully submitted");</script>';
        header("location:client.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>



<?php
//client delete
if(isset($_GET['delidd'])){
    $id=mysqli_real_escape_string($conn,$_GET['delidd']);
    $sql=mysqli_query($conn,"delete from client where Client_code='$id'");
    if($sql=1){
        header("location:client.php");
    }
    }
?>



<?php
//client status
if(isset($_GET['statusyes'])){
    $staid=$_GET['statusyes'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Deactivated' where Client_Code='$staid'");
    if($query==1){
        header("location:client.php");
    }
}

if(isset($_GET['statusno'])){
    $staid=$_GET['statusno'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Activated' where Client_Code='$staid'");
    if($query==1){
        header("location:client.php");
    }
}
?>



