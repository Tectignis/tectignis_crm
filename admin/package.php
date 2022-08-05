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
    $date=date('d-m-Y h:i:s a');
   
    $sql=mysqli_query($conn,"INSERT INTO `Package`(`package_name`, `total_lead`, `total_amt`, `created_date`, `update_date`) VALUES ('$name','$Tlead','$tamt','$date',)");

    if($sql==1){
        echo '<script>alert("Saved!", "data successfully submitted", "success");</script>';
        header("location:lead.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin CRM | Leads</title>

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
 <style>
    .card-header{
      padding:0px;
      background-color: rgba(0,0,0,.03);
      
    }
    .card-title{
float:left;
padding:25px;
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
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Package</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List of Leads</h5>    
                      <button type="button" class="btn btn-primary float-right my-3 " data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px;">
                    + Add Package
                  </button>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Firm Name</th>
                    <th>Client Name</th>
                    <th>Client Mobile Number</th>
                    <th>Requirement</th>
                    <th>Social Media</th>
                    <th>Created On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

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
                  <input type="number" class="form-control" name="name" id="name" placeholder="Package Name" required>
                  <span id="namespan" class="mb-4"></span>
                </div>
                </div>
                <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                <label>Total Leads</label>
                <!--onkeypress="return onlyNumberKey(event)"-->
                  <input type="number"  class="form-control" name="Tlead" id="Tlead" placeholder="Total Leads" required>
                  <span id="numberspan" class="mb-4"></span>
                    </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Per Leads Amt</label>
                  <input type="text" class="form-control" name="Plead" id="Plead" placeholder="Per Leads Amt" required>
                  <span id="cnamespan" class="mb-4"></span>
                </div>
                </div>
                <div class="col-md-12">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Total Amt</label>
                  <input type="text" class="form-control" name="tamt" id="Tamt" readonly>
                </div>
              </div>
              </div>
             
            <div class="modal-footer">
    <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>  
    <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="sub" style="margin-right: 5px;" >
                    Submit </button>    </div>

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
<script src="plugins/jquery/jquery.min.js"></script>
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
            $("#Tlead,#Plead").keyup(function(){
                let Tlead=$("#Tlead").val();
                let Plead=$("#Plead").val();
                let TAmt=Tlead*Plead;
                $("#Tamt").val(TAmt);
            });
        });
    </script>
</body>
</html>
