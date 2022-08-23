
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider ">

             <!-- Heading -->
            <div class="sidebar-heading">
                Administrasi
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

          
            

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item Barang - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/users">
                <i class="fas fa-fw fa-thin fa-couch"></i>
                <span>Data Pencari Kerja</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/perusahaan">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Perusahaan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/kategori">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kategori</span></a>
            </li>

                <li class="nav-item">
                <a class="nav-link">
                    <i class="fas fa-fw fa-table"></i>
                    <form action="/logout" method="POST" style="display: inline;">
                        @csrf
                            <button type="submit" style="background: none; border: none; font-size: 0.9em; color: #CED7F6">Logout</button>

                    </form>
                </a>
            </li>

            <!-- Nav Item - Tables -->
              <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->