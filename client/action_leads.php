<?php
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from lead where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputName">Client Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="client_name" value="<?php echo $row['Client_Name']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Mobile Number</label>
                                    <input type="tel" name="updateno"  value="<?php echo $row['Mobile_Number']; ?>" class="form-control" id="inputno"
                                        placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Source</label>
                                    <select class="form-control" name="updateSource" style="width: 100%;">
                                        <option selected="selected"><?php echo $row['social_media']; ?></option>
                                        
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Twitter</option>
                    <option>Linkdin</option>
                    <option>Youtube</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Requirement</label>
                                    <input type="text" name="requirement"  value="<?php echo $row['Requirement']; ?>" class="form-control" id="requirement"
                                        placeholder="Enter Requirement">
                                </div>
                            </div>
                            
                          
                        
                        </div>
                        <?php } } ?>
