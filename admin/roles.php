<?php
include("config.php");
?>
<?php
if(isset($_POST['update'])){
$roles = $_POST['updaterole'];

$id=$_POST['id'];

   
    $sql="UPDATE `roles` SET `roles`='$roles' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)){
      header("location:roles.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='roles.php'</script>";
   }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CRM | Roles</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <style>
        .card-header-right {
            right: 10px;
            top: 10px;
            float: right;
            padding: 0;
            position: absolute;
        }

        .btn-addnew-project {
            border: 1px solid #e2e1e1;
            border-radius: 15px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: calc(100% - 15px);
            justify-content: center;
        }

        .card, .modal-content{
            border-radius: 15px !important;
        }

        .badge,
        .btn {
            border-radius: 10px !important;
        }

        .comp-card i {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            padding: 17px 0;
            font-size: 18px;
        }

        .comp-card {
            height: 137px;
        }
        
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php include"include/header.php";?>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include"include/sidebar.php";?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Manage Roles</h1>
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addRoles" >    <i class="fa fa-plus"></i></button></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row card">

                            <div class="card-header">
                                <h3 class="card-title">Roles Table</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Role</th>
                                            <th>Permission</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                    $sql=mysqli_query($conn,"select * from roles");
                 
                  while ($row=mysqli_fetch_array($sql)){ 
          ?>
                                        <tr>
                                            <td><?php echo $row['roles']; ?></td>
                                            <td><?php echo $row['permission']; ?></td>
                                            <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-sm btn-info m-1 useredit" data-toggle="modal" data-target="#editUser" data-id="<?php echo $row['id']; ?>"><i class="fa fa-pen"></i></button>

                                                <button class="btn btn-sm btn-danger m-1 delbtn" type="button" onclick="deleteBtn()" data-id="=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button>

                                              </div></td>
                                        </tr>
                                        <?php  } ?>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
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

    <!-- Button trigger modal -->
       <!-- Edit Users Modal -->
       <div class="modal fade" id="addRoles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Create Roles</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form method="post" action="action_roles.php">
                       <div class="row">
                           <div class="col-12">
                               <div class="form-group">
                                   <label for="inputName">Role Name</label>
                                   <input type="text" name="roles" class="form-control" id="inputroles" placeholder="Enter Role">        
                               </div>
                           </div>
                 
                           <div class="col-md-12">
              
                    <div class="table-border-style">   
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="15%" style="background-color:#dee2e6;" >
                                            <div class="form-check">
                                                <input type="checkbox" style="position:relative; background-color:#dee2e6;" class="align-middle form-check-input" name="checkall" id="checkall">
                                            </div>
                                           
                                        </th>
                                        <th width="15%" class="text-dark" style="background-color:#dee2e6;">Module</th>
                                        <th width="100%" class="text-dark" style="background-color:#dee2e6;">Permissions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                                                                                                                            <tr>

                                                     <td width="10%">
                                                        <div class="form-check">
                                                             <input type="checkbox" class="align-middle ischeck form-check-input" name="module[]" id="users" value="users" data-id="User">
                                                        </div>
                                                       
                                                    </td>
                                                    <td width="10%"><label class="ischeck" data-id="User">Users</label></td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_124" name="permissions[]" type="checkbox" value="View">
                                                                    <label for="permission_124" class="form-check-labe font-weight-500">View</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_User" id="permission_4" name="permissions[]" type="checkbox" value="Create">
                                                                    <label for="permission_4" class="form-check-labe font-weight-500">Create</label>
                                                                </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_User" id="permission_5" name="permissions[]" type="checkbox" value="Edit">
                                                                    <label for="permission_5" class="form-check-labe font-weight-500">Edit</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_User" id="permission_6" name="permissions[]" type="checkbox" value="Delete">
                                                                    <label for="permission_6" class="form-check-labe font-weight-500">Delete</label>
                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                    </td>
                                                </tr>
                                                                                                           <tr>

                                                     <td width="10%">
                                                        <div class="form-check">
                                                             <input type="checkbox" class="align-middle ischeck form-check-input" name="module[]" id="role"  data-id="Role">
                                                        </div>
                                                       
                                                    </td>
                                                    <td width="10%"><label class="ischeck" data-id="Role">Role</label></td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_124" name="permissions[]" type="checkbox" value="View">
                                                                    <label for="permission_124" class="form-check-labe font-weight-500">View</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Role" id="permission_8" name="permissions[]" type="checkbox" value="Create">
                                                                    <label for="permission_8" class="form-check-labe font-weight-500">Create</label>
                                                                </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Role" id="permission_9" name="permissions[]" type="checkbox" value="Edit">
                                                                    <label for="permission_9" class="form-check-labe font-weight-500">Edit</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Role" id="permission_10" name="permissions[]" type="checkbox" value="Delete">
                                                                    <label for="permission_10" class="form-check-labe font-weight-500">Delete</label>
                                                                </div>
                                                                                                                                                                                                                                            </div>
                                                    </td>
                                                </tr>
                                                                                                                                            <tr>

                                                     <td width="10%">
                                                        <div class="form-check">
                                                             <input type="checkbox" class="align-middle ischeck form-check-input" name="module[]" id="lead" data-id="Lead">
                                                        </div>
                                                       
                                                    </td>
                                                    <td width="10%"><label class="ischeck" data-id="Lead">Lead</label></td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_124" name="permissions[]" type="checkbox" value="View">
                                                                    <label for="permission_124" class="form-check-labe font-weight-500">View</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Lead" id="permission_44" name="permissions[]" type="checkbox" value="Create">
                                                                    <label for="permission_44" class="form-check-labe font-weight-500">Create</label>
                                                                </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Lead" id="permission_45" name="permissions[]" type="checkbox" value="Edit">
                                                                    <label for="permission_45" class="form-check-labe font-weight-500">Edit</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Lead" id="permission_46" name="permissions[]" type="checkbox" value="Delete">
                                                                    <label for="permission_46" class="form-check-labe font-weight-500">Delete</label>
                                                                </div>
                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                       
                                                                                                                    </div>
                                                    </td>
                                                </tr>
                                                                                                                                            <tr>

                                                     <td width="10%">
                                                        <div class="form-check">
                                                             <input type="checkbox" class="align-middle ischeck form-check-input" name="module[]" id="client" data-id="Deal">
                                                        </div>
                                                       
                                                    </td>
                                                    <td width="10%"><label class="ischeck" data-id="Deal">Client</label></td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_124" name="permissions[]" type="checkbox" value="View">
                                                                    <label for="permission_124" class="form-check-labe font-weight-500">View</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Deal" id="permission_66" name="permissions[]" type="checkbox" value="Create">
                                                                    <label for="permission_66" class="form-check-labe font-weight-500">Create</label>
                                                                </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Deal" id="permission_67" name="permissions[]" type="checkbox" value="Edit">
                                                                    <label for="permission_67" class="form-check-labe font-weight-500">Edit</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Deal" id="permission_68" name="permissions[]" type="checkbox" value="Delete">
                                                                    <label for="permission_68" class="form-check-labe font-weight-500">Delete</label>
                                                                </div>
                                                                                                                                                                                                                                                       
                                                                                                                                                                                                                                                        
                                                                                                                    </div>
                                                    </td>
                                                </tr>
                                                                                                                                            <tr>

                                                     <td width="10%">
                                                        <div class="form-check">
                                                             <input type="checkbox" class="align-middle ischeck form-check-input" name="module[]" id="system_setting" data-id="Estimation">
                                                        </div>
                                                       
                                                    </td>
                                                    <td width="10%"><label class="ischeck" data-id="Estimation">System Setting</label></td>
                                                    <td>
                                                        <div class="row">
                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_124" name="permissions[]" type="checkbox" value="View">
                                                                    <label for="permission_124" class="form-check-labe font-weight-500">View</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_121" name="permissions[]" type="checkbox" value="Create">
                                                                    <label for="permission_121" class="form-check-labe font-weight-500">Create</label>
                                                                </div>
                                                                                                                                                                                                                                                                                                                    <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_122" name="permissions[]" type="checkbox" value="Edit">
                                                                    <label for="permission_122" class="form-check-labe font-weight-500">Edit</label>
                                                                </div>
                                                                                                                                                                                                                                                        <div class="col-3 form-check">
                                                                    <input class="form-check-input isscheck isscheck_Estimation" id="permission_123" name="permissions[]" type="checkbox" value="Delete">
                                                                    <label for="permission_123" class="form-check-labe font-weight-500">Delete</label>
                                                                </div>
                                                                                                                                                                                                                                                        
                                                                                                                                                                                </div>
                                                    </td>
                                                </tr>
                                                                                                                                          
                                                                                                                                            
                                                                                                                                           
                                                                                                                                           
                                               
                                                                                                                                            


                                                                                                                                          
                                                                                                                                          
                                                                                                                                           
                                                                                                                                           
                                                                                                                                          
                                                                                                                                          
                                                                                                                                          
                                                                                                                                                                                                                            
                                                                                                                                         
                                                                                                                                          
                                                                                                                                          
                                                                                                                                                                                                                        
                                                                                                                                           
                                                                                                                                           
                                                                                       
                                                
                                                
                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
               
        </div>
                           </div>
                       </div>
                       <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" name="submitt" class="btn btn-primary">Create</button>
               </div>
               </div>
                   </form>
               </div>
               
           </div>
       </div>
   </div>
    <!-- Edit Users Modal -->
    <div class="modal fade" id="dnkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post">
                <div class="modal-body body1" >
                    
                  
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<script>
    $(function () {
      $("#example1").DataTable({
        // "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
        function deleteBtn() {

            swal({
                title: "Are You Sure...?",
                text: "This action can not be undone. Do you want to continue?",
                icon: "warning",
                buttons: ["No", "Yes"],
            });

            mobile_err = true;

            mobile_check();

            if (mobile_err = true) {
                return true;
            }
            else { return false; }
        }
    </script>

<script>
            $(document).ready(function(){
                $('.delbtn').click(function(e){
                    e.preventDefault();
                    let del_id = $(this).data('id');
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your imaginary file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "action_roles.php?del_id"+del_id;
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                    })
                });
                </script>

<script>
          $(document).ready(function(){
          $('.useredit').click(function(){
            let dnk = $(this).data('id');

            $.ajax({
            url: 'role_modal.php',
            type: 'post',
            data: {dnk: dnk},
            success: function(response1){ 
              $('.body1').html(response1);
              $('#dnkModal').modal('show'); 
            }
          });
          });

          });
          </script>
</body>

</html>