<?php
include("config.php");
?>
<?php
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from roles where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                        <div class="col-4">
                            <label for="inputName">Role :</label>
                             </div>
                             <div class="col-8">
                                    
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updaterole" value="<?php echo $row['roles']; ?>" class="form-control" id="inputRoles"
                                        placeholder="Enter role">
                                </div>
                            
                           
                        </div>
                        <?php } } ?>


                        
                        