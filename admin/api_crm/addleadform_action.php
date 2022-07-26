
<?php
include("../config.php");
?>
<?php 
                  $query=mysqli_query($conn,"select * from client");
                
                  ?>
<?php

if(isset($_POST['dnkk'])){
    $id=$_POST['dnkk'];
    
	
	echo '  <div class="form-group">
    <input type="hidden" value='.$id.' name="id">
    <label>Firm Name</label>
    
    <select class="form-control select2" name="Fname" style="width: 100%;" required>
    <option selected="selected" disabled>Select</option>
    </select>
</div>

<div class="form-group">
<label>Client Name</label>
      <input type="text" class="form-control" name="Cname" id="client name" placeholder="Client Name">
</div>

<div class="form-group">
<label>Client Mobile Number</label>
      <input type="text" class="form-control" name="number" id="Client Mobile Number" placeholder="Client Mobile Number">
</div>

<div class="form-group">
<label>Requirement</label>
      <input type="text" class="form-control" name="requirement" id="Requirement" placeholder="Requirement">
</div>

</div> ';
}
?>