<?php
//ticketform

include("../config.php");
session_start();

if(isset($_POST['ticket'])){
    
    $id=$_SESSION['id'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $status='Open';
    date_default_timezone_set('Asia/Kolkata');
      $date=date('Y-m-d H:i:s');

    $sql=mysqli_query($conn,"INSERT INTO `ticket`(`Subject`, `Description`,`Client_Code`,`date`,`status`) VALUES ('$subject','$description' ,'$id','$date','$status')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');window.location='../tickettable.php'</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}
?>
