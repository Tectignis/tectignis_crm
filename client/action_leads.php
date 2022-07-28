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
                                        placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Category</label>
                                    <select class="form-control" name="updateRole" style="width: 100%;">
                                        <option selected="selected"><?php echo $row['job_role']; ?></option>
                                        <option>Employee</option>
                                        <option>Intern</option>
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
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Company</label>
                                    <input type="text" name="updateCompany"  value="<?php echo $row['company']; ?>" class="form-control" id="inputCompany"
                                        placeholder="Enter Company">
                                </div>
                        
                        </div>
                        <?php } } ?>
