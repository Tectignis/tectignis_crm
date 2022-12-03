<?php
session_start();
include("../../app/client/auth/dashboard/config.php");
if(isset($_POST['login'])){
$Email=$_POST['emailid'];
$Password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from client where Email='$Email' AND Status='Activated'");

if(mysqli_num_rows($sql)>0){
  $row=mysqli_fetch_assoc($sql); 
  $verify=password_verify($Password1,$row['Password']);

 if($verify==1){
   $_SESSION['aname']=$row['Authorized_Name'];
     $_SESSION['id']=$row['Client_Code'];
     $_SESSION['fname']=$row['Firm_Name'];
     $_SESSION['image']=$row['image'];
     header('location:../../app/client/auth/dashboard/index.php');
    }else{
        echo "<script>alert('Password is incorrect');</script>";
       
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}

if(isset($_POST['raiseticket'])){
  $firm_name=$_POST['Firm_Name'];
  $clientname=$_POST['clientname'];
  $mobile=$_POST['mobile'];
  $Email=$_POST['Email'];
  $Description=$_POST['Description'];
  date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-y h:i:s');
  $status="Open";
      $qraise=mysqli_query($conn,"INSERT INTO `support`(`firm_name`, `client_name`, `mobile`, `email`, `description`,`status`,`date`) VALUES ('$firm_name','$clientname','$mobile','$Email','$Description','$status','$date')");
      if($qraise){
        echo "<script>alert('Ticket Raised Successfully. Please wait Our teams will solve issue');</script>";
      }
      else{
        echo "<script>alert('Ticket Raised Failed');</script>";
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
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../app/client/auth/dashboard/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../app/client/auth/dashboard/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="">
                        <span class="d-flex">
                          <img src="../../../admin/images/favicon/images.jpeg"
                              style="width:50px;">
                            <h2 class="brand-text text-primary ms-1 mt-2">Client</h2></span>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="../../app/client/auth/dashboard/app-assets/images/pages/login-v2.svg" alt="Login V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1"  style="text-align:center;">Welcome to CRM 👋</h2>
                                
                                <form class="auth-login-form mt-2"  method="POST">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Email</label>
                                        <input class="form-control" id="login-email" type="text" name="emailid" placeholder="....." aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password">Password</label><a href="forgot-password.php"><small>Forgot Password?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="2" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-primary w-100" name="login" tabindex="4">Login</button>
                                </form>
                                
                                
                                
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/auth-login.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
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