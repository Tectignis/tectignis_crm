<?php
include("config.php");
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $category=$_POST['category'];
    $status=$_POST['Activited'];
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

<?php
//client delete
if(isset($_GET['delidd'])){
    $id=mysqli_real_escape_string($conn,$_GET['delidd']);
    $sql=mysqli_query($conn,"delete from client where Client_code='$id'");
    if($sql=1){
        header("location:client.php");
    }
    }
?>

<?php
//client status
if(isset($_GET['statusyes'])){
    $staid=$_GET['statusyes'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Deactivated' where Client_Code='$staid'");
    if($query==1){
        header("location:clients.php");
    }
}

if(isset($_GET['statusno'])){
    $staid=$_GET['statusno'];
        $query=mysqli_query($conn,"UPDATE `client` SET `Status`='Activated' where Client_Code='$staid'");
    if($query==1){
        header("location:clients.php");
    }
}
?>