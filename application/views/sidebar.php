<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                 
                </div>
                <img src="assets/img/Siix.jpg" alt="Logo" width="160" height="60" class="mr-2">
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-columns"></i>
                    <span style="font-size: 20px;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

<!-- Nav Item - Data (Dropdown) -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-industry"></i>
        <span>DATA EQUIPMENT</span>
    </a>
    <!-- Collapse Menu for Data -->
    <div id="dataDropdown" class="collapse" aria-labelledby="dataDropdown" data-parent="#accordionSidebar">
        <ul class="nav flex-column ml-3">
            <!-- Data Machine -->
            <li class="nav-item">
                <a class="nav-link" href="data-mesin.html">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Data Machine</span>
                </a>
            </li>
            <!-- Data Pallet -->
            <li class="nav-item">
                <a class="nav-link" href="data-pallet.html">
                    <i class="fas fa-fw fa-pallet"></i>
                    <span>Data Pallet</span>
                </a>
            </li>
            <!-- Data Jig -->
            <li class="nav-item">
                <a class="nav-link" href="data-jig.html">
                    <i class="fas fa-fw fa-object-group"></i>
                    <span>Data Jig</span>
                </a>
            </li>
            <!-- Data Fume Extractor -->
            <li class="nav-item">
                <a class="nav-link" href="data-fume-extractor.html">
                    <i class="fas fa-fw fa-filter"></i>
                    <span>Data Fume Extractor</span>
                </a>
            </li>
            <!-- Data Selective -->
            <li class="nav-item">
                <a class="nav-link" href="data-selective.html">
                    <i class="fas fa-fw fa-tools"></i>
                    <span>Data Selective</span>
                </a>
            </li>
            <!-- Data Trolley -->
            <li class="nav-item">
                <a class="nav-link" href="data-trolley.html">
                    <i class="fas fa-fw fa-cart-arrow-down"></i>
                    <span>Data Trolley</span>
                </a>
            </li>
        </ul>
    </div>
</li>

                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>   

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>SCHEDULE PM</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>REPORT</span></a>
            </li>

             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-user-shield"></i>
                    <span>USER MANAGEMENT</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>SETTING</span></a>
            </li>

              <!-- Nav Item - Tables -->
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url("auth"); ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Log Out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>