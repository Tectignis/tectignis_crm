<?php
include("config.php");
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $category=$_POST['category'];
   

    $sql=mysqli_query($conn,"INSERT INTO `client`(`Authorized_Name`, `Email`, `Password`, `Category`) 
    VALUES ('$name','$email','$password','$category')");
    

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:clients.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>