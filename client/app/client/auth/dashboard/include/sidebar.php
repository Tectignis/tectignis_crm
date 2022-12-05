  <!-- BEGIN: Main Menu-->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
              <li class="nav-item me-auto"><a class="navbar-brand" href="index"><span class="brand-logo">
                          <img src="../../../../../admin/images/favicon/images.jpeg"
                              style="width:50px;"></span>
                              <?php// echo $fetchlogo['logo'] ?>
                      <h2 class="brand-text">Client</h2>
                  </a></li>
              <!-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li> -->
          </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              <li class=" nav-item"><a class="d-flex align-items-center" href="index.php"><i
                          class="fa fa-bars"></i><span class="menu-title text-truncate"
                          data-i18n="Dashboards">Dashboard</span></a></li>

              <li class=" nav-item"><a class="d-flex align-items-center" href="package_box"><i class="fa fa-file"
                          aria-hidden="true"></i><span class="menu-title text-truncate"
                          data-i18n="Invoice">Packages</span></a>
                  <!-- <ul class="menu-content">
                    <?php
             // $qsidepackage=mysqli_query($conn,"select *,package_assign.id as id from package inner join package_assign on package.id=package_assign.lead_id where package_assign.firm_id='35'");
              //while($fsidepackage=mysqli_fetch_array($qsidepackage)){
              ?>
                        <li><a class="d-flex align-items-center" href="package/<?php //echo $fsidepackage['id'] ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List"><?php //echo $fsidepackage['title'] ?></span></a>
                        </li>
                        <?php //} ?>
                    </ul> -->
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="tickets"><i class="fa fa-ticket-alt"
                          aria-hidden="true"></i><span class="menu-title text-truncate"
                          data-i18n="File Manager">Tickets</span></a>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="notification"><i class="fa fa-bell" aria-hidden="true"></i><span class="menu-title text-truncate"
                          data-i18n="Documentation">Notification</span></a>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="event.php"><i class="fa fa-calendar-alt" aria-hidden="true"></i><span class="menu-title text-truncate"
                          data-i18n="Documentation">Event</span></a>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="todo"><i class="fa fa-check-square" aria-hidden="true"></i><span  class="menu-title text-truncate" data-i18n="Documentation">Todo</span></a>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa fa-cog"
                          aria-hidden="true"></i><span class="menu-title text-truncate"
                          data-i18n="Invoice">Setting</span></a>
                  <ul class="menu-content">
                      <li><a class="d-flex align-items-center" href="profile.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="List">Profile</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href="change_password.php"><i
                                  data-feather="circle"></i><span class="menu-item text-truncate"
                                  data-i18n="Preview">Change Password</span></a>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
  <!-- END: Main Menu-->