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
    <title>Billing &amp; Plans - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
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
                            <h2 class="content-header-title float-start mb-0">Billing &amp; Plans</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Account Settings</a>
                                    </li>
                                    <li class="breadcrumb-item active">Billing &amp; Plans
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
                                <a class="nav-link" href="account.php">
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
                                <a class="nav-link active" href="billing&plans.php">
                                    <i data-feather="bookmark" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Billings &amp; Plans</span>
                                </a>
                            </li>
                            <!-- notification -->
                            <li class="nav-item">
                                <a class="nav-link" href="notification.php">
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

                        <!-- billing and plans  -->

                        <!-- current plan -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Current plan</h4>
                            </div>
                            <div class="card-body my-2 py-25">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2 pb-50">
                                            <h5>Your Current Plan is <strong>Basic</strong></h5>
                                            <span>A simple start for everyone</span>
                                        </div>
                                        <div class="mb-2 pb-50">
                                            <h5>Active until Dec 09, 2021</h5>
                                            <span>We will send you a notification upon Subscription expiration</span>
                                        </div>
                                        <div class="mb-1">
                                            <h5>$199 Per Month <span class="badge badge-light-primary ms-50">Popular</span></h5>
                                            <span>Standard plan for small to medium businesses</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="alert alert-warning mb-2" role="alert">
                                            <h6 class="alert-heading">We need your attention!</h6>
                                            <div class="alert-body fw-normal">your plan requires update</div>
                                        </div>
                                        <div class="plan-statistics pt-1">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="fw-bolder">Days</h5>
                                                <h5 class="fw-bolder">4 of 30 Days</h5>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-50">4 days remaining until your plan requires update</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary me-1 mt-1" data-bs-toggle="modal" data-bs-target="#pricingModal">
                                            Upgrade Plan
                                        </button>
                                        <button class="btn btn-outline-danger cancel-subscription mt-1">Cancel Subscription</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / current plan -->

                        <!-- payment methods -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Payment Methods</h4>
                            </div>
                            <div class="card-body my-1 py-25">
                                <div class="row gx-4">
                                    <div class="col-lg-6">
                                        <form id="creditCardForm" class="row gx-2 gy-1 validate-form" onsubmit="return false">
                                            <div class="col-12">
                                                <div class="form-check form-check-inline mb-1">
                                                    <input name="collapsible-payment" class="form-check-input" type="radio" id="collapsible-payment-cc" checked />
                                                    <label class="form-check-label" for="collapsible-payment-cc">Credit/Debit/ATM Card</label>
                                                </div>
                                                <div class="form-check form-check-inline mb-1">
                                                    <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                                                    <label class="form-check-label" for="collapsible-payment-cash">PayPal account</label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-0">
                                                <label class="form-label" for="addCardNumber">Card Number</label>
                                                <div class="input-group input-group-merge">
                                                    <input id="addCardNumber" name="addCard" class="form-control add-credit-card-mask" type="text" placeholder="5637 8172 1290 7898" aria-describedby="addCard2" data-msg="Please enter your credit card number" />
                                                    <span class="input-group-text cursor-pointer p-25" id="addCard2">
                                                        <span class="add-card-type"></span>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label" for="addCardName">Name On Card</label>
                                                <input type="text" id="addCardName" class="form-control" placeholder="John Doe" />
                                            </div>

                                            <div class="col-6 col-md-3">
                                                <label class="form-label" for="addCardExpiryDate">Exp. Date</label>
                                                <input type="text" id="addCardExpiryDate" class="form-control add-expiry-date-mask" placeholder="MM/YY" />
                                            </div>

                                            <div class="col-6 col-md-3">
                                                <label class="form-label" for="addCardCvv">CVV</label>
                                                <input type="text" id="addCardCvv" class="form-control add-cvv-code-mask" maxlength="3" placeholder="cvv" />
                                            </div>

                                            <div class="col-12">
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check form-switch form-check-primary me-25">
                                                        <input type="checkbox" class="form-check-input" id="addSaveCard" checked />
                                                        <label class="form-check-label" for="addSaveCard">
                                                            <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                            <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                        </label>
                                                    </div>
                                                    <label class="form-check-label fw-bolder" for="addSaveCard"> Save Card for future billing? </label>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2 pt-1">
                                                <button type="submit" class="btn btn-primary me-1">Save Changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                            </div>
                                            <div></div>
                                            <input type="hidden" />
                                        </form>
                                    </div>
                                    <div class="col-lg-6 mt-2 mt-lg-0">
                                        <h6 class="fw-bolder mb-2">My Cards</h6>
                                        <div class="added-cards">
                                            <div class="cardMaster rounded border p-2 mb-1">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <div class="card-information">
                                                        <img class="mb-1 img-fluid" src="app-assets/images/icons/payments/mastercard.png" alt="Master Card" />
                                                        <div class="d-flex align-items-center mb-50">
                                                            <h6 class="mb-0">Tom McBride</h6>
                                                            <span class="badge badge-light-primary ms-50">Primary</span>
                                                        </div>
                                                        <span class="card-number">∗∗∗∗ ∗∗∗∗ 9856</span>
                                                    </div>
                                                    <div class="d-flex flex-column text-start text-lg-end">
                                                        <div class="d-flex order-sm-0 order-1 mt-1 mt-sm-0">
                                                            <button class="btn btn-outline-primary me-75" data-bs-toggle="modal" data-bs-target="#editCard">
                                                                Edit
                                                            </button>
                                                            <button class="btn btn-outline-secondary">Delete</button>
                                                        </div>
                                                        <span class="mt-2">Card expires at 12/24</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cardMaster border rounded p-2">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <div class="card-information">
                                                        <img class="mb-1 img-fluid" src="app-assets/images/icons/payments/visa.png" alt="Visa Card" />
                                                        <h6>Mildred Wagner</h6>
                                                        <span class="card-number">∗∗∗∗ ∗∗∗∗ 5896</span>
                                                    </div>
                                                    <div class="d-flex flex-column text-start text-lg-end">
                                                        <div class="d-flex order-sm-0 order-1 mt-1 mt-sm-0">
                                                            <button class="btn btn-outline-primary me-75" data-bs-toggle="modal" data-bs-target="#editCard">
                                                                Edit
                                                            </button>
                                                            <button class="btn btn-outline-secondary">Delete</button>
                                                        </div>
                                                        <span class="mt-2">Card expires at 02/24</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / payment methods -->

                        <!-- billing address -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Billing Address</h4>
                            </div>
                            <div class="card-body my-2 py-50">
                                <form id="formAccountSettings" class="validate-form" onsubmit="return false">
                                    <div class="row">
                                        <div class="mb-1 col-md-6">
                                            <label for="companyName" class="form-label">Company Name</label>
                                            <input type="text" id="companyName" name="companyName" class="form-control" placeholder="PIXINVENT" data-msg="Please enter company name" />
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="billingEmail" class="form-label">Billing Email</label>
                                            <input class="form-control" type="text" id="billingEmail" name="billingEmail" placeholder="john.doe@example.com" data-msg="Please enter billing email" />
                                        </div>
                                        <div class="mb-1 col-md-6">
                                            <label for="taxId" class="form-label">Tax ID</label>
                                            <input type="text" id="taxId" name="taxId" class="form-control" placeholder="Enter Tax ID" />
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="vatNumber" class="form-label">VAT Number</label>
                                            <input class="form-control" type="text" id="vatNumber" name="vatNumber" placeholder="Enter VAT Number" />
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="mobileNumber" class="form-label">Mobile</label>
                                            <input class="form-control account-number-mask" type="text" id="mobileNumber" name="mobileNumber" placeholder="Enter Mobile Number" />
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="country" class="form-label">Country</label>
                                            <select class="form-select select2" id="country">
                                                <option selected="">USA</option>
                                                <option>Canada</option>
                                                <option>UK</option>
                                                <option>Germany</option>
                                                <option>France</option>
                                            </select>
                                        </div>

                                        <div class="mb-1 col-12">
                                            <label for="billingAddress" class="form-label">Billing Address</label>
                                            <input type="text" class="form-control" id="billingAddress" name="billingAddress" placeholder="Billing Address" />
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="state" class="form-label">State</label>
                                            <input class="form-control" type="text" id="state" name="state" placeholder="Enter State" />
                                        </div>

                                        <div class="mb-1 col-md-6">
                                            <label for="zipCode" class="form-label">Zip Code</label>
                                            <input type="text" class="form-control account-zip-code" id="zipCode" name="zipCode" placeholder="Enter Zip Code" maxlength="6" />
                                        </div>
                                    </div>

                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-1">Save changes</button>
                                        <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- / billing address -->

                        <!-- billing history table -->
                        <div class="card">
                            <table class="invoice-list-table table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>#</th>
                                        <th><i data-feather="trending-up"></i></th>
                                        <th>Total</th>
                                        <th class="text-truncate">Issued Date</th>
                                        <th class="text-truncate">Due Date</th>
                                        <th>Balance</th>
                                        <th>Invoice Status</th>
                                        <th class="cell-fit">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- / billing history table -->

                        <!--/ billing and plans -->
                    </div>
                </div>
                <!-- pricing modal  -->
                <div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <div id="pricing-plan">
                                    <!-- title text and switch button -->
                                    <div class="text-center">
                                        <h1 id="pricingModalTitle">Subscription Plan</h1>
                                        <p class="mb-3">
                                            All plans include 40+ advanced tools and features to boost your product. Choose the best plan to fit your
                                            needs.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-center mb-2 pb-50">
                                            <h6 class="me-1 mb-0">Monthly</h6>
                                            <div class="form-check form-switch">
                                                <input type="checkbox" class="form-check-input" id="priceSwitch" />
                                                <label class="form-check-label" for="priceSwitch"></label>
                                            </div>
                                            <h6 class="ms-50 mb-0">Annually</h6>
                                        </div>
                                    </div>
                                    <!--/ title text and switch button -->

                                    <!-- pricing plan cards -->
                                    <div class="row pricing-card">
                                        <!-- basic plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card basic-pricing border text-center shadow-none">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot1.svg" class="mb-2 mt-5" alt="svg img" />
                                                    <h3>Basic</h3>
                                                    <p class="card-text">A simple start for everyone</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span class="pricing-basic-value fw-bolder text-primary font-large-3 lh-1">0</span>
                                                            <sub class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">100 responses a month</li>
                                                        <li class="list-group-item">Unlimited forms and surveys</li>
                                                        <li class="list-group-item">Unlimited fields</li>
                                                        <li class="list-group-item">Basic form creation tools</li>
                                                        <li class="list-group-item">Up to 2 subdomains</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-success mt-2">Your current plan</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ basic plan -->

                                        <!-- standard plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card standard-pricing border-primary text-center shadow-none">
                                                <div class="card-body">
                                                    <div class="pricing-badge text-end">
                                                        <span class="badge rounded-pill badge-light-primary">Popular</span>
                                                    </div>
                                                    <img src="app-assets/images/illustration/Pot2.svg" class="mb-1" alt="svg img" />
                                                    <h3>Standard</h3>
                                                    <p class="card-text">For small to medium businesses</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span class="pricing-standard-value fw-bolder text-primary font-large-3 lh-1">49</span>
                                                            <sub class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">Unlimited responses</li>
                                                        <li class="list-group-item">Unlimited forms and surveys</li>
                                                        <li class="list-group-item">Instagram profile page</li>
                                                        <li class="list-group-item">Google Docs integration</li>
                                                        <li class="list-group-item">Custom “Thank you” page</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ standard plan -->

                                        <!-- enterprise plan -->
                                        <div class="col-12 col-lg-4">
                                            <div class="card enterprise-pricing border text-center shadow-none">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2" alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan my-2">
                                                        <div class="d-flex justify-content-center plan-price">
                                                            <sup class="d-block font-medium-1 fw-bold text-primary mt-2">$</sup>
                                                            <span class="pricing-enterprise-value fw-bolder text-primary font-large-3 lh-1">99</span>
                                                            <sub class="pricing-duration text-body font-medium-1 fw-bold mt-3">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start fw-bold">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ enterprise plan -->
                                    </div>
                                    <!--/ pricing plan cards -->

                                    <!-- pricing free trial -->
                                    <div class="text-center">
                                        <p>Still not convinced? Start with a 14-day FREE trial!</p>
                                        <button class="btn btn-primary">Start your trial</button>
                                    </div>
                                    <!--/ pricing free trial -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing modal  -->
                <!-- edit card modal  -->
                <div class="modal fade" id="editCard" tabindex="-1" aria-labelledby="editCardTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <h1 class="text-center mb-1" id="editCardTitle">Edit Card</h1>
                                <p class="text-center">Edit your saved card details</p>

                                <!-- form -->
                                <form id="editCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                                    <div class="col-12">
                                        <label class="form-label" for="modalEditCardNumber">Card Number</label>
                                        <div class="input-group input-group-merge">
                                            <input id="modalEditCardNumber" name="modalEditCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" value="5637 8172 1290 7898" aria-describedby="modalEditCard2" data-msg="Please enter your credit card number" />
                                            <span class="input-group-text cursor-pointer p-25" id="modalEditCard2">
                                                <span class="edit-card-type"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="modalEditCardName">Name On Card</label>
                                        <input type="text" id="modalEditCardName" class="form-control" placeholder="John Doe" />
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="modalEditCardExpiryDate">Exp. Date</label>
                                        <input type="text" id="modalEditCardExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label class="form-label" for="modalEditCardCvv">CVV</label>
                                        <input type="text" id="modalEditCardCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                                    </div>

                                    <div class="col-12">
                                        <div class="d-flex align-items-center">
                                            <div class="form-check form-switch form-check-primary me-25">
                                                <input type="checkbox" class="form-check-input" id="editSaveCard" checked />
                                                <label class="form-check-label" for="editSaveCard">
                                                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                </label>
                                            </div>
                                            <label class="form-check-label fw-bolder" for="editSaveCard">Save Card for future billing?</label>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-1 mt-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ edit card modal  -->

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
    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
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
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-pricing.js"></script>
    <script src="app-assets/js/scripts/pages/modal-add-new-cc.js"></script>
    <script src="app-assets/js/scripts/pages/modal-edit-cc.js"></script>
    <script src="app-assets/js/scripts/pages/page-account-settings-billing.js"></script>
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