<?php
include("config.php");
?>
<?php
$d=$_SESSION['aid'];
if(isset($_POST["submit"])){
	$Old_password=$_POST["oldpassword"];
	$New_password=$_POST["newpassword"];
    $Confirm_password=$_POST["confirmpassword"];

	$sql = mysqli_query($conn,"SELECT * FROM login WHERE Id='$d'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($Old_password,$row['Password']);
	
	$hashpassword=password_hash($New_password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `login` SET `password`='$hashpassword' WHERE Id='$d'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='adminlogin.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}
?>

<!-- forgotpassword.php -->
<?php
if(isset($_POST['submit'])){
$Email=$_POST['email'];

$sql=mysqli_query($conn,"select * from login where Email='$Email'");
$row=mysqli_fetch_array($sql);

if($row>0){
    $Email=$row['Email'];
        header("location:password.php?email=$Email");
    }else{
        echo "<script>alert('Invalid Email Id');</script>";
    }
}

?>

<!-- password.php -->
<?php
if(isset($_POST['submit'])){
$New_password=$_POST['newpassword'];
$Confirm_password=$_POST['confirmpassword'];
$Email=$_GET['email'];

if   ($New_password==$Confirm_password){
  $hasPassword=password_hash($New_password,PASSWORD_BCRYPT);
  $sql=mysqli_query($conn,"UPDATE `login` SET `Password`='$hasPassword' WHERE Email='$Email'");
   if($sql==1){
        header("location:adminlogin.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
  }
else{
  echo'<script>alert("password does not match");</script>';
}
}


?>