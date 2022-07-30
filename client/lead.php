<?php
session_start();
include("config.php");

$id=$_SESSION['id'];
$uid = $_SESSION['aname'];
if(!isset($_SESSION['id']))
{
  header("location:clientlogin.php");
}
//lead delete
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from lead where id='$id'");
    if($sql=1){
        header("location:lead.php");
    }
    }

    if(isset($_GET['gen'])){
      $id=mysqli_real_escape_string($conn,$_GET['gen']);
      $sql=mysqli_query($conn,"update lead set `deal`='1' where id='$id'");
      if($sql==1){
       header("location:deal.php");
      }
    }
    

    // if(isset($_POST['update'])){
    //   $updateName = $_POST['updateName'];
    //       $updateEmail = $_POST['updateEmail'];
    //       $updateTitle = $_POST['updateTitle'];
    //       $updateRole = $_POST['updateRole'];
    //       $image=$_POST['image'];
    //       $id=$_POST['id'];
      
         
    //       $sql="UPDATE `users` SET `name`='$updateName',`email`='$updateEmail',`job_title`='$updateTitle',`job_role`='$updateRole',`image`='$image' WHERE id='$id
    //       .'";
    //       if (mysqli_query($conn, $sql)){
    //         header("location:users.php");
    //      } else {
    //         echo "<script> alert ('connection failed !');window.location.href='manual-Attendance.php'</script>";
    //      }
    //     }

        

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Leads | CRM</title>

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
  <link href='//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
 <style>
    .card-header{
      padding:0px;
      background-color: rgba(0,0,0,.03);
      
    }
    .card-title{
float:left;
padding:25px;
    }
    .toast-header strong{
margin-right:40px !important;
}
.toast-body{
  cursor:pointer;
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
                   
                  <div class="card-header">
                  <h5 class="card-title">List of Leads</h5>    
                      <!-- <button type="button" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#exampleModal" style="margin-right: 5px;">
                    + Add Lead
                  </button> -->
                </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr no.</th>
                    
                    <th>Client Name</th>
                    <th>Client Mobile Number</th>
                    <th>Requirement</th>
                    <th>Created On</th>
                    <th>Source</th>
                    <th>Nature</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $sql=mysqli_query($conn,"select lead.*, client.*, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name where lead.deal=0 and Client_Code='$id'");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ 
          ?>
          <tbody>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row['Client_Name']; ?></td>
                    <td><?php echo $row['Mobile_Number']; ?></td>
                    <td><?php echo $row['Requirement']; ?></td>
                    <td><?php echo $row['Created_On']; ?></td>
                    <td><?php echo $row['social_media']; ?></td>
                    <td><?php echo $row['nature']; ?></td>
                    <td style="text-align:center">

                    <button  type="button" class="btn btn-primary btn-rounded btn-icon usereditid" data-toggle="modal" data-id='<?php echo $row['id']; ?>'
                                style="color: aliceblue"> <i class="fas fa-pen"></i>
                                      </button>

                     <a href="lead.php?delid=<?php echo $row['id']; ?>"><button type="button"  onclick="return confirm('Are you sure you want to delete this item')" class="btn btn-danger btn-rounded btn-icon"  style="color: aliceblue"><i class="fas fa-trash"></i> </button></a>
                     <a href="lead.php?gen=<?php echo $row['id'];?>">
                                                <button class="btn btn-warning" name="submit" >Deals</button>
                         </a>         
                        </td>
                  </tr>
                  <?php $count++; } ?>
                  </tbody>
                 
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

  <div class="modal fade"  id="exampleModal" >
      <div class="modal-dialog" >
        <div class="modal-content "style="border-radius:35px;">
        <div class="modal-header" >
             ADD LEADS
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
     <form action="api/addlead_action.php" method="post">
           <div class="modal-body">
           
                <div class="row">   
                
                
                <div class="col-8">
                <p>  </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b>Client Name :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="text" class="form-control"  name="Client_Name" ></p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Client Mobile Number :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="tel" name="Mobile_Number"  class="form-control"></p>
                </div>
                </div>

                <div class="row">   
                <div class="col-4">
               <b> Requirement :</b><br>
               </div>
               <div class="col-8">
               <p> <input type="text" name="Requirement" class="form-control">
               <input type="hidden" name="sid" value="<?php echo $id ?>" class="form-control">
               <input type="hidden" name="uid" value="<?php echo $uid ?>" class="form-control"></p>
               </div>
               </div>
           </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="leadsubmitt" >Submit</button>
            </div>
          </form>
        </div>

        <!-- /.modal-content -->
      </div>
      
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="dnkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Leads</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="action_leads.php">
                <div class="modal-body body2" >

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
        </div>

  <!-- /.content-wrapper -->
  <?php include("include/footer.php");?>

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
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      'ajax': {
          'url':'actionTableLead.php'
      },
      'columns': [
         { data: 'emp_name' },
         { data: 'email' },
         { data: 'gender' },
         { data: 'salary' },
         { data: 'city' },
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
</script>


<script>
$(document).ready(function(){
$('.usereditid').click(function(){
  let dnk = $(this).data('id');

  $.ajax({
   url: 'action_leads.php',
   type: 'post',
   data: {dnk: dnk},
   success: function(response1){ 
     $('.body2').html(response1);
     $('#dnkModal').modal('show'); 
   }
 });
});


});
</script>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
  </script>

<script>
function drop() {
  var select = document.getElementById("dropdown");
  var text = document.getElementById("textt");
  if (select.selected == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
  </script>

</body>
</html>