<?php
include("config.php");
?>
<?php
if(isset($_POST['submitt'])){
    $category=$_POST['category'];
   
    $sql=mysqli_query($conn,"INSERT INTO `category`(`category`) VALUES ('$category')");
    if($sql){
        echo "<script>alert('category Added Successfully');</script>";
        echo "<script>window.location.href='category.php';</script>";
    }
    else{
        echo "<script>alert('category Not Added');</script>";
        echo "<script>window.location.href='category.php';</script>";
    }
    

   
}

if(isset($_GET['del_id'])){
    $delid = $_GET['del_id'];
    $sql = mysqli_query($conn,"DELETE FROM category WHERE id = '$delid'");
    if($sql){
      header ("location:category.php"); 
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
  }
  

?>