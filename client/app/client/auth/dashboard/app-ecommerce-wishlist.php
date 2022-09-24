<?php 
include("config.php");
?>
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
    <title>WishList - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php
       include('include/header.php');
       ?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php
       include('include/sidebar.php');
       ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
           
               

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="card">
                           
                                <div id="carousel-interval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carousel-interval" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carousel-interval" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carousel-interval" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="app-assets/images/slider/15.webp" alt="First slide" />
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="app-assets/images/slider/15.webp" alt="Second slide" />
                                        </div>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="app-assets/images/slider/15.webp" alt="Third slide" />
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" data-bs-target="#carousel-interval" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" data-bs-target="#carousel-interval" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                      
                    </div>
                </div>
               
          


                <div class="content-body">
                    <div class="card-body">
                           
                        <div class="item-name">
                            <h2 style="margin-left:35%;">Category</h2>
                        </div>
                       
                    </div>
    
                </div>




              
            <div class="content-body">
                <!-- Wishlist Starts -->
                  <!-- Examples -->
                  <section id="card-demo-example">
                  
                    <div class="row">
                    <?php
                                            $sql=mysqli_query($conn,"select * from category");
                                           
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                        <div class="col-md-3 col-lg-3 col-sm-3">
                        <div class="card">
                        <a href="card-basic.php?id=<?php echo $row['id']; ?>">
                                <img class="card-img-top" src="app-assets/images/slider/04.jpg" alt="Card image cap"/>
                                            </a>

                                <div class="card-body">
                                <a href="card-basic.php?id=<?php echo $row['id']; ?>" style="color:black;">
                                    <?php echo $row['category']; ?></a>
                                   
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                 
                </section>
                <!-- Examples -->
                <!-- Wishlist Ends -->

            </div>
       
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php
       include('include/footer.php');
       ?>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-ecommerce-wishlist.js"></script>
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