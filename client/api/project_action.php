<?php
session_start();

include("../config.php");
$id=$_SESSION['id'];

?>

<?php
//project post
if(isset($_POST['submi'])){
    $project_name=$_POST['pname'];
   
    $sql=mysqli_query($conn,"INSERT INTO `project`(`project_name`,`client_id`) VALUES ('$project_name','$id')");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:../project.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>