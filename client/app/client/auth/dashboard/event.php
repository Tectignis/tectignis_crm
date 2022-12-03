<?php
session_start();
include("config.php");
if(!isset($_SESSION['id'])){
    header('location:../../../../auth/path/login.php');
}
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $schedule=$_POST['schedule'];
   
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $description=$_POST['description'];
    

    $sql=mysqli_query($conn,"INSERT INTO `event`(`title`, `schedule`,  `start_date`, `end_date`, `description`) VALUES ('$title','$schedule','$start_date','$end_date','$description')");
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.css" rel="stylesheet"/>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <?php
    $logosql=mysqli_query($conn,'select * from setting_system');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
      <link rel="shortcut icon" type="image/x-icon" href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
    <style>
        .my-highlight {
  color: black !important;
  background-color: lightblue !important;
}
.fc-view-container{
    height:100% !important;
}
.fc-left{
    display: inline;
}
.fc-toolbar{
    width:100%
}
.fc-event-container{
  color:white;
}
    </style>

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
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Event</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Event
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
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
                                            <span class="align-middle">Upcoming Events</span>
                                        </h5>
                                        <?php
                                            $sql=mysqli_query($conn,"select * from event");
                                            while ($row=mysqli_fetch_array($sql)){ 
                                                $date=$row['start_date'];
                                                $curdate=date('Y-m-d');
                                                if($curdate<$date){
                                        ?>
                                        <div class="form-check mb-1">
                                            
                                            <label class="form-check-label" for="select-all"><?php echo $row['title'] ?></label>
                                        </div>
                                               <?php } ?>
                                        <!-- <div class="calendar-events-filter">
                                            <div class="form-check form-check-danger mb-1">
                                                <label class="form-check-label" for="personal"><?php echo $row['schedule'] ?></label>
                                            </div>
                                        </div> -->
                                        <?php  } ?> 
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
                            <div id="calendar"></div>
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
                            <label for="select-label" class="form-label" name="select_label">purpose</label>
                            <input type="text" class="form-control" id="title" name="schedule" placeholder="purpose"
                                required />
                            <!-- <select class="select2 select-label form-select w-100" id="select-label"
                                name="select_label">
                                <option data-label="primary" value="Business" >schedule A Meeting
                                </option>
                                <option data-label="danger" value="Personal" >Site Visit</option>
                                <option data-label="warning" value="Family" >Monthly Rent</option>
                                <option data-label="success" value="Holiday" >Call Followup</option>
                                <option data-label="info" value="Holiday" >Registration</option>
                            </select> -->
                        </div>
                        <div class="mb-1 position-relative">
                            <label for="start-date" class="form-label">Start Date</label>
                            <input type="text" class="form-control" id="start-date" name="start_date" placeholder="Start Date" required/>
                        </div>
                        <div class="mb-1 position-relative">
                            <label for="end-date" class="form-label">End Date</label>
                            <input type="text" class="form-control" id="end-date" name="end_date" placeholder="End Date" required/>
                        </div>


                        <div class="mb-1">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="event-description-editor" class="form-control" required></textarea>
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
    <?php
    $eventsql=mysqli_query($conn,"select * from event");
    ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.js"></script>
        <script type='text/javascript'>
$("#calendar").fullCalendar({
  events:[
    <?php while($fetchevent=mysqli_fetch_array($eventsql)
){?>
    {title:'<?php echo $fetchevent['title'] ?>',
     start:'<?php echo $fetchevent['start_date'] ?>',
     end:'<?php echo $fetchevent['end_date'] ?>'
    },
   
    <?php } ?>
  ],

  eventAfterAllRender : function(view) {

    //Loop through all event to set the highlight and onclick url
    $(".fc-event-container").each(function(){

      // Get this day of the week number
      var weekDayIndex = $(this).index();
      // Get the calendar row
      var row = $(this).closest(".fc-row");
      // Get this date
      var date = row.find(".fc-day-top").eq(weekDayIndex).attr("data-date");
      // Add highlight and data-date
      row.find(".fc-day").eq(weekDayIndex)
        .addClass("highlight")
        .attr("data-url","example.com/details?date="+date);
    });
  }
});

// Click handler
// $(document).on("click", ".highlight", function(){
//   alert( $(this).data("url") );
// });
  </script>
</body>
<!-- END: Body-->

</html>