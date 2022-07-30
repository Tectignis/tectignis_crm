

<?php
        $fname=$_SESSION["firm"];
        $client_id=$_SESSION['id'];
        ?>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <h3><a href="#"><?php echo $fname ?></a></h3>
</li>
<li>
<div class="card ml-2" style="width: fit-content;">
              <div class="card-header">
              <?php 
                date_default_timezone_set('Asia/Kolkata');

$get_swor = mysqli_query($conn,"select * from lead where Firm_Name='$id' and date(remainder_date)=date(now())");
  if (mysqli_num_rows($get_swor) > 0) { 
     while ( $swork_info = mysqli_fetch_array($get_swor)) { 
      $date = $swork_info['remainder_date']; 
	  }
	}
$time=date("h:i", strtotime($date));
$timestamp = strtotime($time);
$timestamp_one_hour_later = $timestamp - 3600; // 3600 sec. = 1 hour
$current_time=date("h:i");
echo $current_time;
$current_time_timestamp = strtotime($current_time);
$dd=$current_time_timestamp-$timestamp;
if ($current_time_timestamp == $timestamp_one_hour_later) {
echo "<font size=\"4\" color=\"red\">";
// echo strftime('%H:%M', $dd);
echo "</font>1 hrs left for requirment" . $swork_info['Requirement'] ." </p>";
}

?>
              </div>
            </div>
</li> 

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
  <!-- Notifications Dropdown Menu -->
  <?php
  $res_message=mysqli_query($conn,"select client.Firm_Name,lead.Client_Name,lead.Client_Name,lead.Requirement,lead.Created_On from lead,client where lead.status=0 and lead.Firm_Name='$client_id' and client.Client_Code=lead.Firm_Name");
  $unread_count=mysqli_num_rows($res_message);
  
  ?>
  <li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge"><?php echo $unread_count; ?></span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header"><?php echo $unread_count; ?> Notifications</span>
<div class="dropdown-divider"></div>
<?php
while($unread_time=mysqli_fetch_assoc($res_message)){
?>
<p class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> <?php echo $unread_time['Requirement']; ?>
<span class="float-right text-muted text-sm"><?php echo $unread_time['Client_Name']; ?></span>
</p>
<?php } ?>
<div class="dropdown-divider"></div>
<!-- <a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a> -->
<div class="dropdown-divider"></div>
<a href="lead.php" class="dropdown-item dropdown-footer">See All Lead</a>
</div>
</li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <a href="clientlogout.php" type="logout" name="logout" class="btn btn-primary">Logout</button>
        </a>
      </li>
    </ul>
  </nav>

  