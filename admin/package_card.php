<?php
include("config.php");
 
//leads post
if(isset($_POST['submitt'])){
    $name=$_POST['name'];
    $Tlead=$_POST['Tlead'];
    $tamt=$_POST['tamt'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('Y-m-d h:i:s a');
   
    $sql=mysqli_query($conn,"INSERT INTO `package`(`package_name`, `total_lead`, `total_amt`, `created_date`) VALUES ('$name','$Tlead','$tamt','$date')");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:package_card.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}

if(isset($_POST['Assign'])){
  $title=$_POST['title'];
  $assignto = $_POST['assignto'];
  $leadid = $_POST['leadid'];
  $totalamt = $_POST['totalamt'];
  $payment = $_POST['payment'];
  $balance = $_POST['balance'];
  $account_name=$_POST['account_name'];
    $paymentmode=$_POST['paymentmode'];
    $transaction=$_POST['transaction'];
    $trans_no=$_POST['trans_no'];
    $due_date=$_POST['due_date'];
  date_default_timezone_set('Asia/Kolkata');
  $date=date('Y-m-d h:i:s a');
 
  $qsend=mysqli_query($conn,"INSERT INTO `package_assign`(`firm_id`, `lead_id`, `total_amt`, `first_payment`, `balance`,`assign_date`,`account_name`,`payment_mode`,`transaction_date`,`due_date`,`title`,`trans_no`) VALUES ('$assignto','$leadid','$totalamt','$payment','$balance','$date','$account_name','$paymentmode','$transaction','$due_date','$title','$trans_no')");
  if($qsend==1){
    header("location:package.php");
}
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<title>Package Card</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Package Card</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    
                                    <li class="breadcrumb-item active">Package Card
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCard">
                                Add New Package 
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->

                

                <div class="row match-height">
                <?php
            $qpackage=mysqli_query($conn,"select * from package");
            while($fpackage=mysqli_fetch_array($qpackage)){
            ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i data-feather="user" class="font-large-2 mb-1"></i>
                                <h5 class="card-title"><?php echo $fpackage['package_name']; ?>
                                </h5>
                                <!-- <p class="card-text"><?php echo $fpackage['total_lead']; ?> Leads</p> -->
                                <h6 class="card-title"><i class="fas fa-rupee-sign"></i> <?php echo $fpackage['total_amt']; ?>
                                </h6>
                                <!-- modal trigger button -->
                                <a href="#editUser<?php echo $fpackage['id']; ?>" class="btn btn-primary"data-bs-toggle="modal" data-bs-target="#editUser<?php echo $fpackage['id']; ?>">Assign</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- Edit User Modal -->
    <?php
            $qpackage=mysqli_query($conn,"select * from package");
            while($fpackage=mysqli_fetch_array($qpackage)){
            ?>
    <div class="modal fade" id="editUser<?php echo $fpackage['id']; ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1" style="text-decoration: underline;color: black;">Assign</h1>
                        
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="text-center">
                                <h5 style="text-transform:capitalize;font-size: 20px;color: darkgray;font-weight: 800;"> <?= $fpackage['package_name']; ?></h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center">
                                <h5 style="text-transform:capitalize;font-size: 20px;color: darkgray;font-weight: 800;"><i class="fas fa-rupee-sign"></i> <?= $fpackage['total_amt']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <form id="editUserForm" class="row gy-1 pt-75" method="post" action="package_card.php">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserFirstName">Title</label>
                            <input type="text" class="form-control " id="title" name="title" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Assign To:</label>
                            <select name="assignto" id="assignto" class="form-select" required>
                            <?php $qfirm=mysqli_query($conn,"select * from client");
                            while($ffirm=mysqli_fetch_array($qfirm)){ ?>
                                <option value="<?php echo $ffirm['Client_Code']; ?>"><?php echo $ffirm['Firm_Name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="hidden" value="<?php echo $fpackage['id']; ?>" name="leadid" required >
                        <!-- <div class="col-12 col-md-6">
                            <label class="form-label" for="lead">Leads</label>
                            
                            <input type="text" value="<?php echo $fpackage['total_lead']; ?>" class="form-control" name="lead" id="lead " readonly>
                        </div> -->
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Payment To</label>
                            <select class="form-select" name="account_name" id="account_name" required>
                                <option value="Tectignis It Solution Pvt. Ltd">Tectignis It Solution Pvt. Ltd</option>
                                <option value="Cash">Sachin Enterprises</option>
                                <option value="Bank">Cash</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="paymentmode">Payment Mode</label>
                            <select name="paymentmode" id="paymentmode" class="form-select" required>
                                <option value="Cash">Cash</option>
                                <option value="Imps/NEFT">Imps/NEFT</option>
                                <option value="Gpay/UPI">Gpay/UPI</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Payment Received</label>
                            <input type="hidden" value="<?= $fpackage['total_amt']; ?>"  id="totalamt<?php echo $fpackage['id']; ?>" name="totalamt" required>
                           <input type="text" class="form-control " id="payment<?php echo $fpackage['id']; ?>" name="payment" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Balance</label>
                            <input type="text" name="balance" class="form-control bal" id="balance<?php echo $fpackage['id']; ?>" readonly>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Date Of Transaction</label>
                            <input type="datetime-local" class="form-control" value=""  id="transaction" name="transaction" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Due Date</label>
                            <input type="datetime-local" class="form-control" value=""  id="due_date" name="due_date" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserPhone">Transaction Number</label>
                            <input type="tel" class="form-control" value=""  id="due_date" name="trans_no" required>
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" name="Assign" class="btn btn-primary me-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
                <script>
          $("#payment<?php echo $fpackage['id']; ?>").keyup(function(){
                let totalamt=$("#totalamt<?php echo $fpackage['id']; ?>").val();
                let payment=$("#payment<?php echo $fpackage['id']; ?>").val();
                let balance=totalamt-payment;
                $("#balance<?php echo $fpackage['id']; ?>").val(balance);
            });
        </script>
        <script>
        $(document).ready(function(){
          $("#payment<?php echo $fpackage['id']; ?>").keyup(function(){
            let total = $("#totalamt<?php echo $fpackage['id']; ?>").val();
            let payment = $("#payment<?php echo $fpackage['id']; ?>").val();
            let balance = total - payment;
            if(balance < 0){
              alert("Payment is greater than balance");
              $("#payment<?php echo $fpackage['id']; ?>").val("");
              $("#balance<?php echo $fpackage['id']; ?>").val("");
        }else{
            $("#balance<?php echo $fpackage['id']; ?>").val(balance);
        }
          });
        });
        </script>
            </div>
        </div>
    </div>
    <?php } ?>
    <!--/ Edit User Modal -->
     <!-- add new card modal  -->
     <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Add New Package</h1>
                   

                    <!-- form -->
                    <form id="addNewCardValidation" method="post" class="row gy-1 gx-2 mt-75" >
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Package Name</label>
                            <div class="input-group input-group-merge">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Package Name" required style="border-right:1px solid #d8d6de">
                  <span id="namespan" class="mb-4"></span>
                                </span>
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <label class="form-label" for="modalAddCardName">Total Leads</label>
                            <input type="number"  class="form-control Tlead" name="Tlead" id="Tlead" placeholder="Total Leads" required>
                  <span id="numberspan" class="mb-4"></span>
                        </div> -->

                        <!-- <div class="col-md-6">
                            <label class="form-label" for="modalAddCardName">Per Leads Amt</label>
                            <input type="number" class="form-control Plead" name="Plead" id="Plead" placeholder="Per Leads Amt" required>
                  <span id="cnamespan" class="mb-4"></span>
                        </div> -->

                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Total Amount</label>
                            <div class="input-group input-group-merge">
                            <input type="text" class="form-control Tamt" name="tamt" id="Tamt" style="border-right:1px solid #d8d6de" required>
                                    <span class="add-card-type"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" name="submitt" class="btn btn-primary me-1 mt-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ add new card modal  -->
    <?php
       include('include/footer.php');
       ?>
    <!-- END: Footer-->


    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/cards/card-advance.js"></script>
        <script>
   let  validenqName;

    $(document).ready(function(){
 $("#namespan").hide();
	    $("#name").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
      validenqName="no";
		   let txt=$("#name").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
			  $("#namespan").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
        validenqName="yes";
		       $("#namespan").hide();
		       
		   }
	   }
     $("#sub").click(function(){
       txt_err = true;
       
             txt_check();
             
			   
			   if(txt_err==true){
			      return true;
			   }
			   else{return false;}
		  });
    });
    </script>
<script>

$(document).ready(function(){
	   $("#sub").click(function(){
      if(validenqName =="no"){
         swal({
  title: "Oops...!",
  text: "Please fill all the fields!",
  icon: "error",
});
     }
         else{
          swal({
  title: "Saved!",
  text: "data successfully submitted",
  icon: "success",
}).then(function(){window.location="lead.php"; });
         }
      mobile_err=true;
            
             mobile_check();
			   
			   if(mobile_err=true){
			      return true;
			   }
			   else{return false;}
		  });
    });
    </script>
    <script>
        $(document).ready(function(){
            $(".Tlead,.Plead").keyup(function(){
                let Tlead=$(".Tlead").val();
                let Plead=$(".Plead").val();
                let TAmt=Tlead*Plead;
                $(".Tamt").val(TAmt);
            });
        });
    </script>
            <script>
        $(document).ready(function(){
          $("#payment").keyup(function(){
            let total = $("#bal").val();
            let payment = $("#payment").val();
            let balance = total - payment;
            if(balance < 0){
              alert("Payment is greater than balance");
              $("#payment").val("");
              $("#balance").val(total);}
            $("#balance").val(balance);
          });
        });
        </script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>