<?php
include("config.php");
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from support where id='$id'");
    if($sql=1){
        echo "<script>alert('Data deleted successfully');</script>";
        header("location:support.php");
    }
    }
  
    if(isset($_POST['compsubmit'])){
      $compid=$_POST['id'];
      $status=$_POST['category'];
      $descr=$_POST['comment'];
      $sql=mysqli_query($conn,"UPDATE `support` SET `status`='".$status."',`Comment`='".$descr."' WHERE id='".$compid."'");
      if($sql==1){
        echo "<script>alert('Updated Successfully');</script>";
      }else{
        echo "Something went wrong";
      }
    }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>View Clients</title>
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
        .badge-success {
            background-color: #28a745;
        }

        .badge-danger {
            background-color: #dc3545;
        }

        .badge-warning {
            background-color: #ffc107;
        }

        .badge-secondary {
            background-color: #6c757d;
        }

        .btn.btn-icon {
            padding: 0.515rem 0.446rem !important;
        }
    </style>
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
                            <h2 class="content-header-title float-start mb-0">Support Table</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Support Table
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <!-- Basic Tables start -->
                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Support</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Ticket No.</th>   
                                                <th>Firm Name</th>
                                                <th>Client Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Description</th>
                                                <th>Created On</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql=mysqli_query($conn,"select * from support");
                                            $count=1;
                                        while ($row=mysqli_fetch_array($sql)){ 
                                ?>
                                            <tr>
                                                <td><?php echo $row['ticket_no']; ?></td>
                                                <td><?php echo $row['firm_name']; ?></td>
                                                <td><?php echo $row['client_name']; ?></td>
                                                <td><?php echo $row['mobile']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php $s = $row['date'];$date = strtotime($s);echo date('d-M-Y ', $date);?>
                                                </td>
                                                <td style="text-align:center">
                                                      <?php
                                                    $status=$row['status'];
                                                    if($status=='0'){
                                                    echo '<span class="badge badge-success badge-pill">Open</span>';
                                                    }
                                                    else if($status=='Open'){
                                                    echo '<span class="badge badge-success">Open</span>';
                                                    }
                                                    else if($status=='Inprocess'){
                                                    echo '<span class="badge badge-danger">In Proccess</span>';
                                                    }else if($status=='Hold On'){
                                                    echo '<span class="badge badge-warning">Hold On</span>';
                                                    }else if($status=='Closed'){
                                                    echo '<span class="badge badge-secondary">Closed</span>';
                                                    }
                                                    ?>
                                                </td>

                                                <td style="text-align:center">
                                                    <button class="btn btn-primary btn-rounded btn-icon setting delbtn"
                                                        data-id='<?php echo $row['id']; ?> '><i
                                                            class="fas fa-wrench"></i></button>
                                                    <a href="support.php?delid=<?php echo $row['id']; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this item?');"><button
                                                            type="button" class="btn btn-danger btn-rounded btn-icon">
                                                            <i class="fas fa-trash"></i> </button></a> </td>

                                            </tr>
                                            <?php $count++; } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

                <!-- Edit User Modal -->
                <div class="modal fade closemaual" id="dnkModal5" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Customer Details</h1>

                                </div>
                                <form method="post">
                                    <div class="body5">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="close" class="btn btn-default" data-dismiss="modal" name="close"
                                            id="close">Close</button>
                                        <button type="submit" class="btn btn-primary" name="compsubmit" id="submit">
                                            Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Edit User Modal -->




            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php
       include('include/footer.php');
       ?>
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

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
        $(document).ready(function () {
            $('.setting').click(function () {
                let ticketid = $(this).data('id');
                $('#dnkModal5').modal('show');
                $.ajax({
                    url: 'ticket.update.php',
                    type: 'post',
                    data: {
                        ticketid: ticketid
                    },
                    success: function (response5) {
                        $('.body5').html(response5);

                    }
                });
            });


        });
    </script>

<script>
        $(document).ready(function () {
            $('.delbtn').click(function (e) {
                e.preventDefault();
                let delid = $(this).data('id');
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Poof! Your file has been deleted!", {
                                icon: "success",
                            });
                            window.location.href = "support.php?delid" + delid;
                        } else {
                            swal("Your file is safe!");
                        }
                    });
            })
        });
    </script>

    </body>
    <!-- END: Body-->

</html>