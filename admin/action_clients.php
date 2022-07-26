<?php
include("config.php");
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $category=$_POST['category'];
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $loc="dist/img/".$image;
    move_uploaded_file($image_tmp,$loc);

    
   

    $sql=mysqli_query($conn,"INSERT INTO `client`(`Authorized_Name`, `Email`, `Password`, `Category`,`image`) 
    VALUES ('$name','$email','$password','$category','$image')");
    

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:clients.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>