<?php
include("config.php");
?>

<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $title=$_POST['title'];
    $role=$_POST['role'];

    $sql=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`, `job_title`, `job_role`) VALUES ('$name','$email','$password','$title','$role')");

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:users.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>