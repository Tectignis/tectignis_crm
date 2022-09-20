<?php
include("includes/config.php");
?>
<?php
if(isset($_POST['dnk'])){
    $query=mysqli_query($conn,"select * from customer1 where id='".$_POST['dnk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle">Customer Details</h1>
    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Customer Name: </b> 
        </label>
        <input type="hidden" name="id" value="'.$row['id'].'">
        '.$row['customer'].'
      </div>
    </div>
    </div>
 </br>
      <div class="row">
       <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b>  Company Name : </b> 
            </label> '.$row['company_name'].'
          </div>
        </div>
        </div>        
      
        </br>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Contact No : </b> 
        </label> '.$row['contact_no'].'
          </div>
        </div>
        </div>       
        </br>
        <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Whatsapp No: </b> 
        </label> '.$row['whatsapp_no'].'
      </div>
    </div>
  </div>
  </br>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
    <label for="date">
    <b> Email ID: </b> 
    </label> '.$row['email_id'].'
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
    $query=mysqli_query($conn,"select * from customer1 where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle"> Edit Customer Details</h1>
     <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       <b> Customer Name </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="id" value="'.$row['id'].'">

          <input class="form-control" name="customer" type="text" value="'.$row['customer'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 </br>

      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Company Name </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="company_name" type="text" value="'.$row['company_name'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Contact No </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control" name="contact_no" type="text" value="'.$row['contact_no'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>

</br>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b> Whatsapp No </b> <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control" name="whatsapp_no" type="text" value="'.$row['whatsapp_no'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
       
      </div>
      </br>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Email </b> <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control" name="email_id" type="text" value="'.$row['email_id'].'" data-dtp="dtp_dl6pL">
          
          
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


<?php
if(isset($_POST['dnk1'])){
    $query=mysqli_query($conn,"select * from quotation where id='".$_POST['dnk1']."'");
    $row=mysqli_fetch_array($query);
    echo ' 
    <h1 class="text-center mb-1" id="addNewCardTitle">Quotation Details</h1>
    </br>
    <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b> Subject: </b> 
        </label>
        <input type="hidden" name="id" value="'.$row['id'].'">
        '.$row['subject'].'
      </div>
    </div>
    </div>
 </br>
      <div class="row">
       <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            <b>  Customer Name : </b> 
            </label> '.$row['customer'].'
          </div>
        </div>
        </div>        
      
        </br>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Date : </b> 
        </label> '.$row['date'].'
          </div>
        </div>
        </div>       
        </br>
        <div class="row">
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        <b>  Total: </b> 
        </label> '.$row['total'].'
      </div>
    </div>
  </div>
  </br>
  <div class="row">
  <div class="col-md-12">
  <div class="form-group">
    <label for="date">
    <b> GST: </b> 
    </label> '.$row['gst'].'
  </div>
</div>
</div>

    </div>
  </div>
  ';
  }
  ?>