<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
  <!-- BEGIN: Main Menu-->
  <!-- <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class=" <?php echo $page == 'property.php' ? 'active':'' ?> nav-item me-auto"><a class="navbar-brand" href="html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Client</h2>
                    </a></li>
                <!-- <li class=" <?php echo $page == 'property.php' ? 'active':'' ?> nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li> -->
  <!-- </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="index.php"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a></li>
              
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Packages</span></a>
                </li>
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="tickets.php"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">Tickets</span></a>
                </li>
               
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="deals.php"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Deals</span></a>
                </li>
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="event.php"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Events</span></a>
                </li>
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="pricing.php"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Pricing</span></a>
                </li>
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="property.php"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Property</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-ecommerce-wishlist.php"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">Digital Poster</span></a>
              </li>
                </li>
               
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Account Setting</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="account.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Account</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="security.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Security</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="billing&plans.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Billing & Plans</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="notification.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Notification</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="connection.php"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Connection</span></a>
                        </li>
                    </ul>
                </li>
                <li class="  <?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="quotation.php"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Quotation</span></a>
                </li>
            </ul>
        </div>
    </div>
    END: Main Menu -->
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
              <li class="nav-item me-auto"><a class="navbar-brand"
                      href="html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                          <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                              <defs>
                                  <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                      y2="89.4879456%">
                                      <stop stop-color="#000000" offset="0%"></stop>
                                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                                  </lineargradient>
                                  <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                      x2="37.373316%" y2="100%">
                                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                                  </lineargradient>
                              </defs>
                              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                      <g id="Group" transform="translate(400.000000, 178.000000)">
                                          <path class="text-primary" id="Path"
                                              d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                              style="fill:currentColor"></path>
                                          <path id="Path1"
                                              d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                              fill="url(#linearGradient-1)" opacity="0.2"></path>
                                          <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                              points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                          </polygon>
                                          <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                              points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                          </polygon>
                                          <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                              points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                          </polygon>
                                      </g>
                                  </g>
                              </g>
                          </svg></span>
                      <h2 class="brand-text">Vuexy</h2>
                  </a></li>
              <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                          class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                          class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                          data-ticon="disc"></i></a></li>
          </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
              <li class="  <?php echo $page == 'index.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="index.php"><i
                          data-feather="home"></i><span class="menu-title text-truncate"
                          data-i18n="Dashboards">Dashboard</span></a>
              </li>

              <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span
                          class="menu-title text-truncate" data-i18n="Dashboards">Package</span></a>
                  <ul class="menu-content">
                      <li class="<?php echo $page == 'packages-title1.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="packages-title1.php"><i
                                  data-feather="circle"></i><span class="menu-item text-truncate"
                                  data-i18n="Analytics">Package Name</span></a>
                      </li>
                  </ul>
              </li>
              <li class="  <?php echo $page == 'deals.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="deals.php"><i
                          data-feather="mail"></i><span class="menu-title text-truncate"
                          data-i18n="Email">Deals</span></a>
              </li>
              <li  class="<?php echo $page == 'property.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="property.php"><i
                          data-feather="message-square"></i><span class="menu-title text-truncate"
                          data-i18n="Chat">Property</span></a>
              </li>

              <li class="nav-item"><a class="d-flex align-items-center" href="#"><i
                          data-feather="check-square"></i><span class="menu-title text-truncate"
                          data-i18n="Dashboards">Quotation</span></a>
                  <ul class="menu-content">
                      <li class="<?php echo $page == 'cus.php' ? 'active':'' ?> nav-item"> <a class=" d-flex align-items-center" href="cus.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Analytics">Customer</span></a>
                      </li>
                      <li class="<?php echo $page == 'quotation.php' ? 'active':'' ?> nav-item"><a class=" d-flex align-items-center" href="quotation.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Analytics">Quotation</span></a>
                      </li>
                      <li class="<?php echo $page == 'report.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="report.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Analytics">Report</span></a>
                      </li>
                      <li class="<?php echo $page == 'sales.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="sales.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Analytics">Sales</span></a>
                      </li>
                  </ul>
              </li>
              <li class="<?php echo $page == 'event.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="event.php"><i
                          data-feather="calendar"></i><span class="menu-title text-truncate"
                          data-i18n="Calendar">Events</span></a>
              </li>
              <li class="  <?php echo $page == 'tickets.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="tickets.php"><i
                          data-feather="grid"></i><span class="menu-title text-truncate"
                          data-i18n="Kanban">Ticket</span></a>
              </li>

              <li class="nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span
                          class="menu-title text-truncate" data-i18n="Charts">Account Setting</span></a>
                  <ul class="menu-content">
                      <li  class="  <?php echo $page == 'account.php' ? 'active':'' ?> nav-item"><a class="d-flex align-items-center" href="account.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Apex">Account</span></a>
                      </li>
                      <li class=" <?php echo $page == 'security.php' ? 'active':'' ?>  nav-item"><a class="d-flex align-items-center" href="security.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Chartjs">Security</span></a>
                      </li>
                      <li class="<?php echo $page == 'billing&plans.php' ? 'active':'' ?> nav-item"> <a class="d-flex align-items-center" href="billing&plans.php"><i
                                  data-feather="circle"></i><span class="menu-item text-truncate"
                                  data-i18n="Chartjs">Billing & Plan</span></a>
                      </li>
                      <li class="<?php echo $page == 'connection.php' ? 'active':'' ?> nav-item"> <a class="d-flex align-items-center" href="connection.php"><i data-feather="circle"></i><span
                                  class="menu-item text-truncate" data-i18n="Chartjs">Connection</span></a>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>