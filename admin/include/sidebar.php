<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class=" mt-3 pb-3 mb-3">
    <a href="index" style="text-decoration: none" class="brand-link">
      <img src="dist/img/logo/<?php echo $fetchlogo['logo'] ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
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
            <a href="index" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
            <li class="nav-item disabled">
            <a href="users" class="nav-link disabled <?= $page == 'users.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="raiseTicket" class="nav-link <?= $page == 'raiseTicket.php' ? 'active':'' ?>">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Support
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="clients" class="nav-link <?= $page == 'clients.php' ? 'active' :'' ?>">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Clients
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="roles" class="nav-link disabled <?= $page == 'index.php' ? :'' ?>">
              <i class="nav-icon fas fa-user-times"></i>
              <p>
                Roles
              </p>
            </a>
          </li>
 <li class="nav-item">
            <a href="category" class="nav-link <?= $page == 'category.php' ? 'active' :'' ?>">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Category
              </p>
            </a>
          </li>
<!-- 
            <li class="nav-item">
            <a href="lead" class="nav-link <?= $page == 'lead.php' ? 'active' :'' ?>">
            
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Leads
              </p>
            </a>
            </li> -->

            <li class="nav-item">
            <a href="system_setting" class="nav-link <?= $page == 'system_setting.php' ? 'active' :'' ?>">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                System Setting
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="client.php" class="nav-link <?= $page == 'client.php' || $page == 'addclient.php' ? 'active':'' ?>">
            <i class="nav-icon fa fa-fw fa-user-plus"></i>
              <p>
                Add Client
              </p>
            </a>
            </li>
           
          <li class="nav-item">
            <a href="lead.php" class="nav-link <?= $page == 'lead.php'|| $page == 'addlead.php' ? 'active':'' ?>">
            <i class="nav-icon fa fa-fw fa-users"></i>
              <p>
                Add Leads
              </p>
            </a>
            </li> -->

            <li class="nav-item">
            <a href="tickettable" class="nav-link <?= $page == 'tickettable.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="package" class="nav-link <?= $page == 'package.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
              Package
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="package_card" class="nav-link <?= $page == 'package_card.php' ? 'active':'' ?>">
            <i class="nav-icon fas fa-th"></i>
              <p>
              Package Card
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
  
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>