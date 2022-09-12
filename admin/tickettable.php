<?php
include("config.php");
if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from ticket where id='$id'");
  if($sql=1){
      header("location:tickettable.php");
  }
  }

  if(isset($_POST['compsubmit'])){
    $compid=$_POST['id'];
    $status=$_POST['category'];
    $descr=$_POST['comment'];
    $sql=mysqli_query($conn,"UPDATE `ticket` SET `status`='".$status."',`Comment`='".$descr."' WHERE id='".$compid."'");
    if($sql==1){
    }else{
      echo "Something went wrong";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin CRM | Ticket</title>

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
                  <h5 class="card-title">List of Ticket</h5>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    <th>Ticket No.</th>
                    <td>Firm Name</td>
                    <th>Subject</th>
                    <th>Description</th>
                    <th>Created On</th>
                    <th>Status</th>
                    <th>Action No.</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql=mysqli_query($conn,"select ticket.*,ticket.date as date, client.* from ticket inner join client on ticket.Client_Code=client.Client_Code");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ 
          ?>
            <tr>
                <td><?php echo $count;?></td>
                
                <td><?php echo $row['ticket_no']; ?></td>
                <td><?php echo $row['Firm_Name']; ?></td>
                <td><?php echo $row['Subject']; ?></td> 
                <td><?php echo $row['Description']; ?></td>
                <td><?php $s = $row['date'];$date = strtotime($s);echo date('d-M-Y ', $date);?></td>
                <td style="text-align:center"><?php
                                                $status=$row['status'];
                                                if($status=='0'){
                                                    echo '<span class="badge badge-success">Open</span>';
                                                }
                                                else if($status=='Open'){
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

                    <td style="text-align:center">
                   <button class="btn btn-primary btn-rounded btn-icon setting dnkediti" data-id='<?php echo $row['id']; ?>'><i class="fas fa-wrench"></i></button>
                     <a href="tickettable.php?delid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon"> <i class="fas fa-trash"></i> </button></a> </td>
                  </tr>
                  <?php $count++; } ?>
                  
                </table>
              </div>
              <div class="modal fade closemaual" id="dnkModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        
      </div>
      <div class="modal-body">
      <form method="post">
        <div class="body5">
                  </div>
        
  <div class="modal-footer">
    <button type="close" class="btn btn-default" data-dismiss="modal" name="close" id="close">Close</button>  
    <button type="submit" class="btn btn-primary" name="compsubmit" id="submit"> Submit</button>
    </div>
    </form>
    </div>
    </div>
    </div>
</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
       
        <!-- /.row -->
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include"include/footer.php";?>
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

<script>
          $(document).ready(function(){
          $('.setting').click(function(){
            let dnkk = $(this).data('id');

            $.ajax({
            url: 'api_crm/tickitmodal.php',
            type: 'post',
            data: {dnkk: dnkk},
            success: function(response5){ 
              $('.body5').html(response5);
              $('#dnkModal5').modal('show'); 
            }
          });
          });


          });
          </script>

</body>
</html>
