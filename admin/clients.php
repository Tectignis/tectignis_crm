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
    <title>Advance Card - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-chat-list.css">
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
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.php">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.php">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
        <?php
       include('include/sidebar.php');
       ?>
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
                            <h2 class="content-header-title float-start mb-0">Manage Clients</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                   
                                    <li class="breadcrumb-item active">Manage Clients
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
                                Add New Client
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->

                

                <div class="row match-height">
                    
                    <!-- Profile Card -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-profile">
                            <img src="app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo" />
                            <div class="card-body">
                                <div class="profile-image-wrapper">
                                    <div class="profile-image">
                                        <div class="avatar">
                                            <img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" />
                                        </div>
                                    </div>
                                </div>
                                <h3>MONIKA Enterprises</h3>
                                <h6 class="text-muted">  monika gore</h6>
                                <span class="badge badge-light-primary profile-badge">Real Estate</span>
                                <hr class="mb-2" />
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Packages</h6>
                                        <h3 class="mb-0">10</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Leads</h6>
                                        <h3 class="mb-0">156</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Products</h6>
                                        <h3 class="mb-0">23</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-profile">
                            <img src="app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo" />
                            <div class="card-body">
                                <div class="profile-image-wrapper">
                                    <div class="profile-image">
                                        <div class="avatar">
                                            <img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" />
                                        </div>
                                    </div>
                                </div>
                                <h3>MONIKA Enterprises</h3>
                                <h6 class="text-muted">  monika gore</h6>
                                <span class="badge badge-light-primary profile-badge">Real Estate</span>
                                <hr class="mb-2" />
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Packages</h6>
                                        <h3 class="mb-0">10</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Leads</h6>
                                        <h3 class="mb-0">156</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Products</h6>
                                        <h3 class="mb-0">23</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-profile">
                            <img src="app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top" alt="Profile Cover Photo" />
                            <div class="card-body">
                                <div class="profile-image-wrapper">
                                    <div class="profile-image">
                                        <div class="avatar">
                                            <img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" />
                                        </div>
                                    </div>
                                </div>
                                <h3>MONIKA Enterprises</h3>
                                <h6 class="text-muted">  monika gore</h6>
                                <span class="badge badge-light-primary profile-badge">Real Estate</span>
                                <hr class="mb-2" />
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Packages</h6>
                                        <h3 class="mb-0">10</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Total Leads</h6>
                                        <h3 class="mb-0">156</h3>
                                    </div>
                                    <div>
                                        <h6 class="text-muted fw-bolder">Products</h6>
                                        <h3 class="mb-0">23</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Profile Card -->
                    <!-- edit user  -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <i data-feather="user" class="font-large-2 mb-1"></i>
                                <h5 class="card-title">New Clients
                                </h5>
                                <p class="card-text">Click here to add New Clients</p>

                                <!-- modal trigger button -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">Show</button>
                            </div>
                        </div>
                    </div>
                    <!-- / edit user  -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- Edit User Modal -->
    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <h1 class="mb-1">Create Clients</h1>
                        
                    </div>
                    <form id="editUserForm" class="row gy-1 pt-75" onsubmit="return false">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserFirstName">Firm Name</label>
                            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="" value="" data-msg="Please enter your firm name" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLastName"> Name</label>
                            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="" value="" data-msg="Please enter your name" />
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail"> Email:</label>
                            <input type="email" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="" placeholder="" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail">Mobile No:</label>
                            <input type="number" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="" placeholder="" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Category</label>
                            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                <option selected>Real Estate</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditTaxID">Image</label>
                            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="Tax-8894" value="Tax-8894" />
                        </div>
                    
                        <div class="col-12 text-center mt-2 pt-50">
                            <button type="submit" class="btn btn-primary me-1">Create</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">
                                Discard
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ Edit User Modal -->
     <!-- add new card modal  -->
     <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Add New Client</h1>

                    <!-- form -->
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false">
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserFirstName">Firm Name</label>
                            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="Firm Name" value="" data-msg="Please enter your firm name" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserLastName"> Name</label>
                            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Name" value="" data-msg="Please enter your name" />
                        </div>
                        
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail"> Email:</label>
                            <input type="email" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="" placeholder="Email" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserEmail">Mobile No:</label>
                            <input type="number" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" value="" placeholder="Mobile No" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="form-label" for="modalEditUserStatus">Packages</label>
                            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                                <option selected>Real Estate</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">Add</button>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/ add new card modal  -->
    <!-- BEGIN: Footer-->
    <?php
       include('include/footer.php');
       ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/cards/card-advance.js"></script>
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