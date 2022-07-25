<?php
include("../config.php");

?>

<?php
//client delete
if(isset($_GET['delidd'])){
    $id=mysqli_real_escape_string($conn,$_GET['delidd']);
    $sql=mysqli_query($conn,"delete from client where Client_code='$id'");
    if($sql=1){
        header("location:../client.php");
    }
    }
?>