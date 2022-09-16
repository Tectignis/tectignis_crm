<?php
session_start();
include("config.php");
$id=$_SESSION['id'];

if(!isset($_SESSION['id']))
{
  header("location:log_client.php");
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
    <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Monika</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Clients</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Client Details</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span
                                        class="align-middle">Chat</span></a><a class="dropdown-item"
                                    href="app-email.html"><i class="me-1" data-feather="mail"></i><span
                                        class="align-middle">Email</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Client Profile</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <?php
            
                                        $sql=mysqli_query($conn,"select * from client where Client_Code='".$_SESSION['id']."'");
                                            
                                        while ($row=mysqli_fetch_array($sql)){ 
                                    ?>
                                    <div class="row">
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <a href="clinet_details.php" target="_blank">
                                               
                                                    
                                                
                                                    <?php
                                                    if($row['image']==""){
                                                        echo '<img src="app-assets/images/avatars/1-small.png" alt="User Image"
                                                        class="img-fluid rounded-circle  card-avatar"
                                                        style="width:100px;height:100px;">'; 
                                                    }
                                                    else{

                                                        ?>
                                                        <img alt="User Image" class="img-fluid rounded-circle  card-avatar" src="app-assets/images/avatars/<?php echo $row['image'] ?>" style="width:100px;height:100px;">
                                                    <?php } ?>
                                                </a>

                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Name</label>
                                                <input type="text" name="name" value="<?php echo $row['Authorized_Name']; ?>"  class="form-control"
                                                    id="inputName" placeholder="Enter Name" readonly="">
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email"  value="<?php echo $row['Email']; ?>" class="form-control"
                                                    name="email" id="email" placeholder="Email" readonly="">
                                            </div>
                                            <!-- /.form-group -->

                                            <div class="form-group">
                                                <label>Category</label>
                                                <input type="text" value="<?php echo $row['Category']; ?>"class="form-control" name="category"
                                                    id="category" placeholder="category" readonly="">
                                            </div>

                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->

                                    </div>
                                    <?php } ?>
                                </form>
                            </div>

                            <!-- /.card-body -->

                        </div>
                    </div>
                </section>



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
    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
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