<?php session_start();

include("config.php");
$aid=2;
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<title>Admin Account</title>
    <!-- BEGIN: Header-->
   <?php include "include/header.php";?>
   <?php include "include/sidebar.php"; ?>
       <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

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
                            <h2 class="content-header-title float-start mb-0">Account</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Account Settings
                                    </li>
                                    <li class="breadcrumb-item active"> Account
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                    href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span
                                        class="align-middle">Todo</span></a><a class="dropdown-item"
                                    href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span
                                        class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                            <!-- security -->
                            <li class="nav-item">
                                <a class="nav-link" href="account_password.php">
                                    <i data-feather="lock" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Security</span>
                                </a>
                            </li>
                             <!-- billing and plans -->
                             <li class="nav-item">
                                <a class="nav-link" href="payment_method.php">
                                    <i data-feather="credit-card" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Payment Method</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="system-setting.php">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">System Setting</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link" href="page-account-settings-connections.html">
                                    <i data-feather="link" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Connections</span>
                                </a>
                            </li>
                        </ul>

                        <!-- profile -->
                        <?php
                  $sql=mysqli_query($conn,"select * from login where id='$aid'");
                  while($arr=mysqli_fetch_array($sql)){
                  ?>
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <form method="post" action="update_account.php" enctype="multipart/form-data">
                                <div class="card-body py-2 my-25">
                                    <!-- header section -->
                                    <div class="d-flex col-12 col-sm-6 mb-1">
                                        <a href="#" class="me-25">
                                        <img src="images/logo&icon/<?php echo $arr['profile'];?>" 
                                                id="account-upload-img" class="uploadedAvatar rounded me-50"
                                                alt="profile image" height="100" width="100" />
                                        </a>
                                        <!-- upload and reset button -->
                                        <div class="d-flex align-items-end mt-75 ms-1">
                                            <div>
                                            <input type="hidden" name="profile" value="<?php echo $arr['id'] ?>">
                                                <label for="account-upload"
                                                    class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                                <input type="file" id="account-upload" hidden name="profile"
                                                    accept="image/*" />
                                                <button type="button" id="account-reset"
                                                    class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                                <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                            </div>
                                        </div>
                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header section -->

                                    <!-- form -->
                                  
                                
                                        <div class="row">
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountFirstName">Full Name</label>
                                                <input type="text" class="form-control" id="accountFirstName"
                                                    name="fullName" placeholder="Full Name" name="fullName" value="<?php echo $arr['name'];?>"
                                                    data-msg="Please enter first name" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountLastName">Phone Number</label>
                                                <input type="number" class="form-control" id="accountLastName"
                                                    name="phone" placeholder="Phone Number" name="phone"value="<?php echo $arr['phone_number'];?>"
                                                    data-msg="Please enter last name" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountEmail">Email Id</label>
                                                <input type="email" class="form-control" name="email" id="accountEmail"value="<?php echo $arr['Email'];?>"
                                                    name="email" placeholder="Email" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountOrganization">Organization
                                                    Name</label>
                                                <input type="text" class="form-control" id="accountOrganization"value="<?php echo $arr['organization_name'];?>"
                                                    name="organization_name" placeholder="Organization name" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountPhoneNumber">Support
                                                    Number</label>
                                                <input type="number" class="form-control account-number-mask"
                                                    id="accountPhoneNumber" name="support_number"value="<?php echo $arr['support_number'];?>"
                                                    placeholder="Phone Number" value="457 657 1237" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountAddress">Support Email</label>
                                                <input type="email" class="form-control" id="accountAddress"value="<?php echo $arr['support_email'];?>"
                                                name="support_email" placeholder="Your Address" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountState">GST NO</label>
                                                <input type="text" class="form-control" id="accountState" name="gst_no"value="<?php echo $arr['gst_no'];?>"
                                                placeholder="GST NO" />
                                            </div>
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountZipCode">PAN N0</label>
                                                <input type="text" class="form-control account-zip-code"
                                                    id="accountZipCode" name="pancard" placeholder="Pancard No"
                                                    value="<?php echo $arr['pan_no'];?>"
                                                    name="pancard" maxlength="6" />
                                            </div>
                                              <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountZipCode">CIN N0</label>
                                                <input type="text" class="form-control account-zip-code"
                                                    id="accountZipCode" name="cin" placeholder="CIN No"
                                                    value="<?php echo $arr['cin_no'];?>"
                                                    name="cin" maxlength="6" />
                                            </div>
                                             <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="accountZipCode"></label>
                                                <input type="hidden" class="form-control account-zip-code"
                                                    id="accountZipCode" name="id" placeholder="Pancard No"
                                                    value="<?php echo $aid?>"
                                                    name="pancard" maxlength="6" />
                                            </div>
                                           
                                            <div class="col-12 col-sm-6 mb-1">
                                                <label for="language" class="form-label">Bank Details</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"value="<?php echo $arr['bank_details'];?>"
                                                    name="bank_details" rows="3" placeholder="Bank Details"><?php echo $arr['bank_details'];?></textarea>
                                            </div>
                                             <div class="col-12 col-sm-6 mb-1">
                                                <label class="form-label" for="country">Address</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" value="<?php echo $arr['address'];?>"
                                                    name="address" rows="3" placeholder="Address"><?php echo $arr['address'];?></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" name="update_profile"
                                                    class="btn btn-primary mt-1 me-1">Update changes</button>
                                                <button type="reset"
                                                    class="btn btn-outline-secondary mt-1">Discard</button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">Phone Number</label>
                                            <input type="number" class="form-control" id="accountLastName" name="phone"
                                                placeholder="Phone Number" name="phone"
                                                value="<?php echo $arr['phone_number'];?>"
                                                data-msg="Please enter last name" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email Id</label>
                                            <input type="email" class="form-control" name="email" id="accountEmail"
                                                value="<?php echo $arr['Email'];?>" name="email" placeholder="Email" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountOrganization">Organization
                                                Name</label>
                                            <input type="text" class="form-control" id="accountOrganization"
                                                value="<?php echo $arr['organization_name'];?>" name="organization_name"
                                                placeholder="Organization name" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountPhoneNumber">Support
                                                Number</label>
                                            <input type="number" class="form-control account-number-mask"
                                                id="accountPhoneNumber" name="support_number"
                                                value="<?php echo $arr['support_number'];?>" placeholder="Phone Number"
                                                value="457 657 1237" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountAddress">Support Email</label>
                                            <input type="email" class="form-control" id="accountAddress"
                                                value="<?php echo $arr['support_email'];?>" name="support_email"
                                                placeholder="Your Address" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountState">GST NO</label>
                                            <input type="text" class="form-control" id="accountState" name="gst_no"
                                                value="<?php echo $arr['gst_no'];?>" placeholder="GST NO" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountZipCode">PAN N0</label>
                                            <input type="text" class="form-control account-zip-code" id="accountZipCode"
                                                name="pancard" placeholder="Pancard No"
                                                value="<?php echo $arr['pan_no'];?>" name="pancard" maxlength="6" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountZipCode">CIN N0</label>
                                            <input type="text" class="form-control account-zip-code" id="accountZipCode"
                                                name="cin" placeholder="CIN No" value="<?php echo $arr['cin_no'];?>"
                                                name="cin" maxlength="6" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountZipCode"></label>
                                            <input type="hidden" class="form-control account-zip-code"
                                                id="accountZipCode" name="id" placeholder="Pancard No"
                                                value="<?php echo $aid?>" name="pancard" maxlength="6" />
                                        </div>

                                        <div class="col-12 col-sm-6 mb-1">
                                            <label for="language" class="form-label">Bank Details</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                value="<?php echo $arr['bank_details'];?>" name="bank_details" rows="3"
                                                placeholder="Bank Details"><?php echo $arr['bank_details'];?></textarea>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="country">Address</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                value="<?php echo $arr['address'];?>" name="address" rows="3"
                                                placeholder="Address"><?php echo $arr['address'];?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="update_profile"
                                                class="btn btn-primary mt-1 me-1">Update changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                        </div>
                                    </div>
                            </form>
                            <?php } ?>
                            <!--/ form -->
                        </div>
                    </div>

                    <!-- deactivate account  -->

                    <!--/ profile -->
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   <!-- BEGIN: Footer-->
   <?php include "include/footer.php"; ?>
    <!-- END: Footer-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-account-settings-account.js"></script>
    <!-- END: Page JS-->

   
</body>
<!-- END: Body-->

</html>