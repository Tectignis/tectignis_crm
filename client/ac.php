<?php
session_start();
include("config.php");
  if(isset($_POST['dnk'])){
    $id=$_POST['dnk'];
         $sql=mysqli_query($conn,"select * from lead where id='".$id."'");
              
           while ($row=mysqli_fetch_array($sql)){ 
           ?>
<div class="row">
    <div class="col-8">
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
                    <label>Source : </label>
                    <?php echo $row['social_media']; ?>
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
                    <select class="form-control" name="nature" style="width: 100%;" onclick="drop()">
                        <option selected="selected" value="<?php echo $row['nature']; ?>"><?php echo $row['nature']; ?>
                        </option>

                        <option value="Hot">Hot</option>
                        <option value="Cold">Cold</option>
                        <option value="Warm">Warm</option>
                        <option value="Deal Closed">Deal Closed</option>
                        <option value="Booked">Booked</option>
                        <option value="Site Visit" id="dropdown">Site Visit</option>

                    </select>
                </div>
            </div>



            <div class="col-3" id="textt" style="display:none">
                <div class="form-group">
                    <label>date : </label>
                    <input class="form-control" type="datetime-local" name="sitevisit_date">


                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="inputEmail">Remark : </label></br>
                    <textarea name="remark" class="form-control" style="width: 100%;resize: none;"></textarea>

                </div>

            </div>

         
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" id="myCheck" name="remainder_date[]" value="remainder"
                            onclick="myFunction()">
                        <label for="Remainder">Remainder </label>

                        <div class="col-12" id="text" style="display:none">
                            <div class="form-group">
                                <label>date : </label>
                                <input class="form-control" type="datetime-local" name="date_time">






                            </div>

                        </div>
                    </div>
              
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="col-4">

<ul class="sessions"style="overflow:scroll;height:300px" >
    <?php
    $sql1=mysqli_query($conn,"select * from remarks where lead_id='$id' order by id desc; ");
    while ($row=mysqli_fetch_array($sql1)){ 
    
    ?>

  <li>
    <div class="time"><?php echo $row['date_time']; ?></div>
    <p><?php echo $row['remark']; ?></p>
  </li>
  <?php

} } ?>
</ul>
</div> 


    
</div>


    <?php
                    if(isset($_POST['update'])){
    $id=$_POST['dnk'];
    $nature=$_POST['nature'];
     $remark=$_POST['remark'];
    $remainder_date=$_POST['remainder_date'];
    $sitevisit_date=$_POST['sitevisit_date'];
    $id=$_POST['id'];
    // $remainder=$_POST['remainder'];
   
   

    $sql=mysqli_query($conn,"UPDATE `lead` SET `nature`='$nature',`remainder_date`='$remainder_date',`sitevisit_date`='$sitevisit_date' WHERE id='$id'");
     $sql1=mysqli_query($conn,"INSERT INTO `remarks`(`remark`,`lead_id`) VALUES ('$remark','$id')");
 
    if($sql==1){
        echo "Saved!", "data successfully submitted", "success";
        header("location:lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}

                        ?>