<?php session_start();



include("config.php");

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $api_key=$_POST['api_key'];  
  $secret_key=$_POST['secret_key'];  

  $sql=mysqli_query($conn,"UPDATE `payment_method` SET `api_key`='$api_key',`secret_key`='$secret_key' WHERE id='$id'");

  if($sql==1){	
    header("location:payment_method.php");
  	}else{
		echo "<script>alert('Something went wrong');</script>";
	}
}
?>