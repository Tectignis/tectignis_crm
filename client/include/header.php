

<?php
$name=$_SESSION['fname'];
        $client_id=$_SESSION['id'];
      
        ?>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" id="sideCollapse" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        
      <h3><a href="#"><?php echo $name ?></a></h3>
</li>
<li>
<div class=" ml-2" style="width: fit-content;">
                <div id="output"></div>
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
  

  