<?php
include("config.php");
?>
<?php
if(isset($_POST['submitt'])){
    $roles=$_POST['roles'];
   
    $sql=mysqli_query($conn,"INSERT INTO `roles`(`roles`) VALUES ('$roles')");
    if($sql){
        echo "<script>alert('Roles Added Successfully');</script>";
        echo "<script>window.location.href='roles.php';</script>";
    }
    else{
        echo "<script>alert('Roles Not Added');</script>";
        echo "<script>window.location.href='roles.php';</script>";
    }
    

   
}
?>