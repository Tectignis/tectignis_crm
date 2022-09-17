<?php
include("config.php");
$leadTotal=mysqli_query($conn,"select * from lead where nature='Hot'");
$leadTotalFetch=mysqli_num_rows($leadTotal);
$leadHot=mysqli_query($conn,"select * from lead where nature='Hot'");
$leadHotFetch=mysqli_num_rows($leadHot);
$total=$leadHotFetch*100/$leadTotalFetch;
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
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template/index.php"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <?php
       include('include/sidebar.php');
       ?>
    </div>
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
                            <div class="card">
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
                                            <span class="fw-bold ms-75 me-25">Desktop</span>
                                            <span>- 90%</span>
                                        </div>
                                        <div>
                                            <span>2%</span>
                                            <i data-feather="arrow-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                            <span class="fw-bold ms-75 me-25">Mobile</span>
                                            <span>- 10%</span>
                                        </div>
                                        <div>
                                            <span>8%</span>
                                            <i data-feather="arrow-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-success"></i>
                                            <span class="fw-bold ms-75 me-25">Tablet</span>
                                            <span>- 10%</span>
                                        </div>
                                        <div>
                                            <span>-5%</span>
                                            <i data-feather="arrow-down" class="text-danger"></i>
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