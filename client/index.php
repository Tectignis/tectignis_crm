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

  <style>
    .toast-header strong{
margin-right:40px !important;
}
.toast-body{
  cursor:pointer;
  display: inline-block;
}
#calendar{
  margin-left: auto;
  margin-right: auto;
  width: 320px;
  font-family: 'Lato', sans-serif;
}
#calendar_weekdays div{
  display:inline-block;
  vertical-align:top;
}
#calendar_content, #calendar_weekdays, #calendar_header{
  position: relative;
  width: 320px;
  overflow: hidden;
  float: left;
  z-index: 10;
}
#calendar_weekdays div, #calendar_content div{
  width:40px;
  height: 40px;
  overflow: hidden;
  text-align: center;
  background-color: #FFFFFF;
  color: #787878;
}
#calendar_content{
  -webkit-border-radius: 0px 0px 12px 12px;
  -moz-border-radius: 0px 0px 12px 12px; 
  border-radius: 0px 0px 12px 12px;
}
#calendar_content div{
  float: left;
}
#calendar_content div:hover{
  background-color: #F8F8F8;
}
#calendar_header, #calendar_content div.today{
  zoom: 1;
  filter: alpha(opacity=70);
  opacity: 0.7;
}
#calendar_content div.today{
  color: #FFFFFF;
}
#calendar_header{
  width: 100%;
  height: 37px;
  text-align: center;
  background-color: #FF6860;
  padding: 18px 0;
  -webkit-border-radius: 12px 12px 0px 0px;
  -moz-border-radius: 12px 12px 0px 0px; 
  border-radius: 12px 12px 0px 0px;
}
#calendar_header h1{
  font-size: 1.5em;
  color: #FFFFFF;
  float:left;
  width:70%;
}
i[class^=icon-chevron]{
  color: #FFFFFF;
  float: left;
  width:15%;
  border-radius: 50%;
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
          <div class="col-sm-2">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <form>
            <select id="demo_overview_minimal_multiselect" class="dropbtn form-control" style="background-color:#fff;" onChange="getdata(this.value)">
            <option>Today</option>
            <option>Last Week</option>
            <option>Monthly</option>
            <option>3 Month</option>
            </select>
            </form>
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
        <div class="row">
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
              $query=mysqli_query($conn,"select * from lead where status_deal='Open'");
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
              $query=mysqli_query($conn,"select * from lead where status_deal='Closed'");
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

                <div id="calendar">
    <div id="calendar_header"><i class="icon-chevron-left"></i>          <h1></h1><i class="icon-chevron-right"></i>         </div>
    <div id="calendar_weekdays"></div>
    <div id="calendar_content"></div>
  </div>          
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
    $(function(){function c(){p();var e=h();var r=0;var u=false;l.empty();while(!u){if(s[r]==e[0].weekday){u=true}else{l.append('<div class="blank"></div>');r++}}for(var c=0;c<42-r;c++){if(c>=e.length){l.append('<div class="blank"></div>')}else{var v=e[c].day;var m=g(new Date(t,n-1,v))?'<div class="today">':"<div>";l.append(m+""+v+"</div>")}}var y=o[n-1];a.css("background-color",y).find("h1").text(i[n-1]+" "+t);f.find("div").css("color",y);l.find(".today").css("background-color",y);d()}function h(){var e=[];for(var r=1;r<v(t,n)+1;r++){e.push({day:r,weekday:s[m(t,n,r)]})}return e}function p(){f.empty();for(var e=0;e<7;e++){f.append("<div>"+s[e].substring(0,3)+"</div>")}}function d(){var t;var n=$("#calendar").css("width",e+"px");n.find(t="#calendar_weekdays, #calendar_content").css("width",e+"px").find("div").css({width:e/7+"px",height:e/7+"px","line-height":e/7+"px"});n.find("#calendar_header").css({height:e*(1/7)+"px"}).find('i[class^="icon-chevron"]').css("line-height",e*(1/7)+"px")}function v(e,t){return(new Date(e,t,0)).getDate()}function m(e,t,n){return(new Date(e,t-1,n)).getDay()}function g(e){return y(new Date)==y(e)}function y(e){return e.getFullYear()+"/"+(e.getMonth()+1)+"/"+e.getDate()}function b(){var e=new Date;t=e.getFullYear();n=e.getMonth()+1}var e=480;var t=2013;var n=9;var r=[];var i=["JANUARY","FEBRUARY","MARCH","APRIL","MAY","JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER"];var s=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];var o=["#16a085","#1abc9c","#c0392b","#27ae60","#FF6860","#f39c12","#f1c40f","#e67e22","#2ecc71","#e74c3c","#d35400","#2c3e50"];var u=$("#calendar");var a=u.find("#calendar_header");var f=u.find("#calendar_weekdays");var l=u.find("#calendar_content");b();c();a.find('i[class^="icon-chevron"]').on("click",function(){var e=$(this);var r=function(e){n=e=="next"?n+1:n-1;if(n<1){n=12;t--}else if(n>12){n=1;t++}c()};if(e.attr("class").indexOf("left")!=-1){r("previous")}else{r("next")}})})
</script>
<script>
  function getdata(val){
    let fetch=val;
    $.ajax({
      url:"action_leads.php",
      method:"POST",
      data:{fetch:fetch},
      success:function(data){
        $('#leads').html(data);
      }
    });
  }
</script>
</body>
</html>
