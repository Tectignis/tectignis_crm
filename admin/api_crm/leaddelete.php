<?php
include("../config.php");

?>

<?php
//lead delete
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from lead where id='$id'");
    if($sql=1){
        header("location:../lead.php");
    }
    }
?>