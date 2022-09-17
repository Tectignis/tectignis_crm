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
    <title>User List - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- END: Page CSS-->
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
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets\fonts\font-awesome\css\font-awesome.css">


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
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span class="fw-bolder">Flat Sell</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">4,567</h3>
                                        <span class="fw-bolder">Flat Rent</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">19,860</h3>
                                        <span class="fw-bolder">Shops / Office Sell</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">237</h3>
                                        <span class="fw-bolder">Shops / Office Rent</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <div class="card">
                        <div class="card-header border-bottom p-1">
                            <div class="head-label">
                                <h4 class="mb-0">Properties</h6>
                            </div>
                            <div class="dt-action-buttons text-end">
                                <a href="ticketform.php" button type="button" class="btn btn-primary float-right"
                                    data-bs-toggle="modal" data-bs-target="#default" style="margin-right: 5px;">
                                    + Add Property
                                </a>
                                <!-- <butto`n type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#default">
                                    Basic Modal
                                </button>` -->
                            </div>
                        </div>
                        <div class="card-body border-bottom">
                            <p class="card-title mt-2">Search & Filter</h4>
                            <div class="row">
                                <div class="col-md-4 user_role"><label class="form-label"
                                        for="UserRole">Type</label><select id="UserRole"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled selected> Select Type </option>
                                        <option value="Admin" class="text-capitalize">Flat Sell</option>
                                        <option value="Author" class="text-capitalize">Flat Rent</option>
                                        <option value="Editor" class="text-capitalize">Shop / Office Sell</option>
                                        <option value="Maintainer" class="text-capitalize">Shop / Office Rent</option>
                                    </select></div>

                                <div class="col-md-4 user_status"><label class="form-label"
                                        for="FilterTransaction">Status</label>
                                    <select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx">
                                        <option value="" disabled selected> Select Status </option>
                                        <option value="Pending" class="text-capitalize">Available</option>
                                        <option value="Active" class="text-capitalize">Not Available</option>
                                    </select>
                                </div>
                                <div class="col-md-4 user_status"><label class="form-label"
                                        for="FilterTransaction"></label>
                                    <button class="btn btn-primary mb-0 mt-2" style="">Submit</button>
                                </div>
                            </div>
                            <!-- <hr>     -->
                            <div class="row mt-1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Clients</th>
                                            <th>Mobile No.</th>
                                            <th>Type</th>
                                            <th>Cost</th>
                                            <th>Status</th>
                                            <th>Building Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Sarvesh</td>
                                            <td>1234567890</td>
                                            <td>flat sell</td>
                                            <td>999/-</td>
                                            <td>Sold</td>
                                            <td>Dreamland</td>
                                            <td>
                                                <a href="index.php" class="btn btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="index.php" class="btn btn-sm"><i class="fa fa-edit"></i></a>
                                                <a href="index.php" class="btn btn-sm"><i
                                                        class="fa fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>

    <!-- Basic Modals start -->
    <div class="demo-inline-spacing">
        <!-- Basic trigger modal -->
        <div class="basic-modal">


            <!-- Modal -->
            <div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel1">Add Property </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editUserForm" class="invoice-repeater row gy-1 pt-75" onsubmit="return false">
                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="modalEditUserFirstName">Client</label>
                                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                        class="form-control" placeholder="Client Name" Placeholder="Title" data-msg="Title" />
                                </div>
                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="modalEditUserLastName">Mobile No.</label>
                                    <input type="text" id="modalEditUserLastName" name="description"
                                        class="form-control" placeholder="Mobile No." data-msg="Description" />
                                </div>
                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="modalEditUserLastName">Building Name</label>
                                    <input type="text" id="modalEditUserLastName" name="description"
                                        class="form-control" placeholder="Building Name" data-msg="Description" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Type</label>
                                    <select id="UserRole"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled selected> Select Type </option>
                                        <option value="Admin" class="text-capitalize">Flat Sell</option>
                                        <option value="Author" class="text-capitalize">Flat Rent</option>
                                        <option value="Editor" class="text-capitalize">Shop / Office Sell</option>
                                        <option value="Maintainer" class="text-capitalize">Shop / Office Rent</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Cost</label>
                                    <input type="number" id="modalEditUserEmail" name="annualy" class="form-control"
                                        placeholder="Cost" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Close
                                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic trigger modal end -->
    </div>
    <!-- Basic Modals end -->
    <!-- END: Content-->

    <?php include "include/footer.php"; ?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-user-list.js"></script>
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
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
</body>
<!-- END: Body-->

</html>