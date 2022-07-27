<?php
include("config.php");
?>

<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $title=$_POST['title'];
    $role=$_POST['role'];
    $status="Activated";
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $loc="dist/img/".$image;
    move_uploaded_file($image_tmp,$loc);

    $sql=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`, `job_title`, `job_role`,`image`,`status`) VALUES ('$name','$email','$password','$title','$role','$image','$status')");

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:users.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}

if(isset($_GET['del_id'])){
  $delid = $_GET['del_id'];
  $sql = mysqli_query($conn,"DELETE FROM users WHERE id = '$delid'");
  if($sql){
    header ("location:users.php"); 
   
  }
  else{ echo "<script>alert('Failed to Delete')</script>"; }
}


// if(isset($_POST['update'])){
//     // $id=$_POST['manualid'];
//     // $emp_id=$_POST['manualemplid'];
//     $updateName = $_POST['updateName'];
//     $updateEmail = $_POST['updateEmail'];
//     $updateTitle = $_POST['updateTitle'];
//     $updateRole = $_POST['updateRole'];
   
//     $sql="UPDATE `users` SET `name`='$updateName',`email`='$updateEmail',`job_title`='$updateTitle',`job_role`='$updateRole' WHERE id='$id
//     .'";
//     if (mysqli_query($conn, $sql)){
//       header("location:users.php");
//    } else {
//       echo "<script> alert ('connection failed !');window.location.href='manual-Attendance.php'</script>";
//    }
//   }


?>


<?php
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from users where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateName" value="<?php echo $row['name']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="updateEmail"  value="<?php echo $row['email']; ?>" class="form-control" id="inputEmail"
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
                                    <label for="inputEmail">Job Title</label>
                                    <input type="text" name="updateTitle"  value="<?php echo $row['job_title']; ?>" class="form-control" id="inputtitle"
                                        placeholder="Enter title">
                                </div>
                            </div>
                            <div class="col-6" style="display: flex;">
                            <a href="users_details.php" target="_blank">
               <?php
                  if($row['image']==""){
                 echo '<img src="dist/img/avatar1.jpeg" alt="User Image" class="img-fluid rounded-circle  card-avatar" style="width:100px;height:100px;">';
                 }else{

                ?>
                <img alt="user-image" class="img-fluid rounded-circle card-avatar" src="dist/img/<?php echo $row['image'] ?>" style="height:100px;width:100px;">
                <?php } ?>
                </a>
                             <div class="form-group">
                                    <label for="inputPass">Image</label>
                                    <input type="file" name="image" class="form-control" id="inputimg"
                                        placeholder="image">
                                </div>
                            </div>
                        
                        </div>
                        <?php } } ?>
