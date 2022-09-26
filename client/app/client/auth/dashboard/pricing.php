<?php
session_start();
   include("config.php");



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
    <title>Pricing - Vuexy - Bootstrap HTML admin template</title>
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
    <link rel="stylesheet" type="text/css" href="aprp-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/page-pricing.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .MultiCarousel {
            float: left;
            overflow: hidden;
            padding: 15px;
            width: 75%;
            position: relative;
        }

        .MultiCarousel {
            Height: 100%;
        }

        .MultiCarousel .MultiCarousel-inner {
            transition: 1s ease all;
            float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item {
            float: left;
        }

        .MultiCarousel .MultiCarousel-inner .item>div {
            text-align: center;
            margin: 10px;
            background: #f1f1f1;
            color: #666;
        }

        .MultiCarousel .leftLst,
        .MultiCarousel .rightLst {
            position: absolute;
            border-radius: 50%;
            top: calc(50% - 20px);
        }

        .MultiCarousel .leftLst {
            left: 0;
        }

        .MultiCarousel .rightLst {
            right: 0;
        }

        .MultiCarousel .leftLst.over,
        .MultiCarousel .rightLst.over {
            pointer-events: none;
            background: #ccc;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
    <div class="modal fade text-start gff" id="large" tabindex="-1" aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Large Modal</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" method="post" style="font-size:40px;">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>Code:
                                    </b></label>
                                    <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>001</b></label>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>Package
                                        Name:</b></label>
                                        <label class="form-label" for="modalAddCardNumber" id="packag1" style="font-size:20px;"><b>aaa</b></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber"
                                    style="font-size:20px;"><b>Name:</b></label>
                                    <label class="form-label" for="modalAddCardNumber" id="namew" style="font-size:20px;"><b>aaa</b></label>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>Start
                                        Date:</b></label>
                                    <label class="form-label" for="modalAddCardNumber" id="start" style="font-size:20px;"><b></b></label>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber"
                                    style="font-size:20px;"><b>Email:</b></label>
                                    <label class="form-label" for="modalAddCardNumber" id="email" style="font-size:20px;"><b></b></label>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>End
                                        Date:</b></label>
                                        <label class="form-label" for="modalAddCardNumber" id="end" style="font-size:20px;"><b>aaa</b></label>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber" style="font-size:20px;"><b>Contact
                                        No:</b></label>
                                        <label class="form-label" for="modalAddCardNumber" id="phone" id="namew" style="font-size:20px;"><b></b></label>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber"
                                    style="font-size:20px;"><b>Leads:</b></label>
                                    <label class="form-label" for="modalAddCardNumber" id="lead" style="font-size:20px;"><b>aaa</b></label>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="modalAddCardNumber"
                                    style="font-size:20px;"><b>Cost:</b></label>
                                    <label class="form-label" for="modalAddCardNumber"  id="price" style="font-size:20px;"><b>aaa</b></label>
                            </div>


                        </div>
                </div>
                <div class="modal-footer" >
                    <div id="butt" style="font-size:25px"></div>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- BEGIN: Header-->
    <?php include "include/header.php"; ?>
    <!-- END: Header-->


    <!-- BEGIN: Mainu-->
    <?php include "include/sidebar.php"; ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="pricing-plan">
                    <!-- title text and switch button -->
                    <div class="text-center">
                        <h1 class="mt-5">Pricing Plans</h1>
                        <p class="mb-2 pb-75">
                            All plans include 40+ advanced tools and features to boost your product. Choose the best
                            plan to fit your needs.
                        </p>
                        <div class="d-flex align-items-center justify-content-center mb-5 pb-50">
                            <h6 class="me-1 mb-0">Monthly</h6>
                            <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="priceSwitch" />
                                <label class="form-check-label" for="priceSwitch"></label>
                            </div>
                            <h6 class="ms-50 mb-0">Annually</h6>
                        </div>
                    </div>
                    <!--/ title text and switch button -->


                    <div class="container">
                        <div class="row" style="justify-content:center">
                            <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"
                                data-interval="1000">
                                <div class="MultiCarousel-inner">
                                    <?php
                                    $price=mysqli_query($conn,"select * from package");
                                    while($fetchprice=mysqli_fetch_array($price)){
                                    ?>
                                    <div class="item">
                                        <!-- enterprise plan -->

                                        <div class="pad15">
                                            <form action="" method="post">
                                                <input type="hidden" value="<?php echo $fetchprice['total_amt'] ?>" name="amt">
                                                <input type="hidden" value="<?php echo $fetchprice['package_name'] ?>"
                                                    name="packagename">
                                                <input type="hidden" value="<?php echo $id ?>" name="id">
                                                <input type="hidden" value="<?php echo $firm ?>" name="firm">
                                                <input type="hidden" value="<?php echo $email ?>" name="email">
                                                <input type="hidden" value="<?php echo $mob ?>" name="mob">
                                                <input type="hidden" value="<?php echo $fetchprice['created_date'] ?>" name="start">
                                                <input type="hidden" value="<?php echo $fetchprice['end_date'] ?>" name="end">
                                                <input type="hidden" value="<?php echo $fetchprice['total_lead'] ?>" name="lead">
                                                <div class="card enterprise-pricing text-center">
                                                    <div class="card-body">
                                                        <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                            alt="svg img" />
                                                        <h3><?php echo $fetchprice['package_name'] ?></h3>
                                                        <p class="card-text">Solution for big organizations</p>
                                                        <div class="annual-plan">
                                                            <div class="plan-price mt-2">
                                                                <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                                <span
                                                                    class="pricing-enterprise-value fw-bolder text-primary"><?php echo $fetchprice['total_amt'] ?></span>
                                                                <sub
                                                                    class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                            </div>
                                                            <small class="annual-pricing d-none text-muted"><?php echo $fetchprice['yearly_amt'] ?> / Year</small>
                                                        </div>
                                                        <ul class="list-group list-group-circle text-start">
                                                            <li class="list-group-item">PayPal payments</li>
                                                            <li class="list-group-item">Logic Jumps</li>
                                                            <li class="list-group-item">File upload with 5GB storage
                                                            </li>
                                                            <li class="list-group-item">Custom domain support</li>
                                                            <li class="list-group-item">Stripe integration</li>
                                                        </ul>
                                                        <a href="ui?id=<?php echo $fetchprice['id'] ?>" class="btn btn-outline-primary mt-2 w-100 " 
                                                             >
                                                            Upgrade
</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!--/ enterprise plan -->
                                    </div>
                                    <?php } ?>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pad15">
                                            <!-- enterprise plan -->
                                            <div class="card enterprise-pricing text-center">
                                                <div class="card-body">
                                                    <img src="app-assets/images/illustration/Pot3.svg" class="mb-2"
                                                        alt="svg img" />
                                                    <h3>Enterprise</h3>
                                                    <p class="card-text">Solution for big organizations</p>
                                                    <div class="annual-plan">
                                                        <div class="plan-price mt-2">
                                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                            <span
                                                                class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                            <sub
                                                                class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                        </div>
                                                        <small class="annual-pricing d-none text-muted"></small>
                                                    </div>
                                                    <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item">PayPal payments</li>
                                                        <li class="list-group-item">Logic Jumps</li>
                                                        <li class="list-group-item">File upload with 5GB storage</li>
                                                        <li class="list-group-item">Custom domain support</li>
                                                        <li class="list-group-item">Stripe integration</li>
                                                    </ul>
                                                    <button class="btn w-100 btn-outline-primary mt-2">Upgrade</button>
                                                </div>
                                            </div>
                                            <!--/ enterprise plan -->
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary leftLst">
                                    <</button> <button class="btn btn-primary rightLst">>
                                </button>
                            </div>
                        </div>


                        <!-- pricing plan cards -->
                        <!-- <div class="row pricing-card">
                        <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="card basic-pricing text-center">
                                        <div class="card-body">
                                            <img src="app-assets/images/illustration/Pot1.svg" class="mb-2 mt-5" alt="svg img" />
                                            <h3>Basic</h3>
                                            <p class="card-text">A simple start for everyone</p>
                                            <div class="annual-plan">
                                                <div class="plan-price mt-2">
                                                    <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                    <span class="pricing-basic-value fw-bolder text-primary">0</span>
                                                    <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                </div>
                                                <small class="annual-pricing d-none text-muted"></small>
                                            </div>
                                            <ul class="list-group list-group-circle text-start">
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

                                <div class="col-12 col-md-4">
                                    <div class="card standard-pricing popular text-center">
                                        <div class="card-body">
                                            <div class="pricing-badge text-end">
                                                <span class="badge rounded-pill badge-light-primary">Popular</span>
                                            </div>
                                            <img src="app-assets/images/illustration/Pot2.svg" class="mb-1" alt="svg img" />
                                            <h3>Standard</h3>
                                            <p class="card-text">For small to medium businesses</p>
                                            <div class="annual-plan">
                                                <div class="plan-price mt-2">
                                                    <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                    <span class="pricing-standard-value fw-bolder text-primary">49</span>
                                                    <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                </div>
                                                <small class="annual-pricing d-none text-muted"></small>
                                            </div>
                                            <ul class="list-group list-group-circle text-start">
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
                                <div class="col-12 col-md-4">
                                    <div class="card enterprise-pricing text-center">
                                        <div class="card-body">
                                            <img src="app-assets/images/illustration/Pot3.svg" class="mb-2" alt="svg img" />
                                            <h3>Enterprise</h3>
                                            <p class="card-text">Solution for big organizations</p>
                                            <div class="annual-plan">
                                                <div class="plan-price mt-2">
                                                    <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                    <span class="pricing-enterprise-value fw-bolder text-primary">99</span>
                                                    <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                                                </div>
                                                <small class="annual-pricing d-none text-muted"></small>
                                            </div>
                                            <ul class="list-group list-group-circle text-start">
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
                            </div>
                        </div>
                    </div> -->
                        <!--/ pricing plan cards -->

                        <!-- pricing free trial -->
                        <div class="pricing-free-trial">
                            <div class="row">
                                <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
                                    <div class="pricing-trial-content d-flex justify-content-between">
                                        <div class="text-center text-md-start mt-3">
                                            <h3 class="text-primary">Still not convinced? Start with a 14-day FREE
                                                trial!</h3>
                                            <h5>You will get full access to with all the features for 14 days.</h5>
                                            <button class="btn btn-primary mt-2 mt-lg-3">Start 14-day FREE
                                                trial</button>
                                        </div>

                                        <img src="app-assets/images/illustration/pricing-Illustration.svg"
                                            class="pricing-trial-img img-fluid" alt="svg img" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ pricing free trial -->

                        <!-- pricing faq -->
                        <div class="pricing-faq">
                            <h3 class="text-center">FAQ's</h3>
                            <p class="text-center">Let us help answer the most common questions.</p>
                            <div class="row my-2">
                                <div class="col-12 col-lg-10 col-lg-offset-2 mx-auto">
                                    <!-- faq collapse -->
                                    <div class="accordion accordion-margin" id="accordionExample">
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    role="button" data-bs-target="#collapseOne" aria-expanded="false"
                                                    aria-controls="collapseOne">
                                                    Does my subscription automatically renew?
                                                </button>
                                            </h2>

                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Pastry pudding cookie toffee bonbon jujubes jujubes powder topping.
                                                    Jelly beans gummi bears sweet roll
                                                    bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie
                                                    macaroon cookie muffin cupcake candy
                                                    caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie
                                                    biscuit marzipan. Jujubes donut
                                                    marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu
                                                    icing cheesecake.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    role="button" data-bs-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Can I store the item on an intranet so everyone has access?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Tiramisu marshmallow dessert halvah bonbon cake gingerbread. Jelly
                                                    beans chocolate pie powder. Dessert
                                                    pudding chocolate cake bonbon bear claw cotton candy cheesecake.
                                                    Biscuit fruitcake macaroon carrot cake.
                                                    Chocolate cake bear claw muffin chupa chups pudding.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    role="button" data-bs-target="#collapseThree" aria-expanded="false"
                                                    aria-controls="collapseThree">
                                                    Am I allowed to modify the item that I purchased?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly
                                                    jelly macaroon icing jelly beans
                                                    soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar
                                                    plum. Dessert jelly-o sweet muffin
                                                    chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow
                                                    pastry. Bonbon biscuit pastry topping
                                                    toffee dessert gummies. Topping apple pie pie croissant cotton candy
                                                    dessert tiramisu.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ pricing faq -->
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include "include/footer.php"; ?>
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
    <!-- <script src="app-assets/js/scripts/pages/page-pricing.js"></script> -->
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
        $(document).ready(function () {
            var itemsMainDiv = ('.MultiCarousel');
            var itemsDiv = ('.MultiCarousel-inner');
            var itemWidth = "";

            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();
            $(window).resize(function () {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);

                    if (bodyWidth >= 1600) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 600) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({
                        'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers
                    });
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst');
                var rightBtn = ('.rightLst');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                } else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
    </script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
    $(document).on("click", ".modal1", function () {
       
    let id = $(this).data('id');
    let name = $(this).data('name');
    let email = $(this).data('email');
    let phone = $(this).data('phone');
    let price = $(this).data('price');
    let packageName = $(this).data('packagename');
    let start = $(this).data('start');
    let end = $(this).data('end');
    let leads = $(this).data('leads');

    $("#packag1").text(packageName);
    $("#namew").text(name);
    $("#email").text(email);
    $("#phone").text(phone);
    $("#price").text(price);
    $("#start").text(start);
    $("#end").text(end);
    $("#lead").text(leads);
    $("#large").modal('show');
    $.ajax({
      url: "pay.php",
      type: "POST",
      data: {
        id: id,
        name: name,
        email: email,
        phone: phone,
        price: price,
      },
      cache: false,
      success: function (res5) {
        $("#butt").html(res5);
      },
    });
  });
    </script>
    <script>
//         $(document).on('click', '#priceSwitch', function () {
//     if ($(this).is(':checked')) {
//         // $(".annual-pricing").removeClass('d-none').html('USD ' + enterpriseAnnualPlan + ' / year');
//         $(".annual-pricing").function(){
//     let month = parseFloat($('.annual-pricing').closest(".card").find(".pricing-enterprise-value").text()) || 0;
//     $('.annual-pricing').closest(".card").find(".annual-pricing").text(month);  
//     $('.pricing-enterprise-year').css('display','block');
//     $('.pricing-enterprise-value').css('display','none');
//     }
// }
//     });
    </script>
</body>
<!-- END: Body-->

</html>