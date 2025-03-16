<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                 
                </div>
                <img src="<?= base_url('assets/img/Siix.jpg');?>" alt="Logo" width="180" height="60" class="mr-2">
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('index.php/auth/dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>SCHEDULE PM</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">SCHEDULE</h6>
                        <a class="collapse-item" href="<?= base_url('schedule/s_machine'); ?>">Machine</a>
                        <a class="collapse-item" href="<?= base_url('schedule/s_pallet'); ?>">Pallet Selective</a>
                        <a class="collapse-item" href="<?= base_url('schedule/s_jig'); ?>">Jig</a>
                        <a class="collapse-item" href="<?= base_url('schedule/s_fume'); ?>">Fume Extractor</a>
                        <a class="collapse-item" href="<?= base_url('schedule/s_selective'); ?>">Selective Line</a>
                        <a class="collapse-item" href="<?= base_url('schedule/s_trolley'); ?>">Trolley & Handjack</a>
                        
                    </div>
                </div>
            </li>

           
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-industry"></i>
                    <span>DATA EQUIPMENT</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">DATA</h6>
                        <a class="collapse-item" href="#">Machine</a>
                        <a class="collapse-item" href="#">Pallet Selective</a>
                        <a class="collapse-item" href="#">Jig</a>
                        <a class="collapse-item" href="#">Fume Extractor</a>
                        <a class="collapse-item" href="#">Selective Line</a>
                        <a class="collapse-item" href="#">Trolley & Handjack</a>
                        
                    </div>
                </div>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>REPORT</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">REPORT</h6>
                        <a class="collapse-item" href="#">Machine</a>
                        <a class="collapse-item" href="#">Pallet Selective</a>
                        <a class="collapse-item" href="#">Jig</a>
                        <a class="collapse-item" href="#">Fume Extractor</a>
                        <a class="collapse-item" href="#">Selective Line</a>
                        <a class="collapse-item" href="#">Trolley & Handjack</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-user-shield"></i>
                    <span>USER MANAGEMENT</span></a>
            </li>
        </ul>