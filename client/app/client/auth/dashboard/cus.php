<?php
include("config.php");
?>
<?php
if(isset($_POST['dnk'])){
    $query=mysqli_query($conn,"select * from property where id='".$_POST['dnk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle">Property Details</h1>
    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Client Name: </b> 
        </label>
        <input type="hidden" name="id" value="'.$row['id'].'">
        '.$row['client_name'].'
      </div>
    </div>
    </div>
 </br>
      <div class="row">
       <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b>  Apartment Type : </b> 
            </label> '.$row['apartment_type'].'
          </div>
        </div>
        </div>        
      
        </br>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Mobile No : </b> 
        </label> '.$row['mobile_no'].'
          </div>
        </div>
        </div>       
        </br>
        <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Type: </b> 
        </label> '.$row['type'].'
      </div>
    </div>
  </div>
  </br>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
    <label for="date">
    <b> Area: </b> 
    </label> '.$row['area'].'
  </div>
</div>
</div>

    </div>
  </div>
  ';
  }
  ?>
<?php
if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from property where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle"> Edit Property Details</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b> Client Name </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="client_name" type="text" value="'.$row['client_name'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Mobile No </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="mobile_no" type="text" value="'.$row['mobile_no'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Type </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control" name="contact_no" type="type" value="'.$row['type'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>

</br>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Apartment Type </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="apartment_type" type="text" value="'.$row['apartment_type'].'"  data-dtp="dtp_qHHzf">
              
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
            <select id="UserRole" name="status"
            class="form-select text-capitalize mb-md-0 mb-2">
            <option value="" disabled selected> Select Type </option>
            <option value="available" class="text-capitalize">Available</option>
            <option value="not available" class="text-capitalize">Not Available</option>
        </select>
              
            </div>
          </div>
        </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Area </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control" name="area" type="text" value="'.$row['area'].'" data-dtp="dtp_dl6pL">
          
          
        </div>
      </div>
    </div>
  </div>
</br>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Description </b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<textarea class="form-control" name="description" type="text" value="'.$row['description'].'"  data-dtp="dtp_qHHzf">
</textarea>

</div>
</div>
</div>

</div>
</br>
    </div>
  </div>
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary" name="cusEdit">Save changes</button>
</div>

  ';
  }
  
  
  ?>

