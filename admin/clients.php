<?php
include("config.php");
if(isset($_GET['client'])){
    $id=$_GET['client'];
    $sql=mysqli_query($conn,"update client set Status='Deactivated' where Client_Code='$id'");
}
if(isset($_GET['declient'])){
    $id=$_GET['declient'];
    $sql=mysqli_query($conn,"update client set Status='Activated' where Client_Code='$id'");
};


if(isset($_POST["submi"])){
    $id=$_POST['id'];
	$password=$_POST["resetPass"];
    $Confirm_password=$_POST["confirmResetPass"];
	$sql = mysqli_query($conn,"SELECT * FROM client WHERE Client_Code='$id'");
		$row=mysqli_fetch_assoc($sql); 
	$hashpassword=password_hash($password,PASSWORD_BCRYPT);
			$query=mysqli_query($conn,"UPDATE `client` SET `password`='$hashpassword' WHERE Client_Code='$id'");
      if($query){
        echo "<script>alert('Password Changed Successfully')</script>";
      }
		
	
	}

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Clients</title>
    <style>
        .drownMenu {
            position: absolute !important;
            width: 100%;
            text-align: end;
        }

        .dorpMenuul {
            margin-left: 55% !important;
        }
    </style>
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
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow">
        </div>
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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#editUser">
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
                    <?php
                    $sql=mysqli_query($conn,"SELECT * FROM client inner join category on client.Category=category.id;");
                    $count=1;
                  while ($row=mysqli_fetch_array($sql)){ ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-profile">
                            <div class="dropdown b-dropdown chart-dropdown drownMenu" id="__BVID__652">
                                <!----><button aria-haspopup="true" aria-expanded="false" type="button"
                                    class="btn dropdown-toggle btn-link p-0 dropdown-toggle-no-caret"
                                    id="__BVID__652__BV_toggle_"><svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                        height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="text-body cursor-pointer feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg></button>
                                <ul role="menu" tabindex="-1" class="dropdown-menu dorpMenuul"
                                    aria-labelledby="__BVID__652__BV_toggle_" style="">
                                    <li role="presentation"><a role="menuitem"
                                            href="view_clients/<?php echo $row['Client_Code'] ?>" target="_self"
                                            class="dropdown-item"> <i data-feather='eye'></i> View </a></li>
                                    <li role="presentation"><button type="button" class="dropdown-item w-100 usereditid"
                                            data-bs-toggle="modal" data-id="<?php echo $row['Client_Code'] ?>"><i
                                                data-feather='edit'></i> Edit </button></li>
                                    <li role="presentation"><button class="dropdown-item w-100 delbtn" type="button"
                                            onclick="deleteBtn()" data-id="=<?php echo $row['Client_Code']; ?>"><i
                                                data-feather='trash-2'></i> Delete</button></li>
                                    <li role="presentation"><button class="dropdown-item rpassword" type="button"
                                            data-toggle="modal" data-id="<?php echo $row['Client_Code']; ?>"><i
                                                data-feather='key'></i> Reset Password</button></li>

                                    <?php
                                    if($row['Status']=='Activated'){ ?>
                                    <li role="presentation"><a role="menuitem"
                                            href="clients?client=<?php echo $row['Client_Code'] ?>" target="_self"
                                            class="dropdown-item"><i data-feather='toggle-right'></i> Deactivated </a>
                                    </li>
                                    <?php } else{ ?>
                                    <li role="presentation"><a role="menuitem"
                                            href="clients?declient=<?php echo $row['Client_Code'] ?>" target="_self"
                                            class="dropdown-item"><i data-feather='toggle-left'></i> Activated </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <img src="app-assets/images/banner/banner-12.jpg" class="img-fluid card-img-top"
                                alt="Profile Cover Photo" />
                            <div class="card-body" <?php  if($row['Status']=='Deactivated'){ echo 'style="background:#e1e5ea;" ';  } ?> >
                                <div class="profile-image-wrapper">
                                    <div class="profile-image">
                                        <div class="avatar"> <a href="view_clients/<?php echo $row['Client_Code'] ?>">
                                                <?php
                                                    if($row['image']==""){
                                         echo '<img src="app-assets/images/portrait/small/avatar-s-9.jpg" alt="Profile Picture" />';
                                                    }else{  ?>
                                                <img src="images/clientImage/<?php echo $row['image'] ?>"
                                                    alt="Profile Picture" />
                                                <?php } ?>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <h3><a href="view_clients/<?php echo $row['Client_Code'] ?>"
                                        style="color:black"><?php echo $row['Firm_Name']; ?></a></h3>
                                <h6 class="text-muted"> <?php echo $row['Authorized_Name']; ?></h6>
                                <span
                                    class="badge badge-light-primary profile-badge"><?php echo $row['category']; ?></span>
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
                    <?php } ?>

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
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editUser">Add</button>
                            </div>
                        </div>
                    </div>
                    <!-- / edit user  -->
                </div>
            </div>
        </div>
        <!-- END: Content-->
                                                    </div>
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
                        <form id="editUserForm" action="action_clients.php" enctype="multipart/form-data" method="post"
                            class="row gy-1 pt-75">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserFirstName">Firm Name</label>
                                <input type="text" id="modalEditUserFirstName" name="fname" class="form-control"
                                    placeholder="" value="" data-msg="Please enter your firm name" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserLastName"> Name</label>
                                <input type="text" id="modalEditUserLastName" name="name" class="form-control"
                                    placeholder="" value="" data-msg="Please enter your name" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserEmail"> Email</label>
                                <input type="email" id="modalEditUserEmail" name="email" class="form-control" value=""
                                    placeholder="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserEmail"> Password</label>
                                <input type="password" id="modalEditUserEmail" name="pass" class="form-control" value=""
                                    placeholder="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserEmail">Mobile No.</label>
                                <input type="number" id="modalEditUserEmail" name="number" class="form-control" value=""
                                    placeholder="" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserStatus">Category</label>
                                <?php 
                                $query=mysqli_query($conn,"select * from category");
                                ?>
                                <select id="modalEditUserStatus" name="category" class="form-select"
                                    aria-label="Default select example">
                                    <option selected>Real Estate</option>
                                    <?php
                                    while($sql=mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $sql['id']; ?>"> <?php echo $sql['category']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTaxID">Image</label>
                                <input type="file" id="modalEditTaxID" name="image"
                                    class="form-control modal-edit-tax-id" />
                            </div>

                            <div class="col-12 text-center mt-2 pt-50">
                                <button type="submit" class="btn btn-primary me-1" name="submit1">Create</button>
                                <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
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
        <div class="modal fade" id="editmodalshow" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <h1 class="text-center mb-1" id="addNewCardTitle">Edit Client</h1>
                    <div class="modal-body px-sm-5 mx-50 pb-5 ">


                        <!-- form -->
                        <form id="" action="action_clients.php" method="post" enctype="multipart/form-data">
                            <div class="row gy-1 gx-2 mt-75 body1">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ add new card modal  -->
        <!--reset password-->
        <div class="modal fade" id="resetUserPass" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <h1 class="text-center mb-1" id="addNewCardTitle">Reset Password</h1>
                    <div class="modal-body px-sm-5 mx-50 pb-5 ">


                        <!-- form -->
                        <form id="addNewCardValidation" method="post">
                            <div class="row gy-1 gx-2 mt-75 body2">

                            </div>
                            <div class="row">
                                <div class="col-12 text-center mt-2 pt-50">
                                    <button type="submit" class="btn btn-primary me-1" name="submi"
                                        id="submi">Create</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        Discard
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--reset password-->
        <!-- BEGIN: Footer-->
        <?php
       include('include/footer.php');
       ?>
        <!-- END: Footer-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/cards/card-advance.js"></script>
        <!-- END: Page JS-->

        <script>
            $(".chart-dropdown").click(function () {
                $(this).toggleClass('show');
            });

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
                                window.location.href = "action_clients.php?del_id" + del_id;
                            } else {
                                swal("Your file is safe!");
                            }
                        });
                })
            });

            $(document).ready(function () {
                $('.usereditid').click(function () {
                    let editclient = $(this).data('id');

                    $.ajax({
                        url: 'action_clients.php',
                        type: 'post',
                        data: {
                            editclient: editclient
                        },
                        success: function (response1) {
                            $('.body1').html(response1);
                            $('#editmodalshow').modal('show');
                        }
                    });
                });

                $('.rpassword').click(function () {
                    let resetpass = $(this).data('id');

                    $.ajax({
                        url: 'action_clients.php',
                        type: 'post',
                        data: {
                            resetpass: resetpass
                        },
                        success: function (response1) {
                            $('.body2').html(response1);
                            $('#resetUserPass').modal('show');
                        }
                    });
                });

            });
        </script>
        <script type="text/javascript">
            $(function () {
                $("#submi").click(function () {
                    var password = $("#resetPass").val();
                    var confirmPassword = $("#confirmResetPass").val();
                    if (password != confirmPassword) {
                        alert("Passwords do not match.");
                        return false;
                    }
                    return true;
                });
            });
        </script>
        </body>
        <!-- END: Body-->

</html>