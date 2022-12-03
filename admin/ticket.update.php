<?php 
// session_start();
include("config.php");
?>
<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from ticket where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center" id="addNewCardTitle" style="margin-top: -36px;
    margin-bottom: 45px;"> Edit ticket Details</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b>Description</b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="description" type="text" value="'.$row['Description'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Status </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
            <select class="select2 form-select" name="status" id="select2-basic"">
            <option value="Open" ';?><?php if($row['status']=='Open'){ echo 'selected'; } echo '>Open</option>
            <option value="Hold" ';?><?php if($row['status']=='Hold'){ echo 'selected'; } echo ' >Hold On</option>
            <option value="Inprocess" ';?><?php  if($row['status']=='Inprocess'){ echo 'selected'; }echo ' >In Progress</option>
            <option value="Closed" ';?><?php if($row['status']=='Closed'){ echo 'selected'; } echo ' >Closed</option>
        </select>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-12 text-center mt-3">
        <button type="submit" name="edit1" class="btn btn-primary me-1">Submit</button>
        </div>
    </div>
       ';
  }
  
  if(isset($_POST['edit1'])){
    $id=$_POST['id'];
    $description = $_POST['description'];
    $status = $_POST['status'];
   
   
   
    $sql="UPDATE `ticket` SET `Description`='$description',`status`='$status' WHERE id='$id
    .'";

if (mysqli_query($conn, $sql)){
    header("location:ticket.php");
 } else {
    echo "<script> alert ('connection failed !');window.location.href='ticket.php'</script>";
 }
}

  ?>


<?php
if(isset($_POST['dnk'])){
    $query=mysqli_query($conn,"select * from ticket where id='".$_POST['dnk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center" id="addNewCardTitle">Ticket Details</h1>
    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Ticket No: </b> 
        </label>
        <input type="hidden" name="id" value="'.$row['id'].'">
        '.$row['ticket_no'].'
      </div>
    </div>
    </div>
 </br>
 <div class="row">
 <div class="col-md-12">
 <div class="row">
 <div class="col-md-12">
   <div class="form-group">
     <label for="date">
     <b> Client Code: </b> 
     </label>
     <input type="hidden" name="id" value="'.$row['id'].'">
     '.$row['Client_Code'].'
   </div>
 </div>
 </div>

        </br>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Subject : </b> 
        </label> '.$row['Subject'].'
          </div>
        </div>
        </div>       
        </br>
        <div class="row">
 <div class="col-md-12">
 <div class="row">
 <div class="col-md-12">
   <div class="form-group">
     <label for="date">
     <b> Comment: </b> 
     </label>
     <input type="hidden" name="id" value="'.$row['id'].'">
     '.$row['Comment'].'
   </div>
 </div>
 </div>
</br>
<div class="row">
 <div class="col-md-12">
 <div class="row">
 <div class="col-md-12">
   <div class="form-group">
     <label for="date">
     <b> Date: </b> 
     </label>
     <input type="hidden" name="id" value="'.$row['id'].'">
     '.$row['date'].'
   </div>
 </div>
 </div>
</br>
        <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Status: </b> 
        </label> '.$row['status'].'
      </div>
    </div>
  </div>
  </br>
      <div class="row">
       <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Description : </b> 
            </label> '.$row['Description'].'
          </div>
        </div>
        </div>        
      

    </div>
  </div>
  ';
  }

  if(isset($_POST['ticketid'])){
    $id=$_POST['ticketid'];
	
	echo '  <div class="form-group">
    <input type="hidden" value='.$id.' name="id">
    <label class="form-label mb-1">Status</label>
      <select class="form-control select2" name="category" style="width: 100%;">
        <option selected="selected" value="Open">Open</option>
        <option value="Hold On">Hold On</option>
        <option value="Inprocess">Inprocess</option>
        <option value="Closed">Closed</option>
      </select>
</div>
<div class="form-group mt-2">
<label class="form-label mb-1">Comment</label>
      <textarea class="form-control" name="comment" id="comment" placeholder="Comment"></textarea>
</div>

</div> ';
}
  ?>

<?php
  if(isset($_POST['cateid'])){
    $id=$_POST['cateid'];
         $sql=mysqli_query($conn,"select * from category where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
                       
                                <div class="form-group mt-2">
                                    <label for="inputCategory">Category</label>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <input type="text" name="updateCategory" value="<?php echo $row['category']; ?>" class="form-control mt-1" id="inputRoles"
                                        placeholder="Enter Category">
                                </div>
                          
                        <?php } } ?>

                        <?php
                        if(isset($_POST['submitt'])){
                          $category=$_POST['category'];
                         
                          $sql=mysqli_query($conn,"INSERT INTO `category`(`category`) VALUES ('$category')");
                          if($sql){
                              echo "<script>alert('category Added Successfully');</script>";
                              echo "<script>window.location.href='category.php';</script>";
                          }
                          else{
                              echo "<script>alert('category Not Added');</script>";
                              echo "<script>window.location.href='category.php';</script>";
                          }
                          
                      
                         
                      }
                      
                      
                      if(isset($_GET['del_id'])){
                          $delid = $_GET['del_id'];
                          $sql = mysqli_query($conn,"DELETE FROM category WHERE id = '$delid'");
                          if($sql){
                            header ("location:category.php"); 
                          }
                          else{ echo "<script>alert('Failed to Delete')</script>"; }
                        }
                        
                        ?>