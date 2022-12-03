<?php
session_start();
include("config.php");

if(!isset($_SESSION['id'])){
    header('location:../../../../auth/path/login.php');
}

$id=$_SESSION['id'];
$leadHot=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id'");
$leadHotFetch=mysqli_num_rows($leadHot);
$leadCold=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id'");
$leadColdFetch=mysqli_num_rows($leadCold);
$leadWarm=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id'");
$leadWarmFetch=mysqli_num_rows($leadWarm);
$leadBooked=mysqli_query($conn,"select * from lead where status_deal='Booked' and Firm_Name='$id'");
$leadBookedFetch=mysqli_num_rows($leadBooked);
$leadLeadClosed=mysqli_query($conn,"select * from lead where nature='Deal Closed' and Firm_Name='$id'");
$leadLeadClosedFetch=mysqli_num_rows($leadLeadClosed);
$leadSiteView=mysqli_query($conn,"select * from lead where nature='Site Visit' and Firm_Name='$id'");
$leadSiteViewFetch=mysqli_num_rows($leadSiteView);
$leadDate=mysqli_query($conn,'SELECT Created_On, (DATE_FORMAT(Created_On,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM lead WHERE year(Created_On)= year(Created_On) and Firm_Name='.$id.' GROUP BY (DATE_FORMAT(Created_On,"%M")) ORDER BY "Month" ASC');
$leadDate1=mysqli_query($conn,'SELECT Created_On, (DATE_FORMAT(Created_On,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM lead WHERE year(Created_On)= year(Created_On) and Firm_Name='.$id.' GROUP BY (DATE_FORMAT(Created_On,"%M")) ORDER BY "Month" ASC');
$ticketDate2=mysqli_query($conn,'SELECT date, (DATE_FORMAT(date,"%M")) AS "Month", COUNT(*) AS Number_of_registered_users FROM ticket WHERE year(date)= year(date) and Client_Code='.$id.' GROUP BY (DATE_FORMAT(date,"%M")) ORDER BY "Month" ASC');
$leadnature=mysqli_query($conn,"select Created_On from lead where nature='Site View' and Firm_Name='$id'");
$leadCalendar=mysqli_query($conn,"SELECT * FROM `lead` WHERE Firm_Name='$id'");

// $packageId=$_GET['packageId'];
// $qcardpackage=mysqli_query($conn,"select *,package_assign.id as id from lead inner join package_assign on lead.package=package_assign.title inner join package on package_assign.lead_id=package.id where package_assign.firm_id='$id' and package_assign.id='$packageId'");

// if(mysqli_num_rows($qcardpackage)>0){
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-calendar.css"> -->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="cal/css/demo.css"/>
    <link rel="stylesheet" href="cal/css/theme1.css"/>
    <?php
    $logosql=mysqli_query($conn,'select * from setting_system');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
      <link rel="shortcut icon" type="image/x-icon" href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
    <style>
        .cld-main {
    width: 100%;
}
.cld-number {
    padding: 0;
}
.cld-datetime{
    margin-bottom:10%;
}
    </style>

</head>


<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="row match-height" id="dashboard-ecommerce">
                <!-- Medal Card -->
                <!-- <div class="col-xl-4 col-md-6 col-12">
                    <div class="card card-congratulation-medal">
                        <?php
                                
                                $sql=mysqli_query($conn,"select * from client");  
                                $row=mysqli_fetch_array($sql)
                                ?>
                        <div class="card-body">
                            <h5>Welcome 🎉 <?php echo $row['Authorized_Name'] ?></h5>
                            <p class="card-text font-small-3">You have won gold medal</p>
                            <?php
                            $query=mysqli_query($conn,"select * from package_assign where firm_id='$id'");
                            $count1=mysqli_num_rows($query);
                                ?>
                            <h3 class="mb-75 mt-2 pt-50">
                                <a href="#"><?php echo $count1; ?></a>
                            </h3>
                            <button type="button" class="btn btn-primary">View Sales</button>
                            <img src="app-assets/images/illustration/badge.svg" class="congratulation-medal"
                                alt="Medal Pic" />
                        </div>

                    </div>
                </div> -->
                <!--/ Medal Card -->

                <!-- Statistics Card -->
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">Statistics</h4>
                            <div class="dropdown chart-dropdown">
                                <form >
                                    <input type="hidden" id="leadid" value="<?php echo $id;?>">
                                    <button class="btn btn-sm border-0 dropdown-toggle p-50" type="button"
                                        id="dropdownItem4" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Select
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem4">
                                        <a class="dropdown-item tlmt Today" href="#">Today</a>
                                        <a class="dropdown-item tlmt Last Week" href="#">Last Week</a>
                                        <a class="dropdown-item tlmt Monthly" href="#">Monthly</a>
                                        <a class="dropdown-item tlmt 3 Month" href="#">3 Month</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body statistics-body">

                            <div class="row" id="leads">
                                <?php
                                $query=mysqli_query($conn,"select * from lead where status_deal='Open' and Firm_Name='$id'");
                                $count1=mysqli_num_rows($query);
                                    ?>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-primary me-2">
                                            <div class="avatar-content">
                                                <i data-feather="trending-up" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0"><?php echo $count1; ?></h4>
                                            <p class="card-text font-small-3 mb-0">New Leads</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        $query=mysqli_query($conn,"select * from lead where Firm_Name='$id'");
                                        $count1=mysqli_num_rows($query);
                                         ?>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-info me-2">
                                            <div class="avatar-content">
                                                <i data-feather="user" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0"><?php echo $count1; ?></h4>
                                            <p class="card-text font-small-3 mb-0">Total Leads</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $query=mysqli_query($conn,"select * from lead where status_deal='Closed' and Firm_Name='$id'");
                                    $count1=mysqli_num_rows($query);
                                    ?>
                                <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-danger me-2">
                                            <div class="avatar-content">
                                                <i data-feather="box" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0"><?php echo $count1; ?></h4>
                                            <p class="card-text font-small-3 mb-0">Closed Leads</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-12">
                                    <div class="d-flex flex-row">
                                        <div class="avatar bg-light-success me-2">
                                            <div class="avatar-content">
                                                <i data-feather="dollar-sign" class="avatar-icon"></i>
                                            </div>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="fw-bolder mb-0"><?php echo $leadBookedFetch; ?></h4>
                                            <p class="card-text font-small-3 mb-0">Total Booked</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!--/ Statistics Card -->

            </div>


            <!-- <div class="row match-height">
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Monika Enterprises</h4>
                                    <div class="d-flex align-items-center">
                                        <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-primary me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">230k</h4>
                                                    <p class="card-text font-small-3 mb-0">New Leads</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-info me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">8.549k</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Leads</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-danger me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">1.423k</h4>
                                                    <p class="card-text font-small-3 mb-0">Closed Leads</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="d-flex flex-row">
                                                <div class="avatar bg-light-success me-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="my-auto">
                                                    <h4 class="fw-bolder mb-0">$9745</h4>
                                                    <p class="card-text font-small-3 mb-0">Total No Of Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->



            <div class="row match-height">
                <!-- Goal Overview Card -->
                <!-- Donut Chart Starts-->
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header flex-column align-items-start">
                            <h4 class="card-title mb-75">Lead Status </h4>

                        </div>
                        <div class="card-body">
                            <div id="donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- Donut Chart Ends-->

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lead Status </h4>
                        </div>
                        <div class="card-body">
                            <canvas class="doughnut-chart-ex chartjs" data-height="275"></canvas>
                            <div class="d-flex justify-content-between mt-3 mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                    <span class="fw-bold ms-75 me-25">Booked</span>
                                </div>
                                <div>
                                    <span><?php echo $leadBookedFetch ?></span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                    <span class="fw-bold ms-75 me-25">Lead Closed</span>
                                </div>
                                <div>
                                    <span><?php echo $leadLeadClosedFetch ?></span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <!-- <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i data-feather="tablet" class="font-medium-2 text-success"></i>
                                    <span class="fw-bold ms-75 me-25">Site View</span>
                                </div>
                                <div>
                                    <span><?php echo $leadSiteViewFetch ?></span>
                                    <i data-feather="arrow-down" class="text-danger"></i>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--/ Goal Overview Card -->
            </div>

            <div class="row match-height">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div
                            class=" card-header d-flex flex-md-row flex-column justify-content-md-between justify-content-start align-items-md-center align-items-start ">
                            <h4 class="card-title">Lead Status
                                Monthly Lead and Ticket</h4>
                            <!-- <div class="d-flex align-items-center mt-md-0 mt-1">
                                <i class="font-medium-2" data-feather="calendar"></i>
                                <input type="text" class="form-control flat-picker bg-transparent border-0 shadow-none"
                                    placeholder="YYYY-MM-DD" />
                            </div> -->
                        </div>
                        <div class="card-body">
                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div
                            class=" card-header d-flex flex-md-row flex-column justify-content-md-between justify-content-start align-items-md-center align-items-start ">
                            <h4 class="card-title">Calendar</h4>
                        </div>
                        <div class="card-body">
                        <div id="caleandars"></div> 
                        </div>
                    </div>
                </div>
              
            </div>




            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <?php include "include/footer.php"; ?>



    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- <script src="app-assets/vendors/js/extensions/toastr.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <?php include('chart.php'); ?>
    <script src="app-assets/js/scripts/charts/chart-apex.js"></script>
    <!-- END: Page JS-->

    <?php include('chart-apex.php'); ?>
    
    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script type="text/javascript" src="cal/js/caleandar.js"></script>
    <script>
      let events = [
        <?php while($leadCalendarFetch=mysqli_fetch_array($leadCalendar)){ 
          $year= date('Y', strtotime($leadCalendarFetch['sitevisit_date']));
          $month= date('m', strtotime($leadCalendarFetch['sitevisit_date']));
          $month1=$month-1;
          $date= date('d', strtotime($leadCalendarFetch['sitevisit_date']));
          ?>
  {'Date': new Date(<?php echo $year. "," .$month1. "," .$date ?>), 'Title': '<?php echo $leadCalendarFetch['Requirement'] ?>'},
  <?php } ?>
];
let settings = {};
let element = document.getElementById('caleandars');
caleandar(element, events, settings);
    </script>
    <script>
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

    </script>
    <script>
        $(document).ready(function(){

       
 $('.tlmt').click(function() {
    let fetch=$(this).text();
    // let Last_Week=$(".Last_Week").val();
    // let Monthly=$(".Monthly").val();
    // let threeMonth=$(".threeMonth").val();
    let leadid=$("#leadid").val();
    $.ajax({
      url:"action_index.php",
      method:"POST",
      data:{fetch:fetch,
        leadid:leadid
       },
      success:function(data){
        $('#leads').html(data);
      }
    });
  });
})
    </script>
</body>
<!-- END: Body-->

</html>
<?php 
// }
// echo '<div style="font-size: xxx-large;text-align: center;color: blue;">No Any Lead</div>';
?>