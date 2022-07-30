<?php
include("config.php");

if(isset($_GET['del_id'])){
    $delid = $_GET['del_id'];
    $sql = mysqli_query($conn,"DELETE FROM lead WHERE id = '$delid'");
    if($sql){
      header ("location:view_clients.php"); 
     
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CRM | Dashboard</title>

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

        .card {
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
                            <h1 class="m-0">Invoices</h1>
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php">Clients</a></li>
                                <li class="breadcrumb-item active">Clients Details</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Total Invoice</h6>
                                            <h4 class="text-primary">$2,817.50 / 3</h4>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-success text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">This Month Total Invoice</h6>
                                            <h4 class="text-info">$0.00 / 0</h4>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-info text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">This Week Total Invoice</h6>
                                            <h4 class="text-warning">$0.00 / 0</h4>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-warning text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-20">Last 30 Days Total Invoice</h6>
                                            <h4 class="text-danger">$0.00 / 0</h4>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-rocket bg-danger text-white"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main row -->
                    <!-- <div class="row"> -->
                        <div class="col-12">
                        <div class="card row">
                            <div class="card-header">
                              <h3 class="card-title">Leads</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Sr No.</th>
                                    <th>Client Name</th>
                                    <th>Client Mobile No.</th>
                                    <th>Requirment</th>
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
                <td><?php echo $row['Client_Name']; ?></td>
                <td><?php echo $row['mob']; ?></td>
                <td><?php echo $row['Requirement']; ?></td>
                <td><?php echo $row['Created_On']; ?></td>  
                                    <td><div class="btn-group" role="group" aria-label="Basic outlined example">
                                        <button type="button" onclick="deleteBtn()" class="btn btn-sm btn-danger m-1 delbtn" data-id="=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></button> 
                                      </div></td>
                                  </tr>
                                  <?php $count++; } ?>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                    <!-- </div> -->

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
                            window.location.href = "view_clients.php?del_id"+del_id;
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                    })
                });
 </script>
</body>

</html>