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

if(isset($_POST['update']))
{
    $category=$_POST['category'];
   
    $sql="UPDATE category SET category='$category'";
    header("location:category.php");
    if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New category has been updeted successfully !');</script>";
   } else {
      echo "<script> alert (' failed !');</script>";
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