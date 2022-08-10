<?php
include("config.php");

?>
<?php
//leads post
if(isset($_POST['update'])){
    $assignId=$_POST['assignId'];
    $account_name=$_POST['account_name'];
    $paymentmode=$_POST['paymentmode'];
    $transaction=$_POST['transaction'];
    $due_date=$_POST['due_date'];
    $bal=$_POST['balance'];
    $newpayment=$_POST['newpayment'];
    $payment=$_POST['payment'];
    $newbal=$payment+$newpayment;
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d h:i:s");
    
    $sql=mysqli_query($conn,"UPDATE package_assign SET `first_payment`='$newbal',`balance`='$bal',`update_date`='$date',`account_name`='$account_name',`payment_mode`='$paymentmode',`transaction_date`='$transaction',`due_date`='$due_date' WHERE id='$assignId'");
   
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
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
         
            <!-- /.card -->

            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Firm Name</th>
                    <th>Lead</th>
                    <th>Total Amt</th>
                    <th>Payment</th>
                    <th>Balance</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $qpackage=mysqli_query($conn,"select *,package_assign.id as id  from package inner join package_assign on package_assign.lead_id=package.id inner join client on client.Client_Code=package_assign.firm_id;");
                    $count=1;
                  while ($row=mysqli_fetch_array($qpackage)){ 

          ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $row['Firm_Name']; ?></td>
                <td><?php echo $row['total_lead']; ?></td>
                <td><?php echo $row['total_amt']; ?></td>
                <td><?php echo $row['first_payment']; ?></td>
                <td><?php echo $row['balance']; ?></td>
                <td><?php echo $row['assign_date']; ?></td>
                    <td style="text-align:center">
                   <button type="button" class="btn btn-primary btn-rounded assidnmodal btn-icon"  style="color: aliceblue" data-id="<?php echo $row['id']; ?>"> <i class="fas fa-edit"></i> </button> 
                      <!-- <a href="api_crm/leaddelete.php?delid=<?php echo $row['id']; ?>"><button type="button"  onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a> -->
                      </td>
                  </tr>
                  <?php $count++; } ?>
                 
                </table>
              </div>
              <!-- /.card-body -->
                  </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<!--modal-->
<div class="modal fade" id="assignmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                <div class="modal-body" id="assignbody" >
                    
                  
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
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
  $(document).ready(function(){
    $('.assidnmodal').click(function(){
      let assignId=$(this).data('id');
      $.ajax({
        url:'action_clients.php',
        type:'POST',
        data:{assignId:assignId},
        success:function(data){
          $('#assignbody').html(data);
          $('#assignmodal').modal('show');
        }
      });
    });
    });
   
</script>
</body>
</html>
