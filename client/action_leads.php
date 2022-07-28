<?php
session_start();
include("config.php");
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from lead where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputName">Client Name : </label>
                                    <?php echo $row['Client_Name']; ?>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                  

                                        
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Mobile Number : </label>
                                    <?php echo $row['Mobile_Number']; ?>
                                   
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Source :  </label>
                                <?php echo $row['social_media']; ?>
                               


                                    <!-- <select class="form-control" name="updateSource" style="width: 100%;">
                                        <option selected="selected"><?php echo $row['social_media']; ?></option readonly> -->
                                        
                    <!-- <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Twitter</option>
                    <option>Linkdin</option>
                    <option>Youtube</option> -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Requirement : </label>
                                    <?php echo $row['Requirement']; ?>
                                  
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                <label>Nature</label>
                                    <select class="form-control" name="updateSource" style="width: 100%;">
                                        <option selected="selected" disabled>select</option>
                                        
                    <option>Hot</option>
                    <option>Cold</option>
                    <option>Warm</option>
                    <option>Deal Closed</option>
                    <option>Booked</option>
                    <option>Site Visit</option>
                   
                                    </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Remark : </label></br>
                                    <textarea name="remark"></textarea>
                                  
                                </div>
                                </div>

                                <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                <input type="checkbox" id="Remainder" name="remainder" value="remainder">
                            <label for="Remainder">Remainder  </label>
  
           
           </div>
          
  </div>
                        
  
                          
                        
                        </div>
                        <?php } } ?>

                        <?php


// if(isset($_POST['update'])){
//     $updateSource=$_POST['updateSource'];
//     $remark=$_POST['remark'];
//     $id=$_POST['id'];




 
  

//     $sql=mysqli_query($conn,"INSERT INTO `lead`(`social_media`,`email`,`password`, `job_title`, `job_role`,`image`,`status`) VALUES ('$name','$email','$password','$title','$role','$image','$status')");

//     if($sql==1){
//         echo "Saved!", "data successfully submitted", "success";
//         header("location:users.php");
//     }else {
//         echo '<script>alert("oops...somthing went wrong");</script>';
//     }
// }

//                         ?>
