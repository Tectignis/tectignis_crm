<?php
include("config.php");
?>
<?php
if(isset($_POST['submitt'])){
  $chkl2="";
  $chkl4="";
    $roles=$_POST['roles'];
    $permission = $_POST['permissions'];
    foreach($permission as $chkl1){$chkl2.= $chkl1.",";}
    $module = $_POST['module'];
    foreach($module as $chkl3){$chkl4.= $chkl3.",";}

    $sql=mysqli_query($conn,"INSERT INTO `roles`(`roles`,`permission`,`module`) VALUES ('$roles','$chkl2',' $chkl4')");
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


                        
<?php
  if(isset($_POST['dnk2'])){
    $id=$_POST['dnk2'];
         $sql=mysqli_query($conn,"select * from roles where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-4">
                            <label for="inputName">Name :</label>
                             </div>
                             <div class="col-8">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updaterole" value="<?php echo $row['roles']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter roles">
                               
                            </div>
                       
                        
                        </div>
                        <?php } } ?>
