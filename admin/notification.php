<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, index template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Notifications - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include "include/header.php"; ?>

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include "include/sidebar.php"; ?>

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
                            <h2 class="content-header-title float-start mb-0">Notifications</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Notifications
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
                        <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link" href="account.php>
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link" href="security.php">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Security</span>
                                </a>
                            </li>
                            <!-- billing and plans -->
                            <li class="nav-item">
                                <a class="nav-link" href="billing&plans.php">
                                    <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Billings &amp; Plans</span>
                                </a>
                            </li>
                            <!-- notification -->
                            <li class="nav-item">
                                <a class="nav-link active" href="notification.php">
                                    <i data-feather="bell" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Notifications</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link" href="connection.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>

                        <!-- notifications -->

                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Notifications</h4>
                            </div>
                            <div class="card-body pt-2">
                                <h5 class="mb-0">
                                    We need permission from your browser to show notifications. <strong>Request permission</strong>
                                </h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-nowrap text-center border-bottom">
                                    <thead>
                                        <tr>
                                            <th class="text-start">Type</th>
                                            <th>✉️ Email</th>
                                            <th>🖥 Browser</th>
                                            <th>👩🏻‍💻 App</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-start">New for you</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck2" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck3" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">Account activity</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck4" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">A new browser used to sign in</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck9" checked />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start">A new device is linked</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck10" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck11" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-body mt-50">
                                <form onsubmit="return false">
                                    <div class="row gy-2">
                                        <div class="col-md-6">
                                            <h5 class="mb-1">When should we send you notifications?</h5>
                                            <select id="sendNotification" class="form-select" name="sendNotification">
                                                <option>Full Access Always</option>
                                                <option>Only when I'm online</option>
                                                <option>Never</option>
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--/ notifications -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


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