<?php
include("config.php");
?>
<?php
//leads post
if(isset($_POST['update'])){
    $assignId=$_POST['assignId'];
    $account_name=$_POST['account_name'];
    $paymentmode=$_POST['paymentmode'];
    $transaction=$_POST['transaction'];
    $due_date=$_POST['due_date'];
    $bal=$_POST['balance'];
    $month3=$_POST['month3'];
    $month6=$_POST['month6'];
    $year=$_POST['year1'];
    $newpayment=$_POST['newpayment'];
    $payment=$_POST['payment'];
    $newbal=$payment+$newpayment;
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d h:i:s");
    
    $sql=mysqli_query($conn,"UPDATE package_assign SET `first_payment`='$newbal',`balance`='$bal',`update_date`='$date',`account_name`='$account_name',`payment_mode`='$paymentmode',`3moth_discount`='$month3',`6month_discount`='$month6',`1year_discount`='$year',`transaction_date`='$transaction',`due_date`='$due_date' WHERE id='$assignId'");
   
}

if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from package_assign where id='$id'");
    if($sql=1){
      header("location:package.php");
    }
    else{ echo "<script>alert('Failed to Delete')</script>"; }
  }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Package Table</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <?php include "include/header.php"; ?>
    <?php include "include/sidebar.php"; ?>
    <!-- END: Header-->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .btn-icon {
            padding: 5px!important;
        }
    </style>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Package</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Package
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
                                <h4 class="card-title">Package</h4>
  
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr no.</th>
                                                <th>Firm Name</th>
                                                <th>Package Name</th>
                                                <th>Package Title</th>
                                                <th>Total Amt</th>
                                                <th>Payment</th>
                                                <th>Balance</th>
                                                <th>Action</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    $qpackage=mysqli_query($conn,"select *,package_assign.id as id  from package inner join package_assign on package_assign.lead_id=package.id inner join client on client.Client_Code=package_assign.firm_id;");
                                    $count=1;
                                while ($row=mysqli_fetch_array($qpackage)){ 

                                 ?>
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $row['Firm_Name']; ?></td>
                                                <td><?= $row['package_name']; ?></td>
                                                <td><?= $row['title']; ?></td>
                                                <td><?php echo $row['total_amt']; ?></td>
                                                <td><?php echo $row['first_payment']; ?></td>
                                                <td><?php echo $row['balance']; ?></td>
                                                
                                                <td style="text-align:center">
                                                    <button type="button"
                                                        class="btn btn-primary btn-rounded assidnmodal btn-icon"
                                                        style="color: aliceblue" data-id="<?php echo $row['id']; ?>"> <i
                                                            class="fas fa-edit"></i> </button>

                                                                <a class="btn btn-danger btn-rounded btn-icon delbtn"
                                                        href="package.php?delid=<?php echo $row['id']; ?>"
                                                        onclick="return checkDelete()"
                                                        class="btn btn-primary btn-rounded btn-icon" 
                                                        data-id="=<?php echo $row['id']; ?>">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </td>
                                                <td><?php echo $row['assign_date']; ?></td>
                                            </tr>
                                            <?php $count++; } ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->

                <!-- Edit User Modal -->
                <div class="modal fade" id="assignmodal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-5 pt-50">
                                <div class="text-center mb-2">
                                    <h1 class="mb-1">Customer Details</h1>
                                    <form method="post">
                                        <div id="assignbody">



                                        </div>
                                        <div class="modal-footer">
                                        <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal"
                                aria-label="Close">
                                Close
                            </button>
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>

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
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
    <script>
  $(document).ready(function(){
    $('.assidnmodal').click(function(){
      let assignId=$(this).data('id');
      $.ajax({
        url:'action_clients.php',
        type:'POST',
        data:{assignId:assignId},
        success:function(data){
          $('#assignbody').html(data);
          $('#assignmodal').modal('show');
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
                            window.location.href = "package.php?delid" + delid;
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