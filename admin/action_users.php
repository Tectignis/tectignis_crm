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
    $status="Activated";
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $loc="dist/img/".$image;
    move_uploaded_file($image_tmp,$loc);

    $sql=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`, `job_title`, `job_role`,`image`,`status`) VALUES ('$name','$email','$password','$title','$role','$image','$status')");

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:users.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}

if(isset($_GET['del_id'])){
  $del_id = $_GET['del_id'];
  $sql = mysqli_query($conn,"DELETE FROM users WHERE id = '$del_id'");
  if($sql){
    header ("location:users.php"); 
  }
  else{ echo "<script>alert('Failed to Delete')</script>"; }
}


if(isset($_POST['update'])){
    // $id=$_POST['manualid'];
    // $emp_id=$_POST['manualemplid'];
    $updateName = $_POST['updateName'];
    $updateEmail = $_POST['updateEmail'];
    $updateTitle = $_POST['updateTitle'];
    $updateRole = $_POST['updateRole'];
   
    $sql="UPDATE `users` SET `name`='$updateName',`email`='$updateEmail',`job_title`='$updateTitle',`job_role`='$updateRole' WHERE id='$id
    .'";
    if (mysqli_query($conn, $sql)){
      header("location:users.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='manual-Attendance.php'</script>";
   }
  }


?>