<?php session_start();



include("config.php");

if(isset($_POST['update_profile'])){
    $id=$_POST['id'];
    $name=$_POST['fullName'];  
  $phone=$_POST['phone'];  
  $email=$_POST['email'];
  $address=$_POST['address'];
  $organization_name=$_POST['organization_name'];
  $gst_no=$_POST['gst_no'];
  $pancard=$_POST['pancard'];
  $address=$_POST['address'];
    $cin=$_POST['cin'];
    $support_email=$_POST['support_email'];
    $support_number=$_POST['support_number'];

    $bank_details=$_POST['bank_details'];
     $profile=$_POST['profile'];

  $sql=mysqli_query($conn,"UPDATE `login` SET `name`='$name',`Email`='$email',`profile`='$profile',`organization_name`='$organization_name',`support_email`='$support_email',`support_number`='$support_number',`address`='$address',`gst_no`='$gst_no',`pan_no`='$pancard',`cin_no`='$cin',`bank_details`='$bank_details',`phone_number`='$phone' WHERE id='$id'");
  
	if($sql==1){	
    header("location:admin_account.php");
  	}else{
		echo "<script>alert('Something went wrong');</script>";
	}
}


if(isset($_POST["change_passowrd"])){
	$password=$_POST["password"];
	$newpassword=$_POST["newpassword"];


	$sql = mysqli_query($conn,"SELECT * FROM agent_details WHERE user_id='$d'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
	
	$hashpassword=password_hash($newpassword,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `agent_details` SET `password`='$hashpassword' WHERE user_id='$d'");
      if($query){
        echo "<script>alert('Password Changed Successfully'),window.location='index';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}
?>