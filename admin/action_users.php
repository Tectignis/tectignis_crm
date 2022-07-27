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





<!-- reset password -->
<?php
$d=$_SESSION['id'];
if(isset($_POST["reset"])){
	$Old_password=$_POST["oldpassword"];
	$New_password=$_POST["newpassword"];
    $Confirm_password=$_POST["confirmpassword"];

	$sql = mysqli_query($conn,"SELECT * FROM users WHERE id='$d'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($Old_password,$row['Password']);
	
	$hashpassword=password_hash($New_password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `users` SET `password`='$hashpassword' WHERE id='$d'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='users.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}
  ?>