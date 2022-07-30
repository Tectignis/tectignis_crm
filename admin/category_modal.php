<?php
include("config.php");
?>
<?php
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from category where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputCategory">Category</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateCategory" value="<?php echo $row['category']; ?>" class="form-control" id="inputRoles"
                                        placeholder="Enter Category">
                                </div>
                            </div>
                           
                        </div>
                        <?php } } ?>


                        

