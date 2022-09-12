<?php
include("config.php");

if(isset($_POST['logo']))
{
    $file=$_FILES['file']['name'];   
    $filedet=$_FILES['file']['tmp_name'];
    $loc="dist/img/logo/".$file;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE system_setting SET logo='$file'";
    if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New record has been added successfully !');</script>";
   } else {
      echo "<script> alert ('connection failed !');</script>";
   }
}

if(isset($_POST['favicon']))
{
    $filee=$_FILES['filee']['name'];   
    $filedet=$_FILES['filee']['tmp_name'];
    $loc="dist/img/logo/".$filee;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE system_setting SET favicon='$filee'";
    if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New record has been added successfully !');</script>";
   } else {
      echo "<script> alert ('connection failed !');</script>";
   }
}
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin CRM | Dashboard</title>
    <link rel="icon" type="image/png" sizes="32x32" href="dist/img/logo/<?php echo $fetchlogo['logo'] ?>">
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

    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


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
      
        .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px;
    padding-bottom: 27px !important;
}
.select2-container--default.select2-container--focus .select2-selection--multiple, .select2-container--default.select2-container--focus .select2-selection--single {
    border-color: #d3d9df;
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
            <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>System Setting</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"> setting</li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
            <!-- /.content-header -->

            <!-- Main content -->
            
           <!-- home -->
           <div class="row">
           <div class="col-lg-6">
      <section class="content ">
        <div class="container-fluid">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Logo</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                <form method="post" enctype="multipart/form-data" action="">
                    <div class="card-body">
                      <?php  
                        $sql=mysqli_query($conn,"select * from system_setting ");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <div class="form-group col-md-12">
                        <label for="inputName">Existing Logo</label>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" height="200" width="200" src="dist/img/logo/<?php echo $arr['logo'];?>" alt="file">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="form-group col-md-12">
                          <label for="inputName">New Logo</label>
                        </div>

                        <div class="custom-file">
                          <input type="file" name="file" class="custom-file-input" id="formFileMultiple">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group" style="margin-top:2%">
                          <input type="submit" name="logo" value="submit" class="btn btn-success ">
                        </div>

                      </div>
                      <?php }  ?>
                    </div>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </section>
                        </div>
                        <div class="col-lg-6">
      <section class="content ">
        <div class="container-fluid">
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Favicon</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <form method="post" enctype="multipart/form-data" action="">
                    <div class="card-body">
                      <?php  
                        $sql=mysqli_query($conn,"select * from system_setting");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
                      <div class="form-group col-md-12">
                        <label for="inputName">Existing Favicon</label>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                          <img class="card-img-top" height="200" width="200" src="dist/img/logo/<?php echo $arr['favicon'];?>" alt="file">
                          <div class="card-img-overlay d-flex flex-column justify-content-end">
                          </div>
                        </div>
                      </div>
                      <div class="input-group">
                        <div class="form-group col-md-12">
                          <label for="inputName">New Favicon</label>
                        </div>

                        <div class="custom-file">
                          <input type="file" name="filee" class="custom-file-input" id="formFileMultiple">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group" style="margin-top:2%">
                          <input type="submit" name="favicon" value="submit" class="btn btn-success ">
                        </div>

                      </div>
                      <?php }  ?>
                    </div>
                  </form>
                </div>

                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
        </div>
      </section>
                        </div>
                        </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include"include/footer.php";?>

      
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
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>



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
            } else {
                return false;
            }
        }
    </script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
    
    <script>
          $(document).ready(function(){
          $('.usereditid').click(function(){
            let dnk = $(this).data('id');

            $.ajax({
            url: 'action_clients.php',
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
                            window.location.href = "action_clients.php?del_id"+del_id;
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
                    })
                });
                </script>

</body>

</html>