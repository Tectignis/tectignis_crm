<?php
//ticketform

include("../config.php");
session_start();

if(isset($_POST['ticket'])){
    
    $id=$_SESSION['id'];
    $ticket_no=$_POST['ticket_no'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];

    $sql=mysqli_query($conn,"INSERT INTO `ticket`(`ticket_no`, `Subject`, `Description`,`Client_Code`) VALUES ('$ticket_no','$subject','$description' ,'$id')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');window.location='../tickettable.php'</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}
?>
