
<?php
session_start();
include("config.php");
if(!isset($_SESSION['id'])){
    header('location:../../../../auth/path/login.php');
}
$id=$_SESSION['id'];
if(isset($_POST['ticket'])){
    
   
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $status='Open';
    date_default_timezone_set('Asia/Kolkata');
      $date=date('Y-m-d H:i:s');

    $sql=mysqli_query($conn,"INSERT INTO `ticket`(`Subject`, `Description`,`Client_Code`,`date`,`status`) VALUES ('$subject','$description' ,'$id','$date','$status')");
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
    <title>Ticket</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- END: Page CSS-->
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
    <?php
    $logosql=mysqli_query($conn,'select * from setting_system');
    $fetchlogo=mysqli_fetch_array($logosql);
    ?>
      <link rel="shortcut icon" type="image/x-icon" href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tickets</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Ticket
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


            <div class="row">
                    <div class="col-12">

                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header border-bottom p-1">
                                <div class="head-label">
                                    <h6 class="mb-0">List of Ticket</h6>
                                </div>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCard">
                                Add Ticket
                            </button>
                            </div>
                            <!-- <div class="card-header">
                                <h5 class="card-title">List of Client</h5>
                                <a href="ticketform.php" button type="button" class="btn btn-primary float-right"
                                    style="margin-right: 5px;">
                                    + Add Ticket
                                </a>
                            </div> -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Ticket No.</th>
                                            <th>Date & Time</th>
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql=mysqli_query($conn,"select * from ticket");
                                            $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>
                                        <tr>
                                            <td><?php echo $count;?></td>
                                            <td><?php echo $row['ticket_no']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['Subject']; ?></td>
                                            <td><?php echo $row['Description']; ?></td>
                                            <td style="text-align:center">
                                            <?php
                                                $status=$row['status'];
                                                if($status=='Open'){
                                                    echo '<span class="badge badge-light-danger">Open</span>';
                                                }
                                                else if($status=='Inprocess'){
                                                    echo '<span class="badge badge-light-primary">In Proccess</span>';
                                                }else if($status=='Hold'){
                                                   echo '<span class="badge badge-light-dark">Hold On</span>';
                                                }else if($status=='Closed'){
                                                    echo '<span class="badge badge-light-success">Closed</span>';
                                                }
                                                ?>
                                            </td>

                                        </tr>
                                        <?php $count++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Basic table -->
               
                <!--/ Basic table -->



            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <?php include "include/footer.php"; ?>

    <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">Add Ticket</h1>
                   

                    <!-- form -->
                    <form id="addNewCardValidation"  class="row gy-1 gx-2 mt-75"  method="post">
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Subject</label>
                            <div class="input-group input-group-merge">
                                <input id="modalAddCardNumber" name="subject" class="form-control add-credit-card-mask" type="text" placeholder="......." aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" required/>
                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                    <span class="add-card-type"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="modalAddCardNumber">Description</label>
                            <div class="input-group input-group-merge">
                                <input id="modalAddCardNumber" name="description" class="form-control add-credit-card-mask" type="text" placeholder="......." aria-describedby="modalAddCard2" data-msg="Please enter your credit card number" required/>
                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                    <span class="add-card-type"></span>
                                </span>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1" name="ticket">Submit</button>
                            
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
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="app-assets/js/scripts/tables/table-datatables-basic.js"></script> -->
    <!-- END: Page JS-->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    

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