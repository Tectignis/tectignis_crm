<?php
session_start();
include("config.php");
// $id=35;
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
    <title>User View - Account - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <?php
    $logosql=mysqli_query($conn,'select * from setting_system');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
    <link rel="shortcut icon" type="image/x-icon"
        href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">

        <!-- BEGIN: Header-->
        <?php include "include/header.php" ?>
        <!-- END: Header-->


        <!-- BEGIN: Main Menu-->
        <?php include "include/sidebar.php" ?>

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
                            <h2 class="content-header-title float-start mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Profile
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="content-body">
                    <section class="app-user-view-account">
                        <div class="row">
                            <!-- User Sidebar -->
                            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                                <!-- User Card -->
                                <div class="card">
                                    
                                    <div class="card-body">
                                        <?php
                                            
                                            $sql=mysqli_query($conn,"select * from client where Client_Code='$id'");
                                                
                                        $row=mysqli_fetch_array($sql)
                                        ?>
                                        <div class="user-avatar-section">
                                            <div class="d-flex align-items-center flex-column">

                                                <a href="#" target="_blank">
                                                    <?php
                                                    if($_SESSION['image']==""){
                                         echo '<img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" style="height:110px;width:110px" class="img-fluid rounded-circle mt-3 mb-2"/>';
                                                    }else{  ?>
                                                <img src="../../../../../admin/images/clientImage/<?php echo $_SESSION['image'] ?>"
                                                    alt="Profile Picture" style="height:110px;width:110px" class="img-fluid rounded-circle mt-3 mb-2"/>
                                                <?php } ?>
                                                </a>
                                                <div class="user-info text-center">
                                                    <h4><?php echo $row['Firm_Name']; ?></h4>
                                                    <span
                                                        class="badge bg-light-success"><?php echo $row['Status']; ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        $query=mysqli_query($conn,"select * from package_assign where firm_id='$id'");
                                        $count1=mysqli_num_rows($query);
                                            ?>
                                        <div class="d-flex justify-content-around my-2 pt-75">
                                            <div class="d-flex align-items-start me-2">
                                                <span class="badge bg-light-primary p-75 rounded">
                                                    <i data-feather="check" class="font-medium-2"></i>
                                                </span>
                                                <div class="ms-75">
                                                    <h4 class="mb-0"><?php echo $count1; ?></h4>
                                                    <small>Total Packages</small>
                                                </div>
                                            </div>
                                            <?php
                                            $query=mysqli_query($conn,"select * from lead where Firm_Name='$id'");
                                            $count2=mysqli_num_rows($query);
                                                ?>
                                            <div class="d-flex align-items-start">
                                                <span class="badge bg-light-primary p-75 rounded">
                                                    <i data-feather="briefcase" class="font-medium-2"></i>
                                                </span>
                                                <div class="ms-75">
                                                    <h4 class="mb-0"><?php echo $count2; ?></h4>
                                                    <small>Total Leads</small>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
                                        <div class="info-container">
                                            <ul class="list-unstyled">
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Username:</span>
                                                    <span><?php echo $row['Authorized_Name'] ?></span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Email:</span>
                                                    <span><?php echo $row['Email'] ?></span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Status:</span>
                                                    <span
                                                        class="badge bg-light-success"><?php echo $row['Status'] ?></span>
                                                </li>


                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Contact:</span>
                                                    <span><?php echo $row['Mobile_Number'] ?></span>
                                                </li>
                                                <li class="mb-75">
                                                    <span class="fw-bolder me-25">Join date</span>
                                                    <span><?php echo $row['Date'] ?></span>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                <!-- /User Card -->
                            </div>
                        </div>
                </div>
                <!-- END: Content-->

                <div class="sidenav-overlay"></div>
                <div class="drag-target"></div>
            </div>
        </div>
        </div>
        </div>
        <!-- BEGIN: Footer-->
        <?php include "include/footer.php"; ?>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
        <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
        <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
        <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
        <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
        <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
        <script src="app-assets/vendors/js/extensions/polyfill.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/core/app-menu.js"></script>
        <script src="app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/modal-edit-user.js"></script>
        <script src="app-assets/js/scripts/pages/app-user-view-account.js"></script>
        <script src="app-assets/js/scripts/pages/app-user-view.js"></script>
        <!-- END: Page JS-->

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