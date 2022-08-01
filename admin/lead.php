<?php
include("config.php");

?>
<?php
//leads post
if(isset($_POST['submitt'])){
    $Firm_Name=$_POST['Fname'];
    $Client_Name=$_POST['Cname'];
    $Mobile_Number=$_POST['number'];
    $Requirement=$_POST['requirement'];
    $social_media=$_POST['social_media'];
    $status="Open";
    date_default_timezone_set('Asia/Kolkata');
    $Date = date("Y-m-d H:i:s");
   
    $sql=mysqli_query($conn,"INSERT INTO `lead`(`Firm_Name`,`Client_Name`, `Mobile_Number`,`Requirement`,`social_media`,`Created_On`,`status_deal`) VALUES ('$Firm_Name','$Client_Name','$Mobile_Number','$Requirement','$social_media','$Date','$status')");

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
            <h1>Leads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Leads</li>
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
                    + Add Lead
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
                    <th>Created On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql=mysqli_query($conn,"select *, lead.Mobile_Number as mob from lead inner join client on lead.Firm_Name=client.Client_Code");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ 

          ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $row['Firm_Name']; ?></td>
                <td><?php echo $row['Client_Name']; ?></td>
                <td><?php echo $row['mob']; ?></td>
                <td><?php echo $row['Requirement']; ?></td>
                <td><?php echo $row['social_media']; ?></td>
                <td><?php echo $row['Created_On']; ?></td>
                    <td style="text-align:center">
                      <a href="api_crm/leaddelete.php?delid=<?php echo $row['id']; ?>"><button type="button"  onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a> </td>
                  </tr>
                  <?php $count++; } ?>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="modal fade closemaual" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        
      </div>
      <div class="modal-body">
      <form method="post" action="">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Firm Name</label>
                  <?php 
                  $query=mysqli_query($conn,"select * from client");
                
                  ?>
                      <select class="form-control select2" name="Fname" style="width: 100%;" required>

                        <option selected="selected" disabled>Select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                        <option value="<?php echo $sql['Client_Code']; ?>"> <?php echo $sql['Firm_Name']; ?></option>
                        <?php } ?>
                      </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label>Client Mobile Number</label>
                  <input type="tel" minlength="10" maxlength="10" onkeypress="return onlyNumberKey(event)" class="form-control" name="number" id="number" placeholder="Mobile Number" required>
                  <span id="numberspan" class="mb-4"></span>
                    </div>
                <!-- /.form-group -->
              </div>
              
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Client Name</label>
                  <input type="text" class="form-control" name="Cname" id="cname" placeholder="Client Name" required>
                  <span id="cnamespan" class="mb-4"></span>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Requirement</label>
                  <input type="text" class="form-control" name="requirement" id="Rname" placeholder="Requirement" required>
                </div>
                
                    
                <!-- /.form-group -->
              </div>
              

                <!-- /.form-group -->
              </div>
            
             

              <div class="row">
        
              
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                <label>Social Media</label>
                  <select class="form-control select2" name="social_media" style="width: 100%;">
                    <option selected="selected" disabled>Select</option>
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Twitter</option>
                    <option>Linkdin</option>
                    <option>Youtube</option>
                  </select>
                </div>
                <!-- /.form-group -->
               
                
                    
                <!-- /.form-group -->
              </div>
              

                <!-- /.form-group -->
              </div>

            <div class="modal-footer">
    <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>  
    <button type="submit" name="submitt" class="btn btn-primary float-right my-3 " id="sub" style="margin-right: 5px;" >
                    Submit </button>    </div>

            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
             
              <!-- /.col -->
            </div>
            <!-- /.row -->
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
 $("#cnamespan").hide();
	    $("#cname").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
      validenqName="no";
		   let txt=$("#cname").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
			  $("#cnamespan").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
        validenqName="yes";
		       $("#cnamespan").hide();
		       
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
  let  validenqtMobile;

$(document).ready(function(){
     $("#numberspan").hide();
	    $("#number").keyup(function(){
	     mobile_check();
	   });
	   function mobile_check(){
      validenqtMobile="no";
		   let mobileno=$("#number").val();
		   let vali =/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
		   if(!vali.test(mobileno)){
       
			    $("#numberspan").show().html("*Invalid Mobile No").css("color","red").focus();
				mobile_err=false;
			 return false;
		   }
		   else{
        validenqtMobile="yes";
		       $("#numberspan").hide(); 
		   }
	   }
 
     
	   $("#sub").click(function(){
      if(validenqName =="no" || validenqtMobile =="no"){
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
</body>
</html>
