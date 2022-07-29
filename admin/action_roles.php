<?php
include("config.php");
?>
<?php
if(isset($_POST['submitt'])){
    $roles=$_POST['roles'];
   
    $sql=mysqli_query($conn,"INSERT INTO `roles`(`roles`) VALUES ('$roles')");
    if($sql){
        echo "<script>alert('Roles Added Successfully');</script>";
        echo "<script>window.location.href='roles.php';</script>";
    }
    else{
        echo "<script>alert('Roles Not Added');</script>";
        echo "<script>window.location.href='roles.php';</script>";
    }
    

   
}


if(isset($_GET['del_id'])){
    $delid = $_GET['del_id'];
    $sql = mysqli_query($conn,"DELETE FROM roles WHERE id = '$delid'");
    if($sql){
      header ("location:roles.php"); 
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
  }
  

?>
<?php
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from roles where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputRoles">Roles</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateRoles" value="<?php echo $row['roles']; ?>" class="form-control" id="inputRoles"
                                        placeholder="Enter Roles">
                                </div>
                            </div>
                           
                        </div>
                        <?php } } ?>