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
        </label> '.$row['type1'].'
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
</br>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  <b>  Description : </b> 
  </label> '.$row['description'].'
    </div>
  </div>
  </div>       
  </br>

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
        <select id="UserRole" name="typeUpdate"
        class="form-select text-capitalize mb-md-0 mb-2">
        <option value="" disabled > Select Type </option>
        <option value="Flat Sell" '.(($row['type1']=='Flat Sell')?"selected":"").' class="text-capitalize">Flat Sell</option>
        <option value="Flat Rent" '.(($row['type1']=='Flat Rent')?"selected":"").' class="text-capitalize">Flat Rent</option>
        <option value="Shop / Office Sell" '.(($row['type1']=='Shop / Office Sell')?"selected":"").' class="text-capitalize">Shop / Office Sell</option>
        <option value="Shop / Office Rent" '.(($row['type1']=='Shop / Office Rent')?"selected":"").' class="text-capitalize">Shop / Office Rent</option>
    </select>
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


            
              <select id="UserRole" name="apartment_type"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled > Select Apartment Type </option>
                                        
                                        <option value="1RK" '.(($row['apartment_type']=='1RK')?"selected":"").' class="text-capitalize" >1RK</option>
                                        <option value="1BHK" '.(($row['apartment_type']=='1BHK')?"selected":"").' class="text-capitalize">1BHK</option>
                                        <option value="2BHK" '.(($row['apartment_type']=='2BHK')?"selected":"").' class="text-capitalize">2BHK</option>
                                        <option value="3BHK" '.(($row['apartment_type']=='3BHK')?"selected":"").' class="text-capitalize">3BHK</option>
                                        <option value="Office" '.(($row['apartment_type']=='Office')?"selected":"").' class="text-capitalize">Office</option>
                                        <option value="Shop" '.(($row['apartment_type']=='Shop')?"selected":"").' class="text-capitalize">Shop</option>
                                        <option value="Other" '.(($row['apartment_type']=='Other')?"selected":"").' class="text-capitalize">Other</option>

                                    </select>
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
            <option value="" disabled> Select Type </option>
            <option value="available" '.(($row['status']=='available')?"selected":"").' class="text-capitalize">Available</option>
            <option value="not available" '.(($row['status']=='not available')?"selected":"").' class="text-capitalize">Not Available</option>
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
</br>

    <div class="row">
<div class="col-md-12">
<div class="form-group">
<label for="clock_in">
<b> Description </b> <span class="text-danger">*</span>
</label>
<div class="input-group">
<textarea class="form-control" name="description" type="text" value="" data-dtp="dtp_dl6pL">'.$row['description'].'</textarea>


</div>
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

