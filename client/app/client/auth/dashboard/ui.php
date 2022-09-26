<?php
include("config.php");
$id=$_GET['id'];
$fetchsql=mysqli_query($conn,"select * from client WHERE `Client_Code`='35'");
$ress=mysqli_fetch_array($fetchsql);
$code=$ress['Client_Code'];
$firm=$ress['Firm_Name'];
$email=$ress['Email'];
$mob=$ress['Mobile_Number'];
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <style></style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>User View - Security - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .showdiv {
            display: none;
        }
    </style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

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
            </div>
            <div class="content-body">
                <section class="app-user-view-security">
                    <div class="row">
                        <!-- User Sidebar -->
                        <div class="col-xl-3 col-lg-3 col-md-3 order-1 order-md-0">
                            <?php
                            $threesql=mysqli_query($conn,"select * from package_assign inner join package where package.id='$id'");
                            $threefetch=mysqli_fetch_array($threesql);
                            ?>
                            <div class="card border-primary">
                                <form>

                                    <div class="card-body">
                                        <div class="justify-content-between align-items-start">
                                            <span class="badge bg-light-primary">Standard</span>
                                            <div class="d-flex justify-content-center">
                                                <sup class="h5 pricing-currency text-primary mt-1 mb-0"><i
                                                        class="fa fa-inr" aria-hidden="true"></i></sup>
                                                <span
                                                    class="fw-bolder display-5 mb-0 text-primary"><?php echo $threefetch['total_amt'] ?></span>
                                            </div>
                                        </div>
                                        <ul class="ps-1 mb-2 mt-2">
                                            <li class="mb-50">No Discount</li>
                                            <li class="mb-50">1 Month</li>
                                            <li>Basic Support</li>
                                        </ul>

                                        <span>By choosing 1 months plan you could save ₹14,880.00!</span>
                                        <div class="d-grid w-100 mt-2">
                                            <a href="#large" class="btn btn-primary w-100 modal1"
                                                data-id="<?php echo $code ?>" data-name="<?php echo $firm ?>"
                                                data-email="<?php echo $email ?>" data-phone="<?php echo $mob ?>"
                                                data-price="<?php echo $threefetch['total_amt'] ?>"
                                                data-packageName="<?php echo $threefetch['package_name'] ?>"
                                                data-start="<?php echo $threefetch['created_date'] ?>"
                                                data-end="<?php echo $threefetch['end_date'] ?>"
                                                data-leads="<?php echo $threefetch['total_lead'] ?>">
                                                Upgrade Plan
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ User Sidebar -->
                        <!-- User Sidebar -->
                        <div class="col-xl-3 col-lg-3 col-md-3 order-1 order-md-0">
                            <?php
                            $sixsql=mysqli_query($conn,"select * from package_assign inner join package where package.id='$id'");
                            $sixfetch=mysqli_fetch_array($sixsql);
                            ?>
                            <div class="card border-primary">
                                <form>

                                    <div class="card-body">
                                        <div class="justify-content-between align-items-start">
                                            <span class="badge bg-light-primary">Standard</span>
                                            <div class="d-flex justify-content-center">
                                                <sup class="h5 pricing-currency text-primary mt-1 mb-0"><i
                                                        class="fa fa-inr" aria-hidden="true"></i></sup>
                                                <?php
                                                        $amt=$sixfetch['total_amt'];
                                                        $dis=$sixfetch['3moth_discount'];
                                                        $todis=($amt*$dis)/100;
                                                        $total_dis=$amt-$dis;
                                                        $total_month=$total_dis*3;
                                                        ?>
                                                <span
                                                    class="fw-bolder display-5 mb-0 text-primary"><?php echo $total_month ?></span>
                                            </div>
                                        </div>
                                        <ul class="ps-1 mb-2 mt-2">
                                            <li class="mb-50"><?php echo $sixfetch['3moth_discount']?>% Discount </li>
                                            <li class="mb-50">3 Month</li>
                                            <li>Basic Support</li>
                                        </ul>

                                        <span>By choosing 3 months plan you could save ₹14,880.00!</span>
                                        <div class="d-grid w-100 mt-2">
                                            <a href="#" class="btn btn-primary w-100 modal2"
                                                data-id="<?php echo $code ?>" data-name="<?php echo $firm ?>"
                                                data-email="<?php echo $email ?>" data-phone="<?php echo $mob ?>"
                                                data-price="<?php echo $total_month ?>"
                                                data-packageName="<?php echo $sixfetch['package_name'] ?>"
                                                data-start="<?php echo $sixfetch['created_date'] ?>"
                                                data-end="<?php echo $sixfetch['end_date'] ?>"
                                                data-leads="<?php echo $sixfetch['total_lead'] ?>">
                                                Upgrade Plan
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Sidebar -->
                        <div class="col-xl-3 col-lg-3 col-md-3 order-1 order-md-0">
                            <?php
                            $twelvesql=mysqli_query($conn,"select * from package_assign inner join package where package.id='$id'");
                            $twelvefetch=mysqli_fetch_array($twelvesql);
                            ?>
                            <div class="card border-primary">
                                <form>

                                    <div class="card-body">
                                        <div class="justify-content-between align-items-start">
                                            <span class="badge bg-light-primary">Standard</span>
                                            <div class="d-flex justify-content-center">
                                                <sup class="h5 pricing-currency text-primary mt-1 mb-0"><i
                                                        class="fa fa-inr" aria-hidden="true"></i></sup>
                                                <?php
                                                        $amt=$twelvefetch['total_amt'];
                                                        $dis=$twelvefetch['3moth_discount'];
                                                        $todis=($amt*$dis)/100;
                                                        $total_dis=$amt-$dis;
                                                        $total_month=$total_dis*6;
                                                        ?>
                                                <span
                                                    class="fw-bolder display-5 mb-0 text-primary"><?php echo $total_month ?></span>
                                            </div>
                                        </div>
                                        <ul class="ps-1 mb-2 mt-2">
                                            <li class="mb-50"><?php echo $twelvefetch['6month_discount']?>% Discount
                                            </li>
                                            <li class="mb-50">6 Month</li>
                                            <li>Basic Support</li>
                                        </ul>

                                        <span>By choosing 6 months plan you could save ₹14,880.00!</span>
                                        <div class="d-grid w-100 mt-2">
                                            <a href="#" class="btn btn-primary w-100 modal3"
                                                data-id="<?php echo $code ?>" data-name="<?php echo $firm ?>"
                                                data-email="<?php echo $email ?>" data-phone="<?php echo $mob ?>"
                                                data-price="<?php echo $total_month ?>"
                                                data-packageName="<?php echo $twelvefetch['package_name'] ?>"
                                                data-start="<?php echo $twelvefetch['created_date'] ?>"
                                                data-end="<?php echo $twelvefetch['end_date'] ?>"
                                                data-leads="<?php echo $twelvefetch['total_lead'] ?>">
                                                Upgrade Plan
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ User Sidebar -->

                        <!-- User Sidebar -->
                        <div class="col-xl-3 col-lg-3 col-md-3 order-1 order-md-0">
                            <?php
                            $yearsql=mysqli_query($conn,"select * from package_assign inner join package where package.id='$id'");
                            $yearfetch=mysqli_fetch_array($yearsql);
                            ?>
                            <div class="card border-primary">
                                <form>

                                    <div class="card-body">
                                        <div class="justify-content-between align-items-start">
                                            <span class="badge bg-light-primary">Standard</span>
                                            <div class="d-flex justify-content-center">
                                                <sup class="h5 pricing-currency text-primary mt-1 mb-0"><i
                                                        class="fa fa-inr" aria-hidden="true"></i></sup>
                                                <?php
                                                        $amt=$yearfetch['total_amt'];
                                                        $dis=$yearfetch['1year_discount'];
                                                        $todis=($amt*$dis)/100;
                                                        $total_dis=$amt-$dis;
                                                        $total_month=$total_dis*12;
                                                        ?>
                                                <span
                                                    class="fw-bolder display-5 mb-0 text-primary"><?php echo $total_month ?></span>
                                            </div>
                                        </div>
                                        <ul class="ps-1 mb-2 mt-2">
                                            <li class="mb-50"><?php echo $yearfetch['6month_discount']?>% Discount
                                            </li>
                                            <li class="mb-50">1 Year</li>
                                            <li>Basic Support</li>
                                        </ul>

                                        <span>By choosing 1 year plan you could save ₹14,880.00!</span>
                                        <div class="d-grid w-100 mt-2">
                                            <a href="#" class="btn btn-primary w-100 modal4"
                                                data-id="<?php echo $code ?>" data-name="<?php echo $firm ?>"
                                                data-email="<?php echo $email ?>" data-phone="<?php echo $mob ?>"
                                                data-price="<?php echo $total_month ?>"
                                                data-packageName="<?php echo $yearfetch['package_name'] ?>"
                                                data-start="<?php echo $yearfetch['created_date'] ?>"
                                                data-end="<?php echo $yearfetch['end_date'] ?>"
                                                data-leads="<?php echo $yearfetch['total_lead'] ?>">
                                                Upgrade Plan
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ User Sidebar -->


                    </div>


                </section>

                <section class="app-user-view-security mt-3 showdiv">
                    <form action="">
                        <h3>Premium Web Hosting - <span id="planmonth"> 1 Month Plan</span> </h3>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" method="post"
                                            style="font-size:40px;">
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Package
                                                            Name:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="packag1" style="font-size:20px;"><b>aaa</b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Name:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="namew" style="font-size:20px;"><b>aaa</b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Email:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="email" style="font-size:20px;"><b></b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Start
                                                            Date:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="start" style="font-size:20px;"><b></b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>End
                                                            Date:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="end" style="font-size:20px;"><b>aaa</b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"> <label class="form-label"
                                                        for="modalAddCardNumber" style="font-size:20px;"><b>Contact
                                                            No:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="phone" id="namew" style="font-size:20px;"><b></b></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Leads:</b></label></div>
                                                <div class="col-md-6"><label class="form-label" for="modalAddCardNumber"
                                                        id="lead" style="font-size:20px;"><b>aaa</b></label></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6"> <label class="form-label"
                                                        for="modalAddCardNumber"
                                                        style="font-size:20px;"><b>Cost:</b></label></div>
                                                <div class="col-md-6"> <label class="form-label price"
                                                        for="modalAddCardNumber" id="price"
                                                        style="font-size:20px;"><b>aaa</b></label></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-7 col-sm-6 col-6"><label class="form-label"
                                                    for="modalAddCardNumber" style="font-size:20px;"><b>Plan
                                                        Discount</b></label></div>
                                            <div class="col-md-5 col-sm-6 col-6">0%</div>
                                            <div class="col-md-7 col-sm-6 col-6"><label class="form-label"
                                                    for="modalAddCardNumber"
                                                    style="font-size:20px;"><b>Taxes</b></label>
                                            </div>
                                            <div class="col-md-5 col-sm-6 col-6">0</div>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-6 col-6"><label class="form-label"
                                                    for="modalAddCardNumber"
                                                    style="font-size:20px;"><b>Total</b></label></div>
                                            <div class="col-md-5 col-sm-6 col-6 price">12000</div>

                                        </div>
                                        <div id="butt" class="d-grid w-100 mt-2" style="font-size:25px"></div>
                                    </div>

                    </form>
            </div>
        </div>
    </div>

    </section>

    </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include "include/footer.php";?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/modal-two-factor-auth.js"></script>
    <script src="app-assets/js/scripts/pages/modal-edit-user.js"></script>
    <script src="app-assets/js/scripts/pages/app-user-view-security.js"></script>
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
            $(".price").text(price);
            $("#start").text(start);
            $("#end").text(end);
            $("#lead").text(leads);
            $("#planmonth").text('1 month');
            $(".showdiv").css('display', 'block');
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

        $(document).on("click", ".modal2", function () {

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
            $(".price").text(price);
            $("#start").text(start);
            $("#end").text(end);
            $("#lead").text(leads * 3);
            $("#planmonth").text('3 month');
            $(".showdiv").css('display', 'block');
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

        $(document).on("click", ".modal3", function () {

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
            $(".price").text(price);
            $("#start").text(start);
            $("#end").text(end);
            $("#lead").text(leads * 6);
            $("#planmonth").text('6 month');
            $(".showdiv").css('display', 'block');
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

        $(document).on("click", ".modal4", function () {

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
$(".price").text(price);
$("#start").text(start);
$("#end").text(end);
$("#lead").text(leads * 12);
$("#planmonth").text('1 Year');
$(".showdiv").css('display', 'block');
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
</body>
<!-- END: Body-->

</html>