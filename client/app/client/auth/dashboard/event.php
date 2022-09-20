<?php
session_start();
include("config.php");
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $schedule=$_POST['schedule'];
    $select_label=$_POST['select_label'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $description=$_POST['description'];
    

    $sql=mysqli_query($conn,"INSERT INTO `event`(`title`, `schedule`, `select_label`, `start_date`, `end_date`, `description`) VALUES ('$title','$schedule','$select_label','$start_date','$end_date','$description')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');php</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}
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
    <title>App calendar - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-calendar.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->

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
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Full calendar start -->
                <section>
                    <div class="app-calendar overflow-hidden border">
                        <div class="row g-0">
                            <!-- Sidebar -->
                            <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column"
                                id="app-calendar-sidebar">
                                <div class="sidebar-wrapper">
                                    <div class="card-body d-flex justify-content-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#addNewCard">
                                            Add Event
                                        </button>
                                    </div>

                                    <div class="card-body pb-0">
                                        <h5 class="section-label mb-1">
                                            <span class="align-middle">Filter</span>
                                        </h5>
                                        <div class="form-check mb-1">
                                            <input type="checkbox" class="form-check-input select-all" id="select-all"
                                                checked />
                                            <label class="form-check-label" for="select-all">schedule A Meeting</label>
                                        </div>
                                        <div class="calendar-events-filter">
                                            <div class="form-check form-check-danger mb-1">
                                                <input type="checkbox" class="form-check-input input-filter"
                                                    id="personal" data-value="personal" checked />
                                                <label class="form-check-label" for="personal">Site Visit</label>
                                            </div>
                                            <div class="form-check form-check-primary mb-1">
                                                <input type="checkbox" class="form-check-input input-filter"
                                                    id="business" data-value="business" checked />
                                                <label class="form-check-label" for="business">Monthly Rent</label>
                                            </div>
                                            <div class="form-check form-check-warning mb-1">
                                                <input type="checkbox" class="form-check-input input-filter" id="family"
                                                    data-value="family" checked />
                                                <label class="form-check-label" for="family">Call Followup</label>
                                            </div>
                                            <div class="form-check form-check-success mb-1">
                                                <input type="checkbox" class="form-check-input input-filter"
                                                    id="holiday" data-value="holiday" checked />
                                                <label class="form-check-label" for="holiday">Registration</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="mt-auto">
                                    <img src="app-assets/images/pages/calendar-illustration.png"
                                        alt="Calendar illustration" class="img-fluid" />
                                </div>
                            </div>
                            <!-- /Sidebar -->

                            <!-- Calendar -->
                            <div class="col position-relative">
                                <div class="card shadow-none border-0 mb-0 rounded-0">
                                    <div class="card-body pb-0">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Calendar -->
                            <div class="body-content-overlay"></div>
                        </div>
                    </div>
                    <!-- Calendar Add/Update/Delete event modal-->
                    <!-- <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title">Add Event</h5>
                                </div>
                                <form class="event-form" method="post">
                                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3">

                                        <div class="mb-1">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Event Title" required />
                                        </div>
                                        <div class="mb-1">
                                            <label for="select-label" class="form-label">Label</label>
                                            <select class="select2 select-label form-select w-100" id="select-label"
                                                name="select-label">
                                                <option data-label="primary" value="Business" name="schedule">schedule A
                                                    Meeting</option>
                                                <option data-label="danger" value="Personal" name="site_visit">Site
                                                    Visit</option>
                                                <option data-label="warning" value="Family" name="monthly_rent">Monthly
                                                    Rent</option>
                                                <option data-label="success" value="Holiday" name="call_followup">Call
                                                    Followup</option>
                                                <option data-label="info" value="Holiday" name="registration">
                                                    Registration</option>
                                            </select>
                                        </div>
                                        <div class="mb-1 position-relative">
                                            <label for="start-date" class="form-label">Start Date</label>
                                            <input type="text" class="form-control" id="start-date" name="start_date"
                                                placeholder="Start Date" />
                                        </div>
                                        <div class="mb-1 position-relative">
                                            <label for="end-date" class="form-label">End Date</label>
                                            <input type="text" class="form-control" id="end-date" name="end_date"
                                                placeholder="End Date" />
                                        </div>


                                        <div class="mb-1">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="event-description-editor"
                                                class="form-control"></textarea>
                                        </div>
                                        <div class="mb-1 d-flex">
                                            <button type="submit" class="btn btn-primary me-1 mt-1"
                                                name="submitt">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary btn-cancel"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div> -->
            </div>
            <!--/ Calendar Add/Update/Delete event modal-->
            </section>
            <!-- Full calendar end -->

        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include "include/footer.php"; ?>
    <!-- END: Footer-->

    <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Add Todo</h1>


                    <!-- form -->
                    <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" method="post">
                        <div class="mb-1">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Event Title"
                                required />
                        </div>
                        <div class="mb-1">
                            <label for="select-label" class="form-label" name="select_label">Label</label>
                            <select class="select2 select-label form-select w-100" id="select-label"
                                name="select_label">
                                <option data-label="primary" value="Business" >schedule A Meeting
                                </option>
                                <option data-label="danger" value="Personal" >Site Visit</option>
                                <option data-label="warning" value="Family" >Monthly Rent</option>
                                <option data-label="success" value="Holiday" >Call Followup</option>
                                <option data-label="info" value="Holiday" >Registration</option>
                            </select>
                        </div>
                        <div class="mb-1 position-relative">
                            <label for="start-date" class="form-label">Start Date</label>
                            <input type="text" class="form-control" id="start-date" name="start_date"
                                placeholder="Start Date" />
                        </div>
                        <div class="mb-1 position-relative">
                            <label for="end-date" class="form-label">End Date</label>
                            <input type="text" class="form-control" id="end-date" name="end_date"
                                placeholder="End Date" />
                        </div>


                        <div class="mb-1">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="event-description-editor" class="form-control"></textarea>
                        </div>
                        <div class="mb-1 d-flex">

                            <button type="submit" class="btn btn-primary me-1 mt-1" name="submit">Submit</button>

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
    <script src="app-assets/vendors/js/calendar/fullcalendar.min.js"></script>
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-calendar-events.js"></script>
    <script src="app-assets/js/scripts/pages/app-calendar.js"></script>
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