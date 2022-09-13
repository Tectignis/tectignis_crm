<?php
include("config.php");
?>
<?php
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
    $due_date=$_POST['due_date'];
  date_default_timezone_set('Asia/Kolkata');
  $date=date('Y-m-d h:i:s a');
 
  $qsend=mysqli_query($conn,"INSERT INTO `package_assign`(`firm_id`, `lead_id`, `total_amt`, `first_payment`, `balance`,`assign_date`,`account_name`,`payment_mode`,`transaction_date`,`due_date`,`title`) VALUES ('$assignto','$leadid','$totalamt','$payment','$balance','$date','$account_name','$paymentmode','$transaction','$due_date','$title')");
  if($qsend==1){
    header("location:package.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin CRM | Leads</title>
  <?php
    $logosql=mysqli_query($conn,'select * from system_setting');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/logo/<?php echo $fetchlogo['favicon'] ?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
  <script src="plugins/jquery/jquery.min.js"></script>
  <style>
  * {
  margin: 0;
  padding: 0;
}
html {
  font-family: Avenir, sans-serif;
}
.container {
  width: 85%;
  margin: auto;
  padding-top: 50px;
  padding-bottom: 50px;
}
.grid {
  display: grid;
  grid-template-columns: 25% 25% 25%;
}
.card1 {
  width: 355px;
  border-radius: 10px;
  padding: 10px 20px;
  border: 0;
  height:250px
}
.card3 {
  background: linear-gradient(to bottom right, #FDBD56, #FD56B6);
  box-shadow: 3px 15px 30px rgba(253, 99, 169, 0.75);
}
.card1 h3 {
  color: rgba(255, 255, 255, 0.3);
  font-size: 53px;
  font-weight: 900;
  letter-spacing: 0px;
}
.card1 h4 {
  color: white;
  /* font-size: 40px;
  margin-top: 53px; */
}
.card1 h2 {
  color: rgba(255, 255, 255, 0.08);
  font-size: 118px;
  font-weight: 900;
  text-align:center;
  width: 100%;
  position: absolute;
  margin-left: -6px;
  pointer-events: none;
}
.card1 hr {
  border-width: 1px;
  border-color: rgba(255, 255, 255, 0.15);
  margin-top: 33px;
}
.card1 p:first-of-type {
  /* margin-top: 40px; */
}
.card1 p {
  color: white;
  font-size: 18px;
  text-align: center;
  font-weight: bold;
}
.card1 p:nth-of-type(2) {
  /* margin-top: 10px;
  margin-bottom: 40px; */
}
.card1 a {
  color: white;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  padding: 9px 76px;
  background-color: rgba(255, 255, 255, 0.3);
  border-radius: 6px;
  transition: background-color 0.5s;
}
.card1 a:hover {
  background-color: rgba(255, 255, 255, 0.5);
}
@media only screen and (max-width: 1900px) {
  .grid {
    grid-template-columns: 100%;
    grid-row-gap: 50px;
  }
}
.fa-ellipsis-v{
color: rgba(255, 255, 255, 1.1);
}
.cardbtn{
  border-bottom:none;
}
.bal{
  border: none;
    border-bottom: 1px solid lightgrey
}
</style>
</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">
<?php
include("include/header.php");
include("include/sidebar.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Package</h1>
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
            </ol>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><button type="button" class="btn btn-primary  my-3 " data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px;">   <i class="fa fa-plus"></i></button></li>
                               
                            </ol>
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <div class="row">
            <?php
            $qpackage=mysqli_query($conn,"select * from package");
            while($fpackage=mysqli_fetch_array($qpackage)){
            ?>
        <div class="col-md-6 col-sm-6 col-lg-4">
        <div class="grid">
    <div class="card1 card3">
    <!-- <div class="card-header-right">
                    <div class="dropdown float-right">
                     <button class="btn" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    
                            <button class="dropdown-item usereditid" type="button"  data-id="<?php echo $row['id'] ?>"><i class="far fa-edit"></i> Edit</button>
    
                            <button class="dropdown-item delbtn" type="button" onclick="deleteBtn()" data-id="=<?php echo $row['id']; ?>"><i class="fa fa-trash-alt"></i> Delete</button>
</div>
    
            </div>
            </div> -->
      <h3><?php echo $fpackage['package_name']; ?></h3>
      <h2><?php echo $fpackage['total_amt']; ?></h2>
      <h4><?php echo $fpackage['total_lead']; ?> Leads</h4>
      <hr>
      <p><i class="fa fa-inr" aria-hidden="true"></i><?php echo $fpackage['total_amt']; ?></p>
      <!-- <p>Ultimate presets</p> -->
      <!-- <a href="#"><?php echo $fpackage['assign']; ?></button> -->
      <p><a href="#assignformmodal<?php echo $fpackage['id']; ?>" data-toggle="modal" data-target="#assignformmodal<?php echo $fpackage['id']; ?>">Assign</a></p>
   </div>
   </div>
            </div>
   <?php } ?>
       
            <div class="modal fade closemaual" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Packages</h5>
        
      </div>
      <div class="modal-body">
      <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Package Name</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Package Name" required>
                  <span id="namespan" class="mb-4"></span>
                </div>
                </div>
                <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                <label>Total Leads</label>
                <!--onkeypress="return onlyNumberKey(event)"-->
                  <input type="number"  class="form-control Tlead" name="Tlead" id="Tlead" placeholder="Total Leads" required>
                  <span id="numberspan" class="mb-4"></span>
                    </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Per Leads Amt</label>
                  <input type="number" class="form-control Plead" name="Plead" id="Plead" placeholder="Per Leads Amt" required>
                  <span id="cnamespan" class="mb-4"></span>
                </div>
                </div>
                <div class="col-md-12">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Total Amt</label>
                  <input type="text" class="form-control Tamt" name="tamt" id="Tamt" readonly>
                </div>
              </div>
              </div>
             
            <div class="modal-footer">
            <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>  
            <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="sub" style="margin-right: 5px;" >Submit </button> 
             </div>
          </div>
         </form>
                   </div>
                   </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<!--assign form modal-->
<?php
            $qpackage=mysqli_query($conn,"select * from package");
            while($fpackage=mysqli_fetch_array($qpackage)){
            ?>
<div class="modal fade " id="assignformmodal<?php echo $fpackage['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="assignformmodal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Assign</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <form method="post" action="package_card.php">
        <div class="modal-body">
        <div class="form-group row">
              <label for="title" class="col-sm-3 col-form-label">Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control " id="title" name="title">
              </div>
            </div>
            <div class="form-group row">
              <label for="assignto" class="col-sm-3 col-form-label">Assign to:</label>
              <div class="col-sm-9">
              <select name="assignto" id="assignto" class="form-control">
              <?php $qfirm=mysqli_query($conn,"select * from client");
              while($ffirm=mysqli_fetch_array($qfirm)){ ?>
                <option value="<?php echo $ffirm['Client_Code']; ?>"><?php echo $ffirm['Firm_Name']; ?></option>
                <?php } ?>
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="lead" class="col-sm-3 col-form-label">Leads</label>
              <div class="col-sm-9">
              <input type="hidden" value="<?php echo $fpackage['id']; ?>" name="leadid" >
                <input type="text" value="<?php echo $fpackage['total_lead']; ?>" class="form-control" name="lead" id="lead" readonly>
              </div>
            </div>
            <div class="form-group row">
            <label for="account_name" class="col-sm-3 col-form-label">Account Name</label>
            <div class="col-sm-9">
              <select class="form-control" name="account_name" id="account_name">
                <option value="Tectignis It Solution Pvt. Ltd">Tectignis It Solution Pvt. Ltd</option>
                <option value="Cash">Sachin Enterprises</option>
                <option value="Bank">Cash</option>
              </select>
            </div>
            </div>
            <div class="form-group row">
            <label for="paymentmode" class="col-sm-3 col-form-label">Payment Mode</label>
            <div class="col-sm-9">
              <select name="paymentmode" id="paymentmode" class="form-control">
                <option value="Cash">Cash</option>
                <option value="Imps">Imps</option>
                <option value="Gpay">Gpay</option>
              </select>
            </div>
            </div>
            <div class="form-group row">
              <label for="payment" class="col-sm-3 col-form-label">Payment</label>
              <div class="col-sm-9">
                <input type="hidden" value="<?php echo $fpackage['total_amt']; ?>"  id="totalamt<?php echo $fpackage['id']; ?>" name="totalamt">
                <input type="text" class="form-control " id="payment<?php echo $fpackage['id']; ?>" name="payment">
              </div>
            </div>
            <div class="form-group row">
              <label for="balance" class="col-sm-3 col-form-label">Balance</label>
              <div class="col-sm-9">
                <input type="text" name="balance" class="form-control bal" id="balance<?php echo $fpackage['id']; ?>" >
              </div>
            </div>
            <div class="form-group row">
            <label for="transaction" class="col-sm-3 col-form-label">Date of Transaction</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" value=""  id="transaction" name="transaction">
            </div>
            </div>
            <div class="form-group row">
            <label for="due_date" class="col-sm-3 col-form-label">Due Date</label>
            <div class="col-sm-9">
              <input type="datetime-local" class="form-control" value=""  id="due_date" name="due_date">
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="Assign" class="btn" style="background: linear-gradient(to bottom right, #FDBD56, #FD56B6);">Submit</button>
        </div>   
        </form>  
        
        <script>
          $("#payment<?php echo $fpackage['id']; ?>").keyup(function(){
                let totalamt=$("#totalamt<?php echo $fpackage['id']; ?>").val();
                let payment=$("#payment<?php echo $fpackage['id']; ?>").val();
                let balance=totalamt-payment;
                $("#balance<?php echo $fpackage['id']; ?>").val(balance);
            });
        </script>

      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- Modal -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include"include/footer.php";?>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

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
</body>
</html>
