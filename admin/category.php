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
    <title>Bootstrap Tables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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

    <!-- BEGIN: Header-->
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
                            <h2 class="content-header-title float-start mb-0">Support Table</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Support Table
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCard">
                                +
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ticket</h4>

                            </div>

                            <div class="table-responsive">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>

                                            <th>Sr.No</th>
                                            <th>Category</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>tg</td>
                                            <td>dgfg</td>
                                            <td>


                                                <button type="button" id="view" data-id="<?php echo $row['id'] ?>"
                                                    class="delete-row btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </button>


                                                <button type="button" class="delete-row btn-sm btn-info">
                                                    <i class="fas fa-edit"></i>
                                                </button>

                                                <button type="button" class="delete-row btn-sm btn-info">
                                                    <i class="fab fa-trash"></i>

                                                </button>


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

                <!-- Edit User Modal -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Customer Details</h1>

                                </div>
                                <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserFirstName">Customer Name</label>
                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                            class="form-control" placeholder="John" value="Gertrude"
                                            data-msg="Please enter your first name" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserLastName">Company Name</label>
                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                            class="form-control" placeholder="Doe" value="Barton"
                                            data-msg="Please enter your last name" />
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserEmail">Email:</label>
                                        <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                            class="form-control" value="gertrude@gmail.com"
                                            placeholder="example@domain.com" />
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="modalEditUserPhone">Contact No</label>
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                            class="form-control phone-number-mask" placeholder="+1 (609) 933-44-22"
                                            value="+1 (609) 933-44-22" />
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label" for="modalEditUserName">Whatsapp No</label>
                                        <input type="text" id="modalEditUserName" name="modalEditUserName"
                                            class="form-control" value="gertrude.dev" placeholder="john.doe.007" />
                                    </div>

                                    <div class="col-12 text-center mt-2 pt-50">
                                        <button type="submit" class="btn btn-primary me-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->




            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php
       include('include/footer.php');
       ?>
 <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Create Category</h1>
                   

                    <!-- form -->
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Category</label>
                            <div class="input-group input-group-merge">
                                <input id="modalAddCardNumber" name="modalAddCard" class="form-control add-credit-card-mask" type="text" placeholder="......." aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" />
                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                    <span class="add-card-type"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">Create</button>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <!-- END: Page JS-->
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