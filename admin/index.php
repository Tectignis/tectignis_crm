<?php
include("config.php");
$leadHot=mysqli_query($conn,"select * from lead where nature='Hot'");
$leadHotFetch=mysqli_num_rows($leadHot);
$leadCold=mysqli_query($conn,"select * from lead where nature='Cold' ");
$leadColdFetch=mysqli_num_rows($leadCold);
$leadWarm=mysqli_query($conn,"select * from lead where nature='Warm'");
$leadWarmFetch=mysqli_num_rows($leadWarm);
$qactivated=mysqli_query($conn,"select * from client where Status='Activated'");
$nactivated=mysqli_num_rows($qactivated);
$qdeactivated=mysqli_query($conn,"select * from client where Status='Deactivated'");
$ndeactivated=mysqli_num_rows($qdeactivated);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin CRM | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from client");
              $count1=mysqli_num_rows($query);
               ?>
               <h3><?php echo $count1; ?></h3>

                <p>Total Clients</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="client.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from lead");
              $count1=mysqli_num_rows($query);
               ?>
               <h3><?php echo $count1; ?></h3>

                <p>Total Leads</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="lead.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
              $fhot=mysqli_query($conn,"select * from lead where nature='Hot'");
              $nhot=mysqli_num_rows($fhot);
               ?>
               <h3><?php echo $nhot; ?></h3>

                <p>Total Hot</p>
              </div>
              <div class="icon">
              <i class="fas fa-solid fa-ticket"></i>             
             </div>
              <a href="tickettable.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <?php $fcold= mysqli_query($conn,"select * from lead where nature='Cold'");
                $ncold=mysqli_num_rows($fcold); ?>
              <h3><?php echo $ncold; ?></h3>
              <p>Total Cold</p>
              </div>
              <div class="icon">

              </div>
              <a href="leads.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fa fa-envelope-open-text"></i></span>
          <div class="info-box-content">
          <?php $qopen=mysqli_query($conn,"select * from ticket where status = 'Open'");
               $nopen=mysqli_num_rows($qopen); ?>
          <span class="info-box-text">Open Ticket</span>
          <h3><?php echo $nopen; ?></h3>
          </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-envelope-open-text"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Closed Ticket</span>
              <?php
              $qclose=mysqli_query($conn,"select * from ticket where status = 'Close'");
              $nclose=mysqli_num_rows($qclose); ?>
              <h3><?php echo $nclose; ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fa fa-signout"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Hold Ticket</span>
              <?php
              $qhold=mysqli_query($conn,"select * from ticket where status = 'Hold'");
              $nhold=mysqli_num_rows($qclose); ?>
              <h3><?php echo $nhold; ?></h3>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-signout"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">In Process Ticket</span>
              <?php
              $qprocess=mysqli_query($conn,"select * from ticket where status = 'Inprocess'");
              $nprocess=mysqli_num_rows($qprocess); ?>
              <h3><?php echo $nprocess; ?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Main row -->
     <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-warning">
                <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
                </div>
                </div>
                <div class="card-body">
                <div class="chart">
                <canvas id="warmChart"></canvas>
                </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-danger">
                <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
                </div>
                </div>
                <div class="card-body">
                <div class="chart">
                <canvas id="bookedChart"></canvas>
                </div>
                </div>
              </div>
            </div>
          </div>
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
<script>
   //piechart
   let ctx = document.getElementById("warmChart").getContext('2d');
let warmChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Warm", "Hot", "Cold"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#95a5a6",
        
      ],
      data: [<?php echo $leadWarmFetch. ',' .$leadHotFetch. ',' .$leadColdFetch ?>]
    }]
  }
});

 //piechart
 let chartx = document.getElementById("bookedChart").getContext('2d');
let bookedChart = new Chart(chartx, {
  type: 'pie',
  data: {
    labels: ["Activated", "Deactivated"],
    datasets: [{
      backgroundColor: [
        "#9b59b6",
        "#f1c40f",
      ],
      data: [<?php echo $nactivated. ',' .$ndeactivated ?>]
    }]
  }
});
</script>
</body>
</html>
