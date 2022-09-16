<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Chartjs - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
       include('include/header.php');
       ?>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
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
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
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
                <li class="nav-item me-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
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
                            <h2 class="content-header-title float-start mb-0">Chartjs</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Charts &amp; Maps</a>
                                    </li>
                                    <li class="breadcrumb-item active">Chartjs
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <p>
                            You can easily create reuseable chart components. Read full documentation
                            <a href="https://www.chartjs.org/docs/latest/getting-started/" target="_blank">here</a>.
                        </p>
                    </div>
                </div>
                <!-- ChartJS section start -->
                <section id="chartjs-chart">
                    <div class="row">
                        <!--Bar Chart Start -->
                        <div class="col-xl-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                                    <div class="header-left">
                                        <h4 class="card-title">Latest Statistics</h4>
                                    </div>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text" class="form-control flat-picker border-0 shadow-none bg-transparent pe-0" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Bar Chart End -->

                        <!-- Horizontal Bar Chart Start -->
                        <div class="col-xl-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column">
                                    <div class="header-left">
                                        <p class="card-subtitle text-muted mb-25">Balance</p>
                                        <h4 class="card-title">$74,123</h4>
                                    </div>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text" class="form-control flat-picker border-0 shadow-none bg-transparent pe-0" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="horizontal-bar-chart-ex chartjs" data-height="400"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Horizontal Bar Chart End -->
                    </div>

                    <!-- Line Chart Starts-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <h4 class="card-title">Statistics</h4>
                                        <span class="card-subtitle text-muted">Commercial networks and enterprises</span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Line Chart Ends-->

                    <div class="row">
                        <!-- Radar Chart Starts-->
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="card-title">Radar Chart</h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div id="tooltip" class="tooltip-placeholder"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="radar-chart-ex chartjs" id="canvas" data-height="355"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Radar Chart Ends-->

                        <!-- Polar Area Chart Starts -->
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Average Skills</h4>
                                    <div class="dropdown">
                                        <i data-feather="more-vertical" class="cursor-pointer" role="button" id="heat-chart-dd" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </i>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heat-chart-dd">
                                            <a class="dropdown-item" href="#">Last 28 Days</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                            <a class="dropdown-item" href="#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="polar-area-chart-ex chartjs" data-height="350"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Polar Area Chart Ends-->
                    </div>

                    <!-- Bubble Chart Starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bubble Chart</h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <h5 class="fw-bolder mb-0 me-1">$ 100,000</h5>
                                        <span class="badge badge-light-secondary">
                                            <i class="text-danger font-small-3" data-feather="arrow-down"></i>
                                            <span class="align-middle">20%</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="bubble-chart-ex chartjs" data-height="500"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bubble Chart Ends -->

                    <div class="row">
                        <!-- Donut Chart Starts -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sessions By Device</h4>
                                </div>
                                <div class="card-body">
                                    <canvas class="doughnut-chart-ex chartjs" data-height="275"></canvas>
                                    <div class="d-flex justify-content-between mt-3 mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                            <span class="fw-bold ms-75 me-25">Desktop</span>
                                            <span>- 80%</span>
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
                        <!-- Donut Chart Starts -->

                        <!-- Scatter Chart Starts  -->
                        <div class="col-lg-8 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-baseline align-items-sm-center flex-sm-row flex-column">
                                    <h4 class="card-title">New Product Data</h4>
                                    <div class="btn-group mt-md-0 mt-1" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off" checked />
                                        <label class="btn btn-outline-primary" for="radio_option1">Daily</label>

                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" />
                                        <label class="btn btn-outline-primary" for="radio_option2">Monthly</label>

                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option3" autocomplete="off" />
                                        <label class="btn btn-outline-primary" for="radio_option3">Yearly</label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="scatter-chart-ex chartjs" data-height="415"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- Scatter Chart Ends  -->
                    </div>

                    <!-- Area Chart Starts -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-baseline flex-sm-row flex-column">
                                    <h4 class="card-title">Data Science</h4>
                                    <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
                                        <i data-feather="calendar"></i>
                                        <input type="text" class="form-control flat-picker border-0 shadow-none bg-transparent pe-0" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas class="line-area-chart-ex chartjs" data-height="450"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Area Chart Ends -->
                </section>
                <!-- ChartJS section end -->

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


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/chart.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/charts/chart-chartjs.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
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