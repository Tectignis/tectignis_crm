<?php
session_start();
include("config.php");
if(!isset($_SESSION['id']))
{
  header("location:clientlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <style>
    .card-header{
      padding:0px;
      
    }
    .card-title{
float:left;
padding:20px;
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
            <h1>Clients</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clients</li>
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
                  <a href="addclient.php" button type="button" class="btn btn-primary float-right my-3 " style="margin-right: 5px;">
                    + Add client
                  </a>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Client Code</th>
                    <th>Firm Name</th>
                    <th>Authorized Name(s)</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action No.</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql=mysqli_query($conn,"select * from client");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ 
          ?>
            <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $row['Client_Code']; ?></td>
                <td><?php echo $row['Firm_Name']; ?></td>
                <td><?php echo $row['Authorized_Name']; ?></td>
                <td><?php echo $row['Mobile_Number']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Category']; ?></td>
                <td><?php if($row['Status']=='Activated'){
                      echo "<a href='action.php?statusyes=".$row['Client_Code']."' class='badge badge-success'>Activated</a>";
                    } else if($row['Status']=='Deactivated'){
                      echo "<a href='action.php?statusno=".$row['Client_Code']."' class='badge badge-danger'>Deactivated</a>";
                    }?></td>

                    <td style="text-align:center">
                     <a href="action.php?delidd=<?php echo $row['Client_Code']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon"> <i class="fas fa-trash"></i> </button></a> </td>
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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

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
