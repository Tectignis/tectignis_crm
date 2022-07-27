<?php
include("config.php");

if(isset($_POST['dnkidno'])){
	$sql=mysqli_query($conn,"SELECT * FROM lead where id='".$_POST['dnkidno']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="dealmodal.php">
            <div class="modal-body body1">
                <div class="row">   
                <div class="col-4">
                <b>Client Name :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['Client_Name'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Mobile No :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['Mobile_Number'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Requirement :</b><br>
                </div>
                <div class="col-8">
                <p>'.$arr['Requirement'].'</p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Created On :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['Created_On'].' </p>
                </div>
                </div>

                
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              
            </div></form>';
}

include("config.php");

if(isset($_POST['save'])){

  $id=$_POST['id'];
  $status_deal=$_POST['status_deal'];

  $sql=mysqli_query($conn,"UPDATE `lead` SET `status_deal`='$status_deal' where id='$id'" );
  header("location:deal.php");
 
}




if(isset($_POST['dnkidno1'])){
	$sql=mysqli_query($conn,"SELECT * FROM lead where id='".$_POST['dnkidno1']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="dealmodal.php">
<input type="hidden" value="'.$_POST['dnkidno1'].'" name="id">    
        <div class="modal-body body1">
                
           
        <div class="modal-body body1">
        <div class="row">   
        <div class="col-4">
        <label>Status :</label>
        </div>
        <div class="col-8">
        <p> <select required class="form-control" name="status_deal" id="servicesid">
        <option value="" disabled selected hidden>select</option>
        <option value="Open">Open</option>
        <option value="In Process">In Process</option>
        <option value="On Hold">On Hold</option>
        <option value="Closed Deal">Closed Deal</option>
        
       
    

      </select> </p>
        </div>
        </div>

        
       
      
     
       
       
    </div>
    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="save" >Save</button>
    </div>      
                       
            </form>';
}
?>