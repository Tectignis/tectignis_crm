<?php
session_start();
include("config.php");
if(!isset($_SESSION['id'])){
    header('location:../../../../auth/path/login.php');
}
$packageId=$_GET['packageId'];

//lead delete
// if(isset($_GET['delid'])){
//     $id=mysqli_real_escape_string($conn,$_GET['delid']);
//     $sql=mysqli_query($conn,"delete from lead where id='$id'");
//     if($sql=1){
//         header("Location: package/".$packageId);
//         exit;
//     }
//     }

    if(isset($_GET['gen'])){
      $id=mysqli_real_escape_string($conn,$_GET['gen']);
      $sql=mysqli_query($conn,"update lead set `deal`='1' where id='$id'");
      if($sql==1){
       header("location:deals.php");
      }
    }
    $id=$_SESSION['id'];
    mysqli_query($conn,"update lead set status=1 where Firm_Name=$id");   
    
    if(isset($_POST['update'])){
      $id=$_POST['idclient'];
      $nature=$_POST['nature'];
       $remark=$_POST['remark'];
  
      $sql=mysqli_query($conn,"UPDATE `lead` SET `nature`='$nature' WHERE id='$id'");
      $qcheckremark=mysqli_query($conn,"select * from remarks where lead_id='$id'");
      if(mysqli_num_rows($qcheckremark)>0){
          $sql1=mysqli_query($conn,"update remarks set remark='$remark' where lead_id='$id'");
      }else{
       $sql1=mysqli_query($conn,"INSERT INTO `remarks`(`remark`,`lead_id`) VALUES ('$remark','$id')");
      }
      if($sql==1){
          echo "Saved!", "data successfully submitted", "success";
          header('location:'.$packageId);
      }else {
          echo '<script>alert("oops...somthing went wrong");</script>';
      }
  }

  $packageId=$_GET['packageId'];
 $qcardpackage=mysqli_query($conn,"select *,package_assign.id as id from lead inner join package_assign on lead.package=package_assign.title inner join package on package_assign.lead_id=package.id where package_assign.firm_id='$id' and package_assign.id='$packageId'");
 
 

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <base href="http://localhost:8000/tectignis_crm/client/app/client/auth/dashboard/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Leads</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

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
    <style>
        .badge-danger {
            background: red !important;
        }

        .badge-info {
            background: #ffff !important;
        }

        .btn-icon {
            padding: 3px !important;
        }
    </style>
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
        <?php
    if(mysqli_num_rows($qcardpackage)>0){
        $fcardpackage=mysqli_fetch_array($qcardpackage);
        $title= $fcardpackage['title'];
    ?>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Leads</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="package_box">Packages</a>
                                    </li>
                                    <li class="breadcrumb-item">Leads
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <?php
                if($fcardpackage['balance']!=0){
                $qnotification=mysqli_query($conn,"SELECT * , package, count(package) as count, DATEDIFF(due_date, NOW()) AS date_diff FROM lead inner join package_assign on package_assign.title=lead.package  where package_assign.id='$packageId' and firm_id='$id' group by lead_id HAVING COUNT(lead_id) > 0");
                $fnotification=mysqli_fetch_array($qnotification);
               
                if($fnotification['date_diff']<=5){
                    if($fnotification['date_diff']>=0){
                  echo '<span style="font-size:17px;margin-left: -26px;" class="badge badge-danger">Only '.$fnotification['date_diff'].' days left payment due</span>';
                    }else{
                        echo '<span style="font-size:17px;margin-left: -26px;" class="badge badge-danger">Expire</span>';
                    }
                }
                $calculateRemainingLead=$fcardpackage['total_lead']-$fnotification['count'];
                // if($calculateRemainingLead<=10){
                //   echo '<span style="font-size:17px;margin-left: -26px;" class="badge badge-info">You have only'. $calculateRemainingLead.' leads</span>';
                // }
            }else{

            }
                ?>
                </div>
            </div>
            <div class="content-body">
                <?php 
                    date_default_timezone_set('Asia/Kolkata');
                if((date('Y-m-d , h:i:s')) <= ($fcardpackage['due_date'])){
                ?>
                <section id="dashboard-ecommerce">
                    <div class="row" id="status">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and package='$title'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Total Lead</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i class="far fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Hot</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Cold</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-check" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Warm</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-times" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr no.</th>

                                                <th>Client Name</th>
                                                <th>Client Mobile Number</th>
                                                <th>Requirement</th>
                                                <th>Created On</th>
                                                <th>Source</th>
                                                <th>Nature</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="display">

                                            <?php
                     
                          $qsql=mysqli_query($conn,"select *,lead.id as id, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$title';");
                          $count=1;
                        while ($frow=mysqli_fetch_array($qsql)){ 
                                      ?>
                                            <tr>

                                                <td><?php echo $count;?></td>
                                                <td><?php echo $frow['Client_Name']; ?></td>
                                                <td><?php echo $frow['Mobile_Number']; ?></td>
                                                <td><?php echo $frow['Requirement']; ?></td>
                                                <td><?php echo $frow['Created_On']; ?></td>
                                                <td><?php echo $frow['social_media']; ?></td>
                                                <td><?php
                                                $status=$frow['nature'];
                                                if($status=='Hot'){
                                                    echo '<span class="badge badge-light-danger">Hot</span>';
                                                }
                                                else if($status=='Cold'){
                                                    echo '<span class="badge badge-light-primary">Cold</span>';
                                                }else if($status=='Deal Closed'){
                                                   echo '<span class="badge badge-light-dark">Deal Closed</span>';
                                                }else if($status=='Warm'){
                                                    echo '<span class="badge badge-light-success">Warm</span>';
                                                }
                                                ?> </td>
                                                <td style="text-align:center">

                                                    <button class="btn btn-primary btn-rounded btn-icon usereditid"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#m<?php echo $frow['id'] ?>"
                                                        data-id='<?php echo $frow['id']; ?>'
                                                        <?php
                                                if($status=='Deal Closed'){
                                                echo 'style="display:none;"'; }else{ echo 'style="color: aliceblue"'; } ?>> <i class="fas fa-pen"></i>
                                                    </button>

                                                    <button class="btn btn-primary btn-rounded btn-icon usereditid"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#remark<?php echo $frow['id'] ?>"
                                                        data-id='<?php echo $frow['id']; ?>'> <i class="fa fa-eye"></i>
                                                    </button>


                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!--/ Basic table -->

                <?php }
                else if($fcardpackage['total_amt']==$fcardpackage['first_payment']){ ?>
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-md-3">
                            <form onclick="getdat(this.value)" style="float:left;padding: 15px 15px 0 15px;">
                                <input type="hidden" id="sessionid" value="<?php echo $id;?>">
                                <input type="hidden" id="packageid" value="<?php echo $title;?>">
                                <select id="demo_overview_minimal_multiselect" class="dropbtn form-control"
                                    style="background-color:#fff;">
                                    <option selected>Last Week</option>
                                    <option>Monthly</option>
                                    <option>3 Month</option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and package='$title'");
                                            $count1=mysqli_num_rows($query);
                                            ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Total Lead</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <i class="far fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Hot' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Hot</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Cold' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Cold</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-check" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <?php
                                              $query=mysqli_query($conn,"select * from lead where nature='Warm' and Firm_Name='$id' and package='$title'");
                                              $count1=mysqli_num_rows($query);
                                              ?>
                                        <h3 class="fw-bolder mb-75"><?php echo $count1; ?></h3>
                                        <span>Warm</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <i class="fas fa-user-times" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr no.</th>
                                                <th>Client Name</th>
                                                <th>Client Mobile Number</th>
                                                <th>Requirement</th>
                                                <th>Created On</th>
                                                <th>Source</th>
                                                <th>Nature</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="display">

                                            <?php
                                        $qsql=mysqli_query($conn,"select *,lead.id as id, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name inner join package_assign on package_assign.title=lead.package where package_assign.id='$packageId' and client.Client_Code='$id' and lead.package='$title';");
                                        $count=1;
                                        while ($frow=mysqli_fetch_array($qsql)){ 
                                      ?>
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $frow['Client_Name']; ?></td>
                                                <td><?php echo $frow['Mobile_Number']; ?></td>
                                                <td><?php echo $frow['Requirement']; ?></td>
                                                <td><?php echo $frow['Created_On']; ?></td>
                                                <td><?php echo $frow['social_media']; ?></td>
                                                <td>
                                                    <?php
                                                $status=$frow['nature'];
                                                if($status=='Hot'){
                                                    echo '<span class="badge badge-light-danger">Hot</span>';
                                                }
                                                else if($status=='Cold'){
                                                    echo '<span class="badge badge-light-primary">Cold</span>';
                                                }else if($status=='Deal Closed'){
                                                   echo '<span class="badge badge-light-dark">Deal Closed</span>';
                                                }else if($status=='Warm'){
                                                    echo '<span class="badge badge-light-success">Warm</span>';
                                                }
                                                ?>
                                                </td>
                                                <td style="text-align:center">


                                                    <a href="#m<?php echo $frow['id'] ?>"
                                                        class="btn btn-primary btn-rounded btn-icon usereditid"
                                                        data-toggle="modal" data-target=""
                                                        data-id='<?php echo $frow['id']; ?>'
                                                        <?php
                                                if($status=='Deal Closed'){
                                                echo 'style="display:none;"'; }else{ echo 'style="color: aliceblue"'; } ?>> <i class="fas fa-pen"></i>
                                                        </button></a>


                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                        <input type="text" class="form-control dt-full-name"
                                            id="basic-icon-default-fullname" placeholder="John Doe"
                                            aria-label="John Doe" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-post">Post</label>
                                        <input type="text" id="basic-icon-default-post" class="form-control dt-post"
                                            placeholder="Web Developer" aria-label="Web Developer" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-email">Email</label>
                                        <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                                            placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                        <small class="form-text"> You can use letters, numbers & periods </small>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date"
                                            placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary"
                                            placeholder="$12000" aria-label="$12000" />
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <?php }
            else{
                echo "<div style=' text-align: center;
                height: 100%;
                position: relative;
                top: 50%;
                color: mediumvioletred;
                font-size: xxx-large;
                font-weight: bolder;'>Please Pay</div>";
            }
            ?>

            </div>
            <?php 
                 $qclientsql=mysqli_query($conn,"select lead.*, client.*, lead.Mobile_Number from lead inner join client on client.Client_Code=lead.Firm_Name where Client_Code='$id'");
                 while ($arr=mysqli_fetch_array($qclientsql)){ 
                ?>
            <div class="modal fade" id="m<?php echo $arr['id'] ?>">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Leads</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close">×</button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body body2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <label>Nature</label>
                                                    <input type="hidden" name="idclient"
                                                        value="<?php echo $arr['id'] ?>">
                                                    <select class="form-control" name="nature" style="width: 100%;"
                                                        onclick="drop<?php echo $arr['id']; ?>()">
                                                        <option value="">Select</option>
                                                        <option value="Hot"
                                                            <?php if($arr['nature'] == 'Hot'){ echo 'selected';} ?>>Hot
                                                        </option>
                                                        <option value="Cold"
                                                            <?php if($arr['nature'] == 'Cold') { echo 'selected';} ?>>
                                                            Cold</option>
                                                        <option value="Warm"
                                                            <?php if($arr['nature'] == 'Warm') { echo 'selected';} ?>>
                                                            Warm</option>
                                                        <option value="Deal Closed"
                                                            <?php if($arr['nature'] == 'Deal Closed') { echo 'selected';} ?>>
                                                            Deal Closed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php $leadId=$arr['id'];
                                            $qremark=mysqli_query($conn,"select * from remarks where lead_id='$leadId'");
                                            $fremark=mysqli_fetch_array($qremark);
                                            ?>
                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <label for="inputEmail">Remark : </label></br>
                                                    <?php  if(mysqli_num_rows($qremark)>0){ ?>
                                                    <textarea name="remark" class="form-control"
                                                        style="width: 100%;resize: none;"><?php echo $fremark['remark'];  ?></textarea>
                                                    <?php }else{ ?>
                                                    <textarea name="remark" class="form-control"
                                                        style="width: 100%;resize: none;"></textarea>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                               
                                                <script>
                                                    function drop < ? = $arr['id']; ? > () {
                                                        var select = document.getElementById(
                                                            "dropdown<?php echo $arr['id']; ?>");
                                                        var text = document.getElementById(
                                                            "textt<?php echo $arr['id']; ?>");
                                                        if (select.selected == true) {
                                                            text.style.display = "block";
                                                        } else {
                                                            text.style.display = "none";
                                                        }
                                                    }
                                                </script>
                                                <script>
                                                    function myFunction < ? = $arr['id'] ? > () {
                                                        let checkBox = document.getElementById(
                                                            "myCheck<?php echo $arr['id'] ?>");
                                                        let text = document.getElementById(
                                                            "text<?php echo $arr['id'] ?>");
                                                        if (checkBox.checked == true) {
                                                            text.style.display = "block";
                                                        } else {
                                                            text.style.display = "none";
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="remark<?php echo $arr['id'] ?>">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">View Remark</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close">×</button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body body2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <?php $leadId=$arr['id'];
                                            $qremark=mysqli_query($conn,"select * from remarks where lead_id='$leadId'");
                                            $fremark=mysqli_fetch_array($qremark);
                                            ?>
                                            <div class="col-12">
                                                <div class="form-group mt-2">
                                                    <label for="inputEmail">Remark: </label></br>
                                                    <?php  if(mysqli_num_rows($qremark)>0){ ?>
                                                    <textarea name="remark" class="form-control"
                                                        style="width: 100%;resize: none;" readonly><?php echo $fremark['remark'];  ?></textarea>
                                                    <?php }else{ ?>
                                                    <textarea name="remark" class="form-control"
                                                        style="width: 100%;resize: none;"></textarea>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                  
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
       
        <?php }else{
echo '<div style="font-size: xxx-large;text-align: center;color: blue;">No Any Lead</div>'; 
        }
?>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <?php include "include/footer.php"; ?>




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
        function getdat(val) {
            let packageid = $("#packageid").val();
            let sessionid = $("#sessionid").val();
            let dropbtn = $(".dropbtn").val();
            $.ajax({
                url: "actionTableLead.php",
                method: "POST",
                data: {
                    packageid: packageid,
                    sessionid: sessionid,
                    dropbtn: dropbtn
                },
                success: function (data) {
                    $('#status').html(data);
                }
            });
        }
    </script>
    <script>
        function get_fb() {
            let package_id = <?php echo $packageId ?> ;
            let leadid = "<?php echo $title ?>";
            let feedback = $.ajax({
                type: "POST",
                data: {
                    package_id: package_id,
                    leadid: leadid
                },
                url: "actionTableLead.php",
                async: false,
                success: function (feedback) {
                    $('#display').html(feedback);
                }
            })
        }
        get_fb(); // This will run on page load
        setInterval(function () {
            get_fb(); // this will run after every 5 seconds
        }, 10000);
    </script>
</body>
<!-- END: Body-->

</html>