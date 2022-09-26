<?php
include('config.php');
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
    <title>Product Details - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-ecommerce-details.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-number-input.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .RadioImg {
            width: 100px;
        }
        #imgContainer{
            background-image: url(app-assets/images/pages/eCommerce/8.png);
    background-repeat: no-repeat;    
    height: 100%;
    width: 100%; /* may not be necessary */
        }
        #mainImg,
        #mainImg h2,
        #mainImg div h2
        {
            color:#fff !important;
        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php include "include/header.php";
          include "include/sidebar.php";
    ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
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
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div
                                    class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center" id="imgContainer">
                                        <!-- <img src="app-assets/images/pages/eCommerce/4.png" id="mainImg" class="img-fluid product-img"
                                            alt="product image" /> -->
                                            <div id="mainImg">fthrthxrthrt</div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>Apple Watch Series 5</h4>

                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#update">Edit Profile</button>
                                    </div>
                                    <hr />
                                    <div class="product-color-options">
                                        <h6>Colors</h6>
                                        <ul class="list-unstyled mb-0 ">
                                            <li class="d-inline-block selected change">
                                                <div class="color-option b-primary change">
                                                    <!-- <div class="filloption bg-primary"></div> -->
                                                    <!-- <img src="app-assets/images/pages/eCommerce/4.png"
                                                        class="img-fluid RadioImg"  alt="product image" /> -->
                                                        <div><h2>head 1</h2></div>

                                                </div>
                                            </li>
                                            <li class="d-inline-block ">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-success"></div> -->
                                                    <!-- <img src="app-assets/images/pages/eCommerce/6.png"
                                                        class="img-fluid RadioImg"  alt="product image" /> -->
                                                        <div><h2>head 2</h2></div>

                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-danger"></div> -->
                                                    <!-- <img src="app-assets/images/pages/eCommerce/7.png"
                                                        class="img-fluid RadioImg" alt="product image" /> -->
                                                        <div><h2>head 3</h2></div>

                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-warning"></div> -->
                                                    <!-- <img src="app-assets/images/pages/eCommerce/9.png"
                                                        class="img-fluid RadioImg" alt="product image" /> -->
                                                        <div><h2>head 4</h2></div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <!-- <img src="app-assets/images/pages/eCommerce/1.png"
                                                        class="img-fluid RadioImg" alt="product image" /> -->
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-6 text-start"><h2>head 5</h2></div>
                                                                <div class="col-6 text-end"><h2>head 5</h2></div>
                                                            </div>
                                                        </div>
                                                        

                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <img src="app-assets/images/pages/eCommerce/8.png"
                                                        class="img-fluid RadioImg" alt="product image" />
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <img src="app-assets/images/pages/eCommerce/12.png"
                                                        class="img-fluid RadioImg" alt="product image" />
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <img src="app-assets/images/pages/eCommerce/10.png"
                                                        class="img-fluid RadioImg" alt="product image" />
                                                </div>
                                            </li>

                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <img src="app-assets/images/pages/eCommerce/11.png"
                                                        class="img-fluid RadioImg" alt="product image" />
                                                </div>
                                            </li>
                                            <li class="d-inline-block">
                                                <div class="color-option b-primary">
                                                    <!-- <div class="filloption bg-info"></div> -->
                                                    <img src="app-assets/images/pages/eCommerce/5.png"
                                                        class="img-fluid RadioImg" alt="product image" />
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr />
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <a href="#" class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                                            <i data-feather="download" class="me-50"></i>
                                            <span class="add-to-cart">Download</span>
                                        </a>
                                        <div class="btn-group dropdown-icon-wrapper btn-share">
                                            <button type="button"
                                                class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="share-2"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="facebook"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="twitter"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="youtube"></i>
                                                </a>
                                                <a href="#" class="dropdown-item">
                                                    <i data-feather="instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- Edit User Modal -->
    <div class="modal fade" id="update" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Update Details</h1>

                    </div>
                    <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalEditUserFirstName">Mobile No.</label>
                            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                class="form-control" placeholder="mobile no" value="" data-msg="enter your mobile no" />
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalEditUserLastName">Email</label>
                            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                class="form-control" placeholder="email" value="" data-msg="Please enter email" />
                        </div>
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">Save</button>
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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include "include/footer.php" ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="app-assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="app-assets/js/scripts/forms/form-number-input.js"></script>
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
        // var imgs = document.getElementById('selectImg').getAttribute('src');

        // console.log(imgs);
        // var mainImg = document.getElementById('mainImg').src = `${imgs}`;
        // // mainImg.location.reload();
        // function showImage() {
        //   console.log(this.src);
        // }
    </script>
    <script>

    </script>
    
</body>
<!-- END: Body-->

</html>