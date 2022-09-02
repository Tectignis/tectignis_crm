<?php
session_start();
include("config.php");
$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{
  header("location:log_client.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket | CRM</title>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
   <style>
   
   .card-header{
      padding:0px;
      background-color: rgba(0,0,0,.03);
      
    }
    .card-title{
float:left;
padding:20px;
    }
  
  .toast-header strong{
margin-right:40px !important;
}
.toast-body{
  cursor:pointer;
}
.toast{
  width: 250px;
}
a{
  text-decoration:none;
}
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
<?php
include("include/header.php");
include("include/sidebar.php");
?>
  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ticket</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Ticket</li>
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
                  <h5 class="card-title">List of Client</h5>
                  <a href="ticketform.php" button type="button" class="btn btn-primary float-right my-3 " style="margin-right: 5px;">
                    + Add Ticket
                  </a>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Ticket No.</th>
                    <th>Description</th>
                    <th>Subject</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql=mysqli_query($conn,"select * from ticket where Client_Code='$id'");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ 
          ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $row['ticket_no']; ?></td>
                <td><?php echo $row['Description']; ?></td>
                <td><?php echo $row['Subject']; ?></td>
                <td style="text-align:center"><?php
                                                $status=$row['status'];
                                             if($status=='Open'){
                                                    echo '<span class="badge badge-success">Open</span>';
                                                }
                                                else if($status=='Inprocess'){
                                                    echo '<span class="badge badge-danger">In Proccess</span>';
                                                }else if($status=='Hold'){
                                                   echo '<span class="badge badge-warning">Hold On</span>';
                                                }else if($status=='Closed'){
                                                    echo '<span class="badge badge-secondary">Closed</span>';
                                                }
                                                ?></td>

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
   
  });
</script>

</body>
</html>
