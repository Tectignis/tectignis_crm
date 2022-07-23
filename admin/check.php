<?php include("config.php"); 
 ?>

<?php 
//Modal Code Edit
if(isset($_POST['dnk'])){
  $query=mysqli_query($conn,"select * from client where Client_Code='".$_POST['dnk']."'");
  $row=mysqli_fetch_array($query);
  echo '  <div class="row">
  <div class="col-md-12">
                <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="Client_Code"> Client Code <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="clientcode" value="'.$row['Client_Code'].'"> 
          </div>

          <div class="form-group">
          <label for="Firm_Name"> Firm Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="Fname" value="'.$row['Firm_Name'].'">
          </div>

          <div class="form-group">
          <label for="Authorized_Name"> Authorized Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="Aname" value="'.$row['Authorized_Name'].'">
          </div>

          <div class="form-group">
          <label for="Email"> Email <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="email" value="'.$row['Email'].'">
          </div>

          <div class="form-group">
          <label for="Mobile_Number"> Mobile Number <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="number" value="'.$row['Mobile_Number'].'">
          </div>

          <div class="form-group">
          <label for="Category">Category <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="category" value="'.$row['Category'].'">
          </div>

          <div class="form-group">
          <label for="status">status <span class="text-danger">*</span></label>
          <select name="status" class="form-control" id="status" name="status" value="'.$row['Status'].'">
          <option value="Activated">Activated</option>
          <option value="Deactivated">Deactivated</option>
          </select>
          </div>
    
      </div>
    </div>
       

  </div>
</div>
';
}

if(isset($_POST['Edit'])){
    $Client_Code=$_POST['clientcode'];
    $Firm_Name=$_POST['Fname'];
    $Authorized_Name=$_POST['Aname'];
    $Email=$_POST['email'];
    $Mobile_Number=$_POST['number'];
    $Category=$_POST['category'];
    $status="Activated";
 
  $sql="UPDATE `client` SET `Firm_Name`='$Firm_Name',`Authorized_Name`='$Authorized_Name',`Email`='$Email',`Mobile_Number`='$Mobile_Number',`Category`='$Category' WHERE Client_Code='$Client_Code
  .'";
  if (mysqli_query($conn, $sql)){
    header("location:client.php");
 } else {
    echo "<script> alert ('connection failed !');window.location.href='client.php'</script>";
 }
}


?>
