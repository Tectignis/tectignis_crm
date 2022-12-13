<?php 
session_start();

include("config.php");
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<title>Payment Method</title>
    <!-- BEGIN: Header-->
   <?php include "include/header.php";?>
   <?php include "include/sidebar.php"; ?>
       <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    ]
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
                            <h2 class="content-header-title float-start mb-0">Payment Method</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">Account Settings
                                    </li>
                                    <li class="breadcrumb-item active">Payment Method
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
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
                                <a class="nav-link" href="admin_account.php">
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
                                <a class="nav-link active" href="payment_method.php">
                                    <i data-feather="credit-card" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Payment Method</span>
                                </a>
                            </li>
                            <!-- notification -->
                            <li class="nav-item">
                                <a class="nav-link" href="system-setting.php">
                                    <i data-feather="settings" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">System Setting</span>
                                </a>
                            </li>
                            <!-- connection -->
                            <li class="nav-item">
                                <a class="nav-link" href="google_analytics.php">
                                    <i data-feather="bar-chart" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Google Analytics</span>
                                </a>
                            </li>
                        </ul>

                        <!-- notifications -->

                        <section class="tooltip-validations" id="tooltip-validation">
                       
                    <div class="row">
                    <?php
                  $sql=mysqli_query($conn,"select * from payment_method");
                  while($arr=mysqli_fetch_array($sql)){
                  ?>
                    <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Razorpay</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="update_account.php" class="needs-validation" novalidate >
                                        <div class="row g-1">
                                            <div class="col-md-6 col-12 mb-3 position-relative">
                                                <label for="" class="mb-1">API Key</label>
                                                <input type="hidden" name="id" value="<?php echo $arr['id'];?>">
                                               <input type="text" class="form-control" placeholder="API Key" name="api_key" value="<?php echo $arr['api_key'];?>">
                                            </div>
                                            <div class="col-md-6 col-12 mb-3 position-relative">
                                                <label for="" class="mb-1">Secret Key</label>
                                               <input type="text" class="form-control" placeholder="Secret Key" name="secret_key" value="<?php echo $arr['secret_key'];?>">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                  
                </section>

                        <!--/ notifications -->
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
</body>
<!-- END: Body-->

</html>