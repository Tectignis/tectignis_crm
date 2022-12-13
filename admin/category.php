<?php
include("config.php");
if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from category where id='$id'");
    if($sql=1){
        header("location:category.php");
    }
    }

    if(isset($_POST['update'])){
        $category = $_POST['updateCategory'];
        $id=$_POST['id'];
        
            $sql="UPDATE `category` SET `category`='$category' WHERE id='$id'";
            
            if (mysqli_query($conn, $sql)){
              header("location:category.php");
           } else {
              echo "<script> alert ('connection failed !');window.location.href='category.php'</script>";
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
                            <h2 class="content-header-title float-start mb-0">Category</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Category
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewCard">
                                +
                            </button>

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
                                <h4 class="card-title">Category</h4>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th>Sr.no</th>
                                                <th>Category</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $sql=mysqli_query($conn,"select * from category");
                                        $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                            ?>
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $row['category']; ?></td>
                                                <td>

                                                    <a type="button" href="" data-id="<?php echo $row['id'] ?>"
                                                        class="edit useredit" data-bs-toggle="modal">
                                                        <i class="fa fa-edit"
                                                            style="font-size:15px;margin: right 5px;"></i>
                                                    </a>


                                                    <a type="button" href="" class="delete-row delbtn "
                                                        data-id="<?php echo $row['id']; ?>"><i class="fa fa-trash"
                                                            style="font-size:15px; margin: right 80px;"></i></a>
                                                </td>
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
                <div class="modal fade" id="catModal" tabindex="-1" aria-labelledby="addNewCardTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <h1 class="text-center mb-1" id="addNewCardTitle">Create Category</h1>
                                <form method="post">
                                    <div class=" body1">
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" name="update"
                                            class="btn btn-primary me-1 mt-1">Update</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-1"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Cancel
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->




                </div>
            </div>
        </div>
        <!-- END: Content-->
                                            </div>
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <?php
       include('include/footer.php');
       ?>
        <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-sm-5 mx-50 pb-5">
                        <h1 class="text-center mb-1" id="addNewCardTitle">Create Category</h1>


                        <!-- form -->
                        <form id="" method="post" action="ticket.update.php" class="row gy-1 gx-2 mt-75">
                            <div class="col-12">
                                <label class="form-label" for="modalAddCardNumber">Category</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" name="category" class="form-control" id="inputcategory"
                                        placeholder="Enter Category" required>
                                    <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                        <span class="add-card-type"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" name="submitt" class="btn btn-primary me-1 mt-1">Create</button>
                                <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
            function deleteBtn() {

                swal({
                    title: "Are You Sure...?",
                    text: "This action can not be undone. Do you want to continue?",
                    icon: "warning",
                    buttons: ["No", "Yes"],
                });

                mobile_err = true;

                mobile_check();

                if (mobile_err = true) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
        <script>
            $(document).ready(function () {
                $('.delbtn').click(function (e) {
                    e.preventDefault();
                    let del_id = $(this).data('id');
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
                                window.location.href = "ticket.update.php?del_id=" + del_id;
                            } else {
                                swal("Your file is safe!");
                            }
                        });
                })
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.useredit').click(function () {
                    let cateid = $(this).data('id');

                    $.ajax({
                        url: 'ticket.update.php',
                        type: 'post',
                        data: {
                            cateid: cateid
                        },
                        success: function (response1) {
                            $('.body1').html(response1);
                            $('#catModal').modal('show');
                        }
                    });
                });

            });
        </script>
        </body>
        <!-- END: Body-->

</html>