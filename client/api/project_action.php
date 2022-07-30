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

<?php
if(isset($_GET['del_id'])){
    $delid = $_GET['del_id'];
    $sql = mysqli_query($conn,"DELETE FROM project WHERE id = '$delid'");
    if($sql){
      header ("location:../project.php"); 
     
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
  }
  
?>

<?php
//project edit fetch
  if(isset($_POST['dnk1'])){
    $id=$_POST['dnk1'];
         $sql=mysqli_query($conn,"select * from project where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group d-flex">
                                    <label for="inputName"  style="width:40%;">Project Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" width="80%" name="updateName" value="<?php echo $row['project_name']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                           <?php } }?>
               
     