
<?php
session_start();
include("config.php");
// $id=$_SESSION['id'];
if(isset($_POST['add_property'])){
    
    $description=$_POST['description'];
   
    $client_name1=$_POST['client_name'];
    $mobile_no1=$_POST['mobile_no'];
    $apartment_type1=$_POST['apartment_type'];
    $area1=$_POST['area'];
    $status='available';
    $type1=$_POST['type'];

    // $status='Open';
    // date_default_timezone_set('Asia/Kolkata');
    //   $date=date('Y-m-d H:i:s');

    $sql=mysqli_query($conn,"INSERT INTO `property`(`client_name`, `mobile_no`,`apartment_type`,`area`,`type`,`status`,`description`) VALUES ('$client_name1','$mobile_no1' ,'$apartment_type1','$area1','$type1','$status','$description')");
     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');php</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}



if(isset($_POST['cusEdit'])){
    $id=$_POST['id'];
    $description=$_POST['description'];
    $client_name1=$_POST['client_name'];
    $mobile_no1=$_POST['mobile_no'];
    $apartment_type1=$_POST['apartment_type'];
    $area1=$_POST['area'];
    $status='available';
    $type1=$_POST['type'];
    $status=$_POST['status'];


   
   
    $sql="UPDATE `property` SET `client_name`='$client_name1',`mobile_no`='$mobile_no1',`apartment_type`='$apartment_type1',`area`='$area1',`status`='$status',`type`='$type',`description`='$description' WHERE id='$id.'";

    if (mysqli_query($conn, $sql)){
      header("location:property.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='property.php'</script>";
   }
  }

  if(isset($_GET['delid'])){
    $id=mysqli_real_escape_string($conn,$_GET['delid']);
    $sql=mysqli_query($conn,"delete from property where id='$id'");
    if($sql=1){
        header("location:property.php");
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
    <title>User List - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-validation.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets\fonts\font-awesome\css\font-awesome.css">


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

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <div class="row">
                          <?php
                                $query=mysqli_query($conn,"select * from property where type='flat sell'");
                                $count1=mysqli_num_rows($query);
                                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span class="fw-bolder">Flat Sell</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                $query=mysqli_query($conn,"select * from property where type='Flat Rent'");
                                $count2=mysqli_num_rows($query);
                                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75"><?php echo $count2; ?></h3>
                                        <span class="fw-bolder">Flat Rent</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                $query=mysqli_query($conn,"select * from property where type='Shop / Office Sell'");
                                $count3=mysqli_num_rows($query);
                                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75"><?php echo $count3; ?></h3>
                                        <span class="fw-bolder">Shops / Office Sell</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                                $query=mysqli_query($conn,"select * from property where type='Shop / Office Rent'");
                                $count4=mysqli_num_rows($query);
                                    ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75"><?php echo $count4; ?></h3>
                                        <span class="fw-bolder">Shop / Office Rent</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i class="font-medium-4 fa fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list and filter start -->
                    <div class="card">
                        <div class="card-header border-bottom p-1">
                            <div class="head-label">
                                <h4 class="mb-0">Properties</h6>
                            </div>
                            <div class="dt-action-buttons text-end">
                                <a href="ticketform.php" button type="button" class="btn btn-primary float-right"
                                    data-bs-toggle="modal" data-bs-target="#default" style="margin-right: 5px;">
                                    + Add Property
                                </a>
                                <!-- <butto`n type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#default">
                                    Basic Modal
                                </button>` -->
                            </div>
                        </div>
                        <div class="card-body border-bottom">
                            <p class="card-title mt-2">Search & Filter</h4>
                            <div class="row">
                                <div class="col-md-4 user_role"><label class="form-label"
                                        for="UserRole">Type</label><select id="UserRole"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled selected> Select Type </option>
                                        <option value="Flat Sell" class="text-capitalize">Flat Sell</option>
                                        <option value="Flat Rent" class="text-capitalize">Flat Rent</option>
                                        <option value="Shop / Office Sell" class="text-capitalize">Shop / Office Sell</option>
                                        <option value="Shop / Office Rent" class="text-capitalize">Shop / Office Rent</option>
                                    </select></div>

                                <div class="col-md-4 user_status"><label class="form-label"
                                        for="FilterTransaction">Status</label>
                                    <select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx">
                                        <option value="" disabled selected> Select Status </option>
                                        <option value="Available" class="text-capitalize">Available</option>
                                        <option value="Not Available" class="text-capitalize">Not Available</option>
                                    </select>
                                </div>
                                <div class="col-md-4 user_status"><label class="form-label"
                                        for="FilterTransaction"></label>
                                    <button class="btn btn-primary mb-0 mt-2" style="">Submit</button>
                                </div>
                            </div>
                            <!-- <hr>     -->
                            <div class="row mt-1">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Client Name</th>
                                            <th>Mobile No.</th>
                                            <th>Type</th>
                                            <th>Apartment Type</th>
                                            <th>Area</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                            $sql=mysqli_query($conn,"select * from property");
                                            $count=1;
                                            while ($row=mysqli_fetch_array($sql)){ 
                                        ?>

                                        <tr>
                                            <td><?php echo $row['client_name']; ?></td>
                                            <td><?php echo $row['mobile_no']; ?></td>
                                            <td><?php echo $row['type']; ?></td>
                                            <td><?php echo $row['apartment_type']; ?></td>
                                            <td><?php echo $row['area']; ?></td>
                                            <td style="text-align:center"><?php
                                                $status=$row['status'];
                                                if($status=='available'){
                                                    echo '<span class="badge badge-light-success">available</span>';
                                                }
                                                else if($status=='not available'){
                                                    echo '<span class="badge badge-light-danger">not available</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                      

                
                    <button type="button" data-id="<?php echo $row['id'] ?>"  class="btn btn-outline-primary view" data-bs-toggle="modal" data-bs-target="#addNewCard" >
                    <i data-feather="eye"></i>
                                    </button>

                                    <a href="property.php?delid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-outline-primary"><i data-feather="trash"></i></button></a>


                                    <button type="button" data-id="<?php echo $row['id'] ?>"  class="btn btn-outline-primary edit" data-bs-toggle="modal" data-bs-target="#edit" >
                                    <i data-feather="edit"></i>
                                    </button>

                  </td>

                                        </tr>
                                        <?php $count++; } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- list and filter end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>

    <!-- Basic Modals start -->
    <div class="demo-inline-spacing">
        <!-- Basic trigger modal -->
        <div class="basic-modal">


            <!-- Modal -->
            <div class="modal fade text-start" id="default" tabindex="-1" aria-labelledby="myModalLabel1"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel1">Add Property </h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="" class="row gy-1 pt-75" method="post">
                                <div class="col-12 col-md-12">
                                    <label class="form-label" for="modalEditUserFirstName">Client Name</label>
                                    <input type="text" id="modalEditUserFirstName" name="client_name"
                                        class="form-control" placeholder="Client Name" Placeholder="Title" data-msg="Title" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLastName">Mobile No.</label>
                                    <input type="text" name="mobile_no" id="modalEditUserLastName" 
                                        class="form-control" placeholder="Mobile No." data-msg="Description" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLastName">Area</label>
                                    <input type="text" name="area" id="modalEditUserLastName" 
                                        class="form-control" placeholder="Building Name" data-msg="Description" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Type</label>
                                    <select id="UserRole" name="type"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled selected> Select Type </option>
                                        <option value="Flat Sell" class="text-capitalize">Flat Sell</option>
                                        <option value="Flat Rent" class="text-capitalize">Flat Rent</option>
                                        <option value="Shop / Office Sell" class="text-capitalize">Shop / Office Sell</option>
                                        <option value="Shop / Office Rent" class="text-capitalize">Shop / Office Rent</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Apartment Type</label>
                                    <select id="UserRole" name="apartment_type"
                                        class="form-select text-capitalize mb-md-0 mb-2">
                                        <option value="" disabled selected> Select Apartment Type </option>
                                        <option value="1RK" class="text-capitalize">1RK</option>
                                        <option value="1BHK" class="text-capitalize">1BHK</option>
                                        <option value="2BHK" class="text-capitalize">2BHK</option>
                                        <option value="3BHK" class="text-capitalize">3BHK</option>
                                        <option value="Office" class="text-capitalize">Office</option>
                                        <option value="Shop" class="text-capitalize">Shop</option>
                                        <option value="Other" class="text-capitalize">Other</option>

                                    </select>
                                </div>
                                <div class="col-12 col-md-12">
                                <label class="form-label" for="modalEditUserEmail">Description</label>
                                <textarea  class="form-control" placeholder="description" name="description" ></textarea>
                                </div>
                                <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="add_property" data-bs-dismiss="modal">Add</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Close
                                    </button>
                        </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic trigger modal end -->

             <!-- view customer -->
     <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" onsubmit="return false" action="cus.php">

                            <div class="modal-body px-sm-5 mx-50 pb-5 body">

                            </div>
                         
                         </form>
                        
                        </div>
                    </div>
                </div>
                <!--/ view customer -->

                <!-- edit customer -->
  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="addNewCardValidation" class="row gy-1 gx-2 mt-75" action="" method="post">

                            <div class="modal-body px-sm-5 mx-50 pb-5 body1">

                            </div>
                         
                           
                         </form>
                        
                        </div>
                    </div>
                </div>
                <!--/ Edit customer -->
    </div>
    <!-- Basic Modals end -->
    <!-- END: Content-->


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include "include/footer.php"; ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
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
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/app-user-list.js"></script>
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
          $('.view').click(function(){
            let dnk = $(this).data('id');
           
            $.ajax({
            url: 'cus.php',
            type: 'post',
            data: {dnk: dnk},
            success: function(response2){ 
              $('.body').html(response2);
              $('#addNewCard').modal('show'); 
            }
          });
          });
          });
          </script>



<script>
          $(document).ready(function(){
          $('.edit').click(function(){
            let dnkk = $(this).data('id');
           
            $.ajax({
            url: 'cus.php',
            type: 'post',
            data: {dnkk: dnkk},
            success: function(response1){ 
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