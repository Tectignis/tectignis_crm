<?php
session_start();
$id=$_SESSION['id'];
include("config.php");
if(isset($_POST['fetch'])){
    $fetch=$_POST['fetch'];
    $id=$_POST['leadid'];
    if($fetch == 'Today'){
        $query=mysqli_query($conn,"select * from lead where status_deal='Open' and  date(Created_On)=date(now()) and Firm_Name='$id'");
$count1=mysqli_num_rows($query);

    echo '<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
    <div class="d-flex flex-row">
        <div class="avatar bg-light-primary me-2">
            <div class="avatar-content">
                <i data-feather="trending-up" class="avatar-icon"></i>
            </div>
        </div>
        <div class="my-auto">
            <h4 class="fw-bolder mb-0">'. $count1 .'</h4>
            <p class="card-text font-small-3 mb-0">New Leads</p>
        </div>
    </div>
</div>
';
              $query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  date(Created_On)=date(now())");
               $count1=mysqli_num_rows($query);
              echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
    <div class="d-flex flex-row">
        <div class="avatar bg-light-info me-2">
            <div class="avatar-content">
                <i data-feather="user" class="avatar-icon"></i>
            </div>
        </div>
        <div class="my-auto">
            <h4 class="fw-bolder mb-0">'.$count1.'</h4>
            <p class="card-text font-small-3 mb-0">Total Leads</p>
        </div>
    </div>
</div>
';
              $query=mysqli_query($conn,"select * from lead where status_deal='Closed'  and  date(Created_On)=date(now()) and Firm_Name='$id'");
               $count1=mysqli_num_rows($query);
               echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
    <div class="d-flex flex-row">
        <div class="avatar bg-light-danger me-2">
            <div class="avatar-content">
                <i data-feather="box" class="avatar-icon"></i>
            </div>
        </div>
        <div class="my-auto">
            <h4 class="fw-bolder mb-0">'. $count1.'</h4>
            <p class="card-text font-small-3 mb-0">Closed Leads</p>
        </div>
    </div>
</div>
';
               $qBooked=mysqli_query($conn,"select * from lead where status_deal='Booked' and date(Created_On)=date(now()) and Firm_Name='$id'");
               $nBookedFetch=mysqli_num_rows($qBooked);
              echo '
<div class="col-xl-3 col-sm-6 col-12">
    <div class="d-flex flex-row">
        <div class="avatar bg-light-success me-2">
            <div class="avatar-content">
                <i data-feather="dollar-sign" class="avatar-icon"></i>
            </div>
        </div>
        <div class="my-auto">
            <h4 class="fw-bolder mb-0">'. $nBookedFetch.'</h4>
            <p class="card-text font-small-3 mb-0">Total Booked</p>
        </div>
    </div>
</div>
';
}
else if($fetch == 'Last Week'){
    $query=mysqli_query($conn,"select * from lead where status_deal='Open' and  YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);

echo '<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-primary me-2">
 <div class="avatar-content">
     <i data-feather="trending-up" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1 .'</h4>
 <p class="card-text font-small-3 mb-0">New Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK)");
    $count1=mysqli_num_rows($query);
   echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-info me-2">
 <div class="avatar-content">
     <i data-feather="user" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'.$count1.'</h4>
 <p class="card-text font-small-3 mb-0">Total Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where status_deal='Closed'  and  YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);
    echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-danger me-2">
 <div class="avatar-content">
     <i data-feather="box" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1.'</h4>
 <p class="card-text font-small-3 mb-0">Closed Leads</p>
</div>
</div>
</div>
';
$qBooked=mysqli_query($conn,"select * from lead where status_deal='Booked' and YEARWEEK(Created_On) = YEARWEEK(NOW() - INTERVAL 1 WEEK) and Firm_Name='$id'");
    $nBookedFetch=mysqli_num_rows($qBooked);
   echo '
<div class="col-xl-3 col-sm-6 col-12">
<div class="d-flex flex-row">
<div class="avatar bg-light-success me-2">
 <div class="avatar-content">
     <i data-feather="dollar-sign" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $nBookedFetch.'</h4>
 <p class="card-text font-small-3 mb-0">Total Booked</p>
</div>
</div>
</div>
';
}
else if($fetch == 'Monthly'){
    $query=mysqli_query($conn,"select * from lead where status_deal='Open' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH) and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);

echo '<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-primary me-2">
 <div class="avatar-content">
     <i data-feather="trending-up" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1 .'</h4>
 <p class="card-text font-small-3 mb-0">New Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH)");
    $count1=mysqli_num_rows($query);
   echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-info me-2">
 <div class="avatar-content">
     <i data-feather="user" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'.$count1.'</h4>
 <p class="card-text font-small-3 mb-0">Total Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where status_deal='Closed'  and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH) and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);
    echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-danger me-2">
 <div class="avatar-content">
     <i data-feather="box" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1.'</h4>
 <p class="card-text font-small-3 mb-0">Closed Leads</p>
</div>
</div>
</div>
';
$qBooked=mysqli_query($conn,"select * from lead where status_deal='Booked' and Created_On > DATE_SUB(NOW(), INTERVAL 1 MONTH) and Firm_Name='$id'");
    $nBookedFetch=mysqli_num_rows($qBooked);
   echo '
<div class="col-xl-3 col-sm-6 col-12">
<div class="d-flex flex-row">
<div class="avatar bg-light-success me-2">
 <div class="avatar-content">
     <i data-feather="dollar-sign" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $nBookedFetch.'</h4>
 <p class="card-text font-small-3 mb-0">Total Booked</p>
</div>
</div>
</div>
';
}
else if($fetch == '3 Month'){
    $query=mysqli_query($conn,"select * from lead where status_deal='Open' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);

echo '<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-primary me-2">
 <div class="avatar-content">
     <i data-feather="trending-up" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1 .'</h4>
 <p class="card-text font-small-3 mb-0">New Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where Firm_Name='$id' and  Created_On >= DATE(NOW()) - INTERVAL 3 MONTH");
    $count1=mysqli_num_rows($query);
   echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-info me-2">
 <div class="avatar-content">
     <i data-feather="user" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'.$count1.'</h4>
 <p class="card-text font-small-3 mb-0">Total Leads</p>
</div>
</div>
</div>
';
$query=mysqli_query($conn,"select * from lead where status_deal='Closed'  and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH and Firm_Name='$id'");
    $count1=mysqli_num_rows($query);
    echo '
<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
<div class="d-flex flex-row">
<div class="avatar bg-light-danger me-2">
 <div class="avatar-content">
     <i data-feather="box" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $count1.'</h4>
 <p class="card-text font-small-3 mb-0">Closed Leads</p>
</div>
</div>
</div>
';
$qBooked=mysqli_query($conn,"select * from lead where status_deal='Booked' and Created_On >= DATE(NOW()) - INTERVAL 3 MONTH and Firm_Name='$id'");
   $nBookedFetch=mysqli_num_rows($qBooked);
   echo '
<div class="col-xl-3 col-sm-6 col-12">
<div class="d-flex flex-row">
<div class="avatar bg-light-success me-2">
 <div class="avatar-content">
     <i data-feather="dollar-sign" class="avatar-icon"></i>
 </div>
</div>
<div class="my-auto">
 <h4 class="fw-bolder mb-0">'. $nBookedFetch.'</h4>
 <p class="card-text font-small-3 mb-0">Total Booked</p>
</div>
</div>
</div>
';
}
}
?>

<?php
date_default_timezone_set('Asia/Kolkata');
$qleadTimer=mysqli_query($conn,"select Client_Name,Requirement , remainder_date, (DATE_FORMAT(remainder_date,'%H')) AS 'hour', (DATE_FORMAT(remainder_date,'%i')) AS 'min',(date(remainder_date)) AS 'date' from lead where Firm_Name='$id'");
$nreminder=mysqli_num_rows($qleadTimer);
while($freminder=mysqli_fetch_array($qleadTimer)){
$leadhour=$freminder['hour'];
$minusleadhour=$leadhour-1;
$leadmin=$freminder['min'];
$leaddate=$freminder['date'];
$Requirement=$freminder['Requirement'];
    if($leaddate == date('Y-m-d')){
        if($minusleadhour == date('H') && $leadmin == date('i')){
          $time=date("$leaddate $leadhour:$leadmin");
          $timestamp = strtotime($time);
          $timestamp_one_hour_later = $timestamp - 3600; // 3600 sec. = 1 hour
          $cur=date("Y-m-d H:i");
          $timestamp1 = strtotime($cur);
          if ($timestamp1 == $timestamp_one_hour_later) {
              echo "Follow up of lead ".$Client_Name. "for" .$Requirement;
          } else {
              echo "false";
          }
        }
    }
}

?>

