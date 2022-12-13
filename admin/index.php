<?php
session_start();
include("config.php");

if(!isset($_SESSION['aid'])){
    header('location:auth-login-basic.php');
}
else{
$leadTotal=mysqli_query($conn,"select * from lead where nature='Hot'");
$leadTotalFetch=mysqli_num_rows($leadTotal);
$leadHot=mysqli_query($conn,"select * from lead where nature='Hot'");
$leadHotFetch=mysqli_num_rows($leadHot);
// $total=$leadHotFetch*100/$leadTotalFetch;
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
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<title>Admin CRM | Dashboard</title>
    
    <!-- BEGIN: Header-->
    <?php
       include('include/header.php');
       ?>
    <!-- END: Header-->
    <?php
       include('include/sidebar.php');
       ?>

    <!-- BEGIN: Main Menu-->
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
                            <h2 class="content-header-title float-start mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    
                                    <li class="breadcrumb-item active">Dashboard
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    
                </div>
            </div>
            <div class="content-body">
                <!-- Statistics card section -->
                <section id="statistics-card">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                <?php
                                    $query=mysqli_query($conn,"select * from client");
                                    $count1=mysqli_num_rows($query);
                                    ?>
                                    <div>
                                        <h2 class="fw-bolder"><?php echo $count1; ?></h2>
                                        <p class="card-text">Total Clients</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <div class="avatar-content">
                                            <i data-feather="monitor" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-4"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                <?php
                                    $query=mysqli_query($conn,"select * from lead");
                                    $count1=mysqli_num_rows($query);
                                    ?>
                                    <div>
                                        <h2 class="fw-bolder"><?php echo $count1; ?></h2>
                                        <p class="card-text">Total Leads</p>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <div class="avatar-content">
                                            <i data-feather="user-check" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-3"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                <?php
                                    $fhot=mysqli_query($conn,"select * from lead where nature='Hot'");
                                    $nhot=mysqli_num_rows($fhot);
                                    ?>
                                    <div>
                                        <h2 class="fw-bolder"><?php echo $nhot; ?></h2>
                                        <p class="card-text">Total Hot</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <div class="avatar-content">
                                            <i data-feather="monitor" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header align-items-start pb-0">
                                <?php $fcold= mysqli_query($conn,"select * from lead where nature='Cold'");
                                $ncold=mysqli_num_rows($fcold); ?>
                                    <div>
                                        <h2 class="fw-bolder"><?php echo $ncold; ?></h2>
                                        <p class="card-text">Total Cold</p>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <div class="avatar-content">
                                            <i data-feather="mail" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div id="line-area-chart-1"></div>
                            </div>
                        </div>
                       
                    </div>

                    <!-- Stats Horizontal Card -->
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                <?php $qopen=mysqli_query($conn,"select * from ticket where status = 'Open'");
                                $nopen=mysqli_num_rows($qopen); ?>
                                    <div>
                                        <h2 class="fw-bolder mb-0"><?php echo $nopen; ?></h2>
                                        <p class="card-text">Open Ticket</p>
                                    </div>
                                    <div class="avatar bg-light-primary p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="cpu" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                <?php
                                    $qprocess=mysqli_query($conn,"select * from ticket where status = 'Inprocess'");
                                    $nprocess=mysqli_num_rows($qprocess); ?>
                                    <div>
                                        <h2 class="fw-bolder mb-0"><?php echo $nprocess; ?></h2>
                                        <p class="card-text">In Process Ticket</p>
                                    </div>
                                    <div class="avatar bg-light-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="server" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                <?php
                                $qhold=mysqli_query($conn,"select * from ticket where status = 'Hold'");
                                $nhold=mysqli_num_rows($qhold); ?>
                                    <div>
                                        <h2 class="fw-bolder mb-0"><?php echo $nhold; ?></h2>
                                        <p class="card-text">Hold Ticket</p>
                                    </div>
                                    <div class="avatar bg-light-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="activity" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                <?php
                                $qclose=mysqli_query($conn,"select * from ticket where status = 'Closed'");
                                $nclose=mysqli_num_rows($qclose); ?>
                                    <div>
                                        <h2 class="fw-bolder mb-0"><?php echo $nclose; ?></h2>
                                        <p class="card-text">Closed Ticket</p>
                                    </div>
                                    <div class="avatar bg-light-warning p-50 m-0">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                   
                    
                    <!--/ Line Chart Card -->
                </section>
                <!--/ Statistics Card section-->
                <section id="apexchart">
                    <div class="row">
                        <!-- Donut Chart Starts-->
                        <div class="col-xl-6 col-12">
                            <div class="card" style="padding-bottom: 24px;">
                                <div class="card-header flex-column align-items-start">
                                    <h4 class="card-title mb-75">Lead Status</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div id="donut-chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12" id="chartjs-chart">
                            <div class="card">                   
                                <div class="card-header">
                                    <h4 class="card-title">Client Status</h4>
                                </div>
                                <div class="card-body">
                                    <canvas class="doughnut-chart-ex chartjs" data-height="275"></canvas>
                                    <div class="d-flex justify-content-between mt-3 mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                            <span class="fw-bold ms-75 me-25">Activated</span>
                                            <span><?php echo $nactivated ?></span>
                                            <i data-feather="arrow-up" class="text-success"></i>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-success"></i>
                                            <span class="fw-bold ms-75 me-25">Deactivated</span>
                                            <span><?php echo $ndeactivated ?></span>
                                            <i data-feather="arrow-down" class="text-danger"></i>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Donut Chart Ends-->
                        <!-- Apex charts section end -->
                    </div>
                </section>
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
    <!-- END: Footer-->

<script>
    
</script>
</body>
<!-- END: Body-->

</html>
<?php } ?>