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
    <title>Security - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
     <?php include "include/header.php"; ?>
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
                            <h2 class="content-header-title float-start mb-0">Security</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Security
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
                                <a class="nav-link" href="admin_account.php">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Security</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="system-setting.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">System Setting</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link" href="page-account-settings-connections.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>

                        <!-- security -->

                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-body pt-1">
                                <!-- form -->
                                <form action="update_account.php" method="POST">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-old-password">Current password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="account-old-password" name="password" placeholder="Enter current password" data-msg="Please current password" />
                                                <div class="input-group-text cursor-pointer">
                                                    <i data-feather="eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-new-password">New Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" id="account-new-password" name="new_password" class="form-control" placeholder="Enter new password" />
                                                <div class="input-group-text cursor-pointer">
                                                    <i data-feather="eye"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="account-retype-new-password">Retype New Password</label>
                                            <div class="input-group form-password-toggle input-group-merge">
                                                <input type="password" class="form-control" id="account-retype-new-password" name="confirm-new-password" placeholder="Confirm your new password" />
                                                <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="fw-bolder">Password requirements:</p>
                                            <ul class="ps-1 ms-25">
                                                <li class="mb-50">Minimum 8 characters long - the more, the better</li>
                                                <li class="mb-50">At least one lowercase character</li>
                                                <li>At least one number, symbol, or whitespace character</li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" namw="change_password" class="btn btn-primary me-1 mt-1">Update Password</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                        </div>
                        <!--/ security -->
                    </div>
                </div>
                <!-- two factor auth modal -->
                <div class="modal fade" id="twoFactorAuthModal" tabindex="-1" aria-labelledby="twoFactorAuthTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-1" id="twoFactorAuthTitle">Select Authentication Method</h1>
                                <p class="text-center mb-3">
                                    you also need to select a method by which the proxy
                                    <br />
                                    authenticates to the directory serve
                                </p>

                                <div class="custom-options-checkable">
                                    <input class="custom-option-item-check" type="radio" name="twoFactorAuthRadio" id="twoFactorAuthApps" value="apps-auth" checked />
                                    <label for="twoFactorAuthApps" class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2 mb-2">
                                        <span><i data-feather="settings" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <span>
                                            <span class="custom-option-item-title h3">Authenticator Apps</span>
                                            <span class="d-block mt-75">
                                                Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.
                                            </span>
                                        </span>
                                    </label>

                                    <input class="custom-option-item-check" type="radio" name="twoFactorAuthRadio" value="sms-auth" id="twoFactorAuthSms" />
                                    <label for="twoFactorAuthSms" class="custom-option-item d-flex align-items-center flex-column flex-sm-row px-3 py-2">
                                        <span><i data-feather="message-square" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <span>
                                            <span class="custom-option-item-title h3">SMS</span>
                                            <span class="d-block mt-75">We will send a code via SMS if you need to use your backup login method.</span>
                                        </span>
                                    </label>
                                </div>

                                <button id="nextStepAuth" class="btn btn-primary float-end mt-3">
                                    <span class="me-50">Continue</span>
                                    <i data-feather="chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / two factor auth modal -->

                <!-- add authentication apps modal -->
                <div class="modal fade" id="twoFactorAuthAppsModal" tabindex="-1" aria-labelledby="twoFactorAuthAppsTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-apps">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-2 pb-50" id="twoFactorAuthAppsTitle">Add Authenticator App</h1>

                                <h4>Authenticator Apps</h4>
                                <p>
                                    Using an authenticator app like Google Authenticator, Microsoft Authenticator, Authy, or 1Password, scan the
                                    QR code. It will generate a 6 digit code for you to enter below.
                                </p>

                                <div class="d-flex justify-content-center my-2 py-50">
                                    <img class="img-fluid" src="app-assets/images/icons/qrcode.png" width="122" alt="QR Code" />
                                </div>

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">ASDLKNASDA9AHS678dGhASD78AB</h4>
                                    <div class="alert-body fw-normal">
                                        If you having trouble using the QR code, select manual entry on your app
                                    </div>
                                </div>

                                <form class="row gy-1" onsubmit="return false">
                                    <div class="col-12">
                                        <input class="form-control" id="authenticationCode" type="text" placeholder="Enter authentication code" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn btn-outline-secondary mt-2 me-1" data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary mt-2">
                                            <span class="me-50">Continue</span>
                                            <i data-feather="chevron-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / add authentication apps modal-->

                <!-- add authentication sms modal-->
                <div class="modal fade" id="twoFactorAuthSmsModal" tabindex="-1" aria-labelledby="twoFactorAuthSmsTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg two-factor-auth-sms">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 mx-50">
                                <h1 class="text-center mb-2 pb-50" id="twoFactorAuthSmsTitle">`</h1>
                                <h4>Verify Your Mobile Number for SMS</h4>
                                <p>Enter your mobile phone number with country code and we will send you a verification code.</p>
                                <form class="row gy-1 mt-1" onsubmit="return false">
                                    <div class="col-12">
                                        <input class="form-control phone-number-mask" type="text" placeholder="Mobile number with country code" />
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="reset" class="btn btn-outline-secondary mt-1 me-1" data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary mt-1">
                                            <span class="me-50">Continue</span>
                                            <i data-feather="chevron-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / add authentication sms modal-->

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
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="app-assets/js/scripts/pages/page-account-settings-security.js"></script>
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