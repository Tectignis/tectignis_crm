<?php
session_start();
include("config.php");
?>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $category=$_POST['category'];
    $status=$_POST['Activited'];
    $image=$_FILES['image']['name'];
    $image_tmp=$_FILES['image']['tmp_name'];
    $loc="dist/img/".$image;
    move_uploaded_file($image_tmp,$loc);

    
   

    $sql=mysqli_query($conn,"INSERT INTO `client`(`Authorized_Name`, `Email`, `Password`, `Category`,`image`) 
    VALUES ('$name','$email','$password','$category','$image')");
    

    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:clients.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>

<?php
//client delete
    if(isset($_GET['del_id'])){
        $delid = $_GET['del_id'];
        $sql = mysqli_query($conn,"DELETE FROM client WHERE Client_Code = '$delid'");
        if($sql){
          header ("location:clients.php"); 
         
        }
        else{ echo "<script>alert('Failed to Delete')</script>"; }
      }
?>

<?php
//client edit fetch
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select category.*,client.* from category inner join client on category.id=client.category where Client_Code='".$id."'");
              
           $row=mysqli_fetch_array($sql)
           ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateName" value="<?php echo $row['Authorized_Name']; ?>" class="form-control" id="inputName"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="inputEmail">Email</label>
                                    <input type="email" name="updateEmail"  value="<?php echo $row['Email']; ?>" class="form-control" id="inputEmail"
                                        placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Category</label>
                                    <select class="form-control" value="<?php echo $row['category']; ?>" name="category" id="inputcategory">
                                        <option selected value="<?php echo $row['category']; ?>"><?php echo $row['category']; ?></option>
    
                                        <?php 
                   $query=mysqli_query($conn,"select * from category");
                    while($sql=mysqli_fetch_array($query))
                    {
                      ?>

                         <option value="<?php echo $sql['id']; ?>"> <?php echo $sql['category']; ?></option>
                         <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6" style="display: flex;">
                            <a href="clinet_details.php" target="_blank">
               <?php
                  if($row['image']==""){
                 echo '<img src="../admin/dist/img/avatar1.jpeg" alt="User Image" class="img-fluid rounded-circle  card-avatar" style="width:100px;height:100px;">';
                 }else{

                ?>
                <img alt="user-image" class="img-fluid rounded-circle card-avatar" src="../admin/dist/img/<?php echo $row['image'] ?>" style="height:100px;width:100px;">
                <?php } ?>
                </a>
                             <div class="form-group">
                                    <label for="inputPass">Image</label>
                                    <input type="file" name="image" class="form-control" id="inputimg"
                                        placeholder="image">
                                </div>
                            </div>
                        
                        </div>
                        <?php  } ?>

<?php
$d=$_SESSION['aid'];
if(isset($_POST["submi"])){
	$password=$_POST["resetPass"];
    $Confirm_password=$_POST["confirmResetPass"];

	$sql = mysqli_query($conn,"SELECT * FROM client WHERE Client_Code='$d'");
		$row=mysqli_fetch_assoc($sql); 

	
	$hashpassword=password_hash($password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `client` SET `password`='$hashpassword' WHERE Client_Code='$d'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully')</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}
?>                        