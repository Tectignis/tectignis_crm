<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class=" mt-3 pb-3 mb-3">
    <a href="#" style="text-decoration: none" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        <?php
        $name=$_SESSION["aname"];
        echo $name;
        ?>
      </span>
    </a>
</div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
               <li class="nav-item">
            <a href="index" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
             <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Packages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php
              $qsidepackage=mysqli_query($conn,"select *,package_assign.id as id from package inner join package_assign on package.id=package_assign.lead_id where package_assign.firm_id='$id'");
              while($fsidepackage=mysqli_fetch_array($qsidepackage)){
              ?>
              <li class="nav-item">
                <a href="package/<?php echo $fsidepackage['id'] ?>" class="nav-link <?= $page == 'package.php?packageId=<?php echo $fsidepackage["id"] ?>'  ? 'active':'' ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $fsidepackage['title'] ?></p>
                </a>
              </li>
              <?php } ?>
            </ul>
          </li>
       
          <!-- <li class="nav-item">
            <a href="lead" class="nav-link <?= $page == 'lead.php'  ? 'active':'' ?>">
            <i class="nav-icon fa fa-fw fa-users"></i>
              <p>
              Leads
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="tickettable" class="nav-link <?= $page == 'tickettable.php' || $page == 'ticketform' ? 'active':'' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile" class="nav-link <?= $page == 'profile.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-address-card"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="deal" class="nav-link <?= $page == 'deal.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-handshake"></i>
              <p>
                Deals
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="changepassword" class="nav-link <?= $page == 'changepassword.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-solid fa-key"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

