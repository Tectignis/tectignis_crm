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
      <div class="form-inline">
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
       
          <li class="nav-item">
            <a href="lead.php" class="nav-link <?= $page == 'lead.php'  ? 'active':'' ?>">
            <i class="nav-icon fa fa-fw fa-users"></i>
              <p>
              Leads
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tickettable.php" class="nav-link <?= $page == 'tickettable.php' || $page == 'ticketform.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link <?= $page == 'profile.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-address-card"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="changepassword.php" class="nav-link <?= $page == 'changepassword.php' ? 'active':'' ?>">
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