<?php 
session_start();
include("config.php");
if(!isset($_SESSION['id'])){
    header('location:../../../../auth/path/login.php');
}
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
    <title>Package Card</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.js"></script>
    <?php
    $logosql=mysqli_query($conn,'select * from setting_system');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
      <link rel="shortcut icon" type="image/x-icon" href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
       include('include/header.php');
       ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php
       include('include/sidebar.php');
       ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Package Card</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Packages
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Examples -->
                <section id="card-demo-example">
                    <div class="row">
                        <?php 
                        $firm_id_check=$_SESSION['id'];
                        $qsidepackage=mysqli_query($conn,"select *,package_assign.id as id from package inner join package_assign on package.id=package_assign.lead_id where package_assign.firm_id='$firm_id_check'");
                        while($fsidepackage=mysqli_fetch_array($qsidepackage)){ ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card earnings-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1 class="card-title mb-1" style="font-size:2.6rem"><a class="d-flex align-items-center" href="package/<?php echo $fsidepackage['id'] ?>"><span style="text-transform:capitalize" ><?php echo $fsidepackage['title'] ?></span></a></h1>
                                            <h5 class="font-small-4">Leads Received - <span style="color:black;"><b><?php 
                                            $pac=$fsidepackage['title'];
                                            $leadsql=mysqli_query($conn,"select * from lead inner join package_assign on lead.package=package_assign.title where lead.Firm_Name='$firm_id_check' and lead.package='$pac'");
                                            $countlead=mysqli_num_rows($leadsql);
                                            echo $countlead ?></b></span></h5>
                                            <h5 class="font-small-4">Total Cash - <span style="color:black;"><b><i class="fas fa-rupee-sign"></i> <?php echo $fsidepackage['total_amt'] ?></b></span></h5>
                                            <h5 class="font-small-4">Payment Received - <span style="color:black;"><b><i class="fas fa-rupee-sign"></i> <?php echo $fsidepackage['first_payment'] ?></span></b></h5>
                                        </div>
                                        <!-- <div class="col-md-7">
                                            <canvas id="myChart<?php echo $fsidepackage['id'] ?>"></canvas>
                                            <script type="text/javascript">
                                                window.onload = function () { 
                                                    var data = {
                                                        labels: [
                                                            "Red",
                                                            "Yellow"
                                                        ],
                                                        datasets: [{
                                                            data: [300, 100],
                                                            backgroundColor: [
                                                                "#28c76f",
                                                                "#28c76f66",
                                                            ],
                                                            hoverBackgroundColor: [
                                                                "#FF6283",
                                                                "#36A2EB",
                                                            ]
                                                        }]
                                                    };
                                                    var promisedDeliveryChart = new Chart(document.getElementById(
                                                        'myChart<?php echo $fsidepackage['id'] ?>'), {
                                                        type: 'doughnut',
                                                        data: data,
                                                        options: {
                                                            responsive: true,
                                                            legend: {
                                                                display: false
                                                            }
                                                        }
                                                    });
                                                    Chart.pluginService.register({
                                                        beforeDraw: function (chart) {
                                                            var width<?php echo $fsidepackage['id'] ?> = chart.chart.width<?php echo $fsidepackage['id'] ?>,
                                                                height<?php echo $fsidepackage['id'] ?> = chart.chart.height<?php echo $fsidepackage['id'] ?>,
                                                                ctx<?php echo $fsidepackage['id'] ?> = chart.chart.ctx<?php echo $fsidepackage['id'] ?>;
                                                            ctx<?php echo $fsidepackage['id'] ?>.restore();
                                                            var fontSize = (height<?php echo $fsidepackage['id'] ?> / 114).toFixed(2);
                                                            ctx<?php echo $fsidepackage['id'] ?>.font = fontSize + "em sans-serif";
                                                            ctx<?php echo $fsidepackage['id'] ?>.textBaseline = "middle";
                                                            var text<?php echo $fsidepackage['id'] ?> = "75%",
                                                                textX<?php echo $fsidepackage['id'] ?> = Math.round((width<?php echo $fsidepackage['id'] ?> - ctx<?php echo $fsidepackage['id'] ?>
                                                                    .measureText(text<?php echo $fsidepackage['id'] ?>).width<?php echo $fsidepackage['id'] ?>) / 2),
                                                                textY<?php echo $fsidepackage['id'] ?> = height<?php echo $fsidepackage['id'] ?> / 2;
                                                            ctx<?php echo $fsidepackage['id'] ?>.fillText(text<?php echo $fsidepackage['id'] ?>, textX<?php echo $fsidepackage['id'] ?>, textY<?php echo $fsidepackage['id'] ?>);
                                                            ctx<?php echo $fsidepackage['id'] ?>.save();
                                                        }
                                                    });
                                                }
                                            </script>



                                        </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </section>
                <!-- Examples -->


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php
       include('include/footer.php');
       ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- <script src="app-assets/vendors/js/extensions/toastr.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <?php include('piechart.php'); ?>
    <!-- END: Page JS-->
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
</body>
<!-- END: Body-->

</html>