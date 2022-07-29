<?php
session_start();
include("config.php");

$id=$_SESSION['id'];
if(!isset($_SESSION['id']))
{
  header("location:clientlogin.php");
}
$leadHot=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id'");
$leadHotFetch=mysqli_num_rows($leadHot);
$leadCold=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id'");
$leadColdFetch=mysqli_num_rows($leadCold);
$leadWarm=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id'");
$leadWarmFetch=mysqli_num_rows($leadWarm);
$leadBooked=mysqli_query($conn,"select * from lead where nature='Booked' and Firm_Name='$id'");
$leadBookedFetch=mysqli_num_rows($leadBooked);
$leadLeadClosed=mysqli_query($conn,"select * from lead where nature='Lead Closed' and Firm_Name='$id'");
$leadLeadClosedFetch=mysqli_num_rows($leadLeadClosed);
$leadSiteView=mysqli_query($conn,"select * from lead where nature='Site View' and Firm_Name='$id'");
$leadSiteViewFetch=mysqli_num_rows($leadSiteView);
$leadDate=mysqli_query($conn,'SELECT Created_On, (DATE_FORMAT(Created_On,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM lead WHERE year(Created_On)= year(Created_On) and Firm_Name='.$id.' GROUP BY (DATE_FORMAT(Created_On,"%M")) ORDER BY "Month" ASC');
$leadDate1=mysqli_query($conn,'SELECT Created_On, (DATE_FORMAT(Created_On,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM lead WHERE year(Created_On)= year(Created_On) and Firm_Name='.$id.' GROUP BY (DATE_FORMAT(Created_On,"%M")) ORDER BY "Month" ASC');
$ticketDate2=mysqli_query($conn,'SELECT date, (DATE_FORMAT(date,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM ticket WHERE year(date)= year(date) and Client_Code='.$id.' GROUP BY (DATE_FORMAT(date,"%M")) ORDER BY "Month" ASC');
$leadnature=mysqli_query($conn,"select Created_On from lead where nature='Site View' and Firm_Name='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | CRM</title>

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
  <!-- calendar -->
  <link rel="stylesheet" href="cal/dist/simple-calendar.css">
  <link rel="stylesheet" href="cal/assets/demo.css">
  

  <style>
    .toast-header strong{
margin-right:40px !important;
}
.toast-body{
  cursor:pointer;
  display: inline-block;
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
          <div class="col-sm-4">
            <h1 class="m-0">Dashboard</h1>
            <form onclick="getdata(this.value)">
            <input type="hidden" id="leadid" value="<?php echo $id;?>">
            <select id="demo_overview_minimal_multiselect " class="dropbtn form-control" style="background-color:#fff;" >
            <option>select</option>
            <option>Today</option>
            <option>Last Week</option>
            <option>Monthly</option>
            <option>3 Month</option>
            </select>
            </form>
          </div><!-- /.col -->
          <?php
          $leadreminder=mysqli_query($conn,"select * from lead where Firm_Name='$id'");
          $leadreminderfetch=mysqli_fetch_array($leadreminder);
          ?>
          <div class="col-sm-2">
            <div class="card">
              <div class="card-header"></div>
            </div>
          </div>
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
        <div class="row" id="leads">
         <!-- ./col -->
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from lead where Firm_Name='$id'");
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
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from lead where status_deal='Open' and Firm_Name='$id'");
               $count1=mysqli_num_rows($query);
                ?>
               <h3><?php echo $count1; ?></h3>

                <p>New Leads</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="lead.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from lead where status_deal='Closed' and Firm_Name='$id'");
               $count1=mysqli_num_rows($query);
                ?>
               <h3><?php echo $count1; ?></h3>

                <p>Closed Leads</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="lead.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
              $query=mysqli_query($conn,"select * from ticket where client_code='$id'");
               $count1=mysqli_num_rows($query);
                ?>
               <h3><?php echo $count1; ?></h3>

                <p>Total No of Ticket</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="lead.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <section>
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

        <section>
          <div class="row">
            <div class="col-md-6">
              <div class="card card-success">
                <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>
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
                <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                </div>

              </div>
            </div>
            <script>
      var areaChartData = {
      labels  : [<?php while($areafetch=mysqli_fetch_array($leadDate)){echo '"'.$areafetch['Month'].'",';} ?>],
      datasets: [
        {
          label               : 'Leads',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php while($areafetch=mysqli_fetch_array($leadDate1)){echo $areafetch['Number_of_registered_users'].',';} ?>]
        },
        {
          label               : 'Tickets',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php while($areafetch=mysqli_fetch_array($ticketDate2)){echo $areafetch['Number_of_registered_users'].',';} ?>]
        },
      ]
    }
     </script> 
            <div class="col-md-6">
              <div class="card bg-gradient-primary d-none">
                <div class="card-footer bg-transparent">
              
                </div>
                </div>

                <div id="container" class="calendar-container"></div>    
              </div>
          </div>
        </section>
        
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
    labels: ["Booked", "Lead closed", "Site View"],
    datasets: [{
      backgroundColor: [
        "#9b59b6",
        "#f1c40f",
        "#e74c3c"
      ],
      data: [<?php echo $leadBookedFetch. ',' .$leadLeadClosedFetch. ',' .$leadSiteViewFetch ?>]
    }]
  }
});




    
//- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })


    //calendar
    var $calendar;
  $(document).ready(function () {
    let container = $("#container").simpleCalendar({
      fixedStartDay: 0, // begin weeks by sunday
      disableEmptyDetails: true,
      events: [
        // generate new event after tomorrow for one hour
      
        {
          startDate: new Date(new Date().setHours(new Date().getHours() + 11)).toDateString(),
          endDate: new Date(new Date().setHours(new Date().getHours() +12)).toISOString(),
          summary: 'Visit of the Eiffel Tower'
        },
        // // generate new event for yesterday at noon
        // {
        //   startDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 12, 0)).toISOString(),
        //   endDate: new Date(new Date().setHours(new Date().getHours() - new Date().getHours() - 11)).getTime(),
        //   summary: 'Restaurant'
        // },
        // // generate new event for the last two days
        // {
        //   startDate: new Date(new Date().setHours(new Date().getHours() - 48)).toISOString(),
        //   endDate: new Date(new Date().setHours(new Date().getHours() - 24)).getTime(),
        //   summary: 'Visit of the Louvre'
        // }
      ],

    });
    $calendar = container.data('plugin_simpleCalendar')
  });
</script>
<script>
  function getdata(val){
    let fetch=$(".dropbtn").val();
    let leadid=$("#leadid").val();
    $.ajax({
      url:"action_leads.php",
      method:"POST",
      data:{fetch:fetch,
        leadid:leadid},
      success:function(data){
        $('#leads').html(data);
      }
    });
  }
</script>

</body>
<script src="cal/dist/jquery.simple-calendar.js"></script>
</html>
