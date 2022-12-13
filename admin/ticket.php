<?php
session_start();
include("config.php");
$id=$_SESSION['aid'];

  if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from ticket where id='$id'");
    if($sql=1){
        header("location:ticket.php");
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
        <link rel="stylesheet" type="text/css" href="app-assets\fonts\font-awesome\css\font-awesome.css">
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
    <link rel="shortcut icon" type="image/x-icon"
        href="../../../../../admin/images/favicon/<?php echo $fetchlogo['fav'] ?>">
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
                            <h2 class="content-header-title float-start mb-0">Ticket</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
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
                            <div class="card-header border-bottom p-2">
                                <div class="head-label">
                                    <h6 class="mb-0">Ticket Table</h6>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sr no.</th>
                                            <th>Ticket No.</th>
                                            <!-- <th>Date & Time</th> -->
                                            <th>Subject</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
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
                                            <!-- <td><?php echo $row['date']; ?></td> -->
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
                                            <td>

                                                <a href="" type="button" data-id="<?php echo $row['id'] ?>" class="view"
                                                    data-bs-toggle="modal" data-bs-target="#addNewCard">
                                                    <i class="fa fa-eye" style="font-size:15px;margin: right 5px;"></i>
                                                </a>



                                                <a type="button" href="" data-id="<?php echo $row['id'] ?>"
                                                    <?php if($status=='Closed'){ ?>style="display:none" <?php } ?>
                                                    class="edit" data-bs-toggle="modal" data-bs-target="#edit">
                                                    <i class="fa fa-edit" style="font-size:15px;margin: right 5px;"></i>
                                                </a>

                                                <!-- <button type="button" data-id="<?php echo $row['id'] ?>" class="delete-row btn-sm btn-info"> -->
                                                <!-- <i class="fas fa-trash"></i> -->
                                                <a href="ticket.php?delid=<?php echo $row['id']; ?>"
                                                    <?php if($status=='Closed'){ ?>style="display:none" <?php } ?> onclick="return confirm('Are you sure You want to delete');" ><i
                                                        class="fa fa-trash"
                                                        style="font-size:15px; margin: right 80px;"></i></a>

                                                </button>
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
                            <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false" action="ticket.update.php">

                            <div class="modal-body px-sm-5 mx-50 pb-5 body">

                            </div>
                         
                         </form>
                        
                        </div>
                    </div>
                </div>

               <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="addNewCardTitle"       aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="addNewCardValidation" method="post" action="ticket.update.php" class="row gy-1 gx-2 mt-75" >

                            <div class="modal-body px-sm-5 mx-50 pb-5 body1">

                                </div>
                                
                         </form>
                        
                        </div>
                    </div>
                </div>
                <!--/ edit customer -->
               
                <!--/ Edit User Modal -->

            


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
    <script>
        $(document).ready(function () {
            $('.view').click(function () {
                let dnk = $(this).data('id');

                $.ajax({
                    url: 'ticket.update.php',
                    type: 'post',
                    data: {
                        dnk: dnk
                    },
                    success: function (response2) {
                        $('.body').html(response2);
                        $('#addNewCard').modal('show');
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.edit').click(function () {
                let dnkk = $(this).data('id');

                $.ajax({
                    url: 'ticket.update.php',
                    type: 'post',
                    data: {
                        dnkk: dnkk
                    },
                    success: function (response1) {
                        $('.body1').html(response1);
                        $('#editmodal').modal('show');
                    }
                });
            });
        });
    </script>
</body>
<!-- END: Body-->

</html>