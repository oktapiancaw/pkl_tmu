    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <i class="fas fa-vote-yea"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Data Sekolah</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Dashboard -->
        <div class="sidebar-heading">
            MEnu
        </div>
        <li class="nav-item">
            <a class="nav-link pb-0" href="<?= base_url('datasekolah') ?>">
                <i class="fas fa-fw fa-school"></i>
                <span>Data Sekolah</span>
            </a>
            <a class="nav-link pb-0" href="<?= base_url('datajurusan') ?>">
                <i class="fas fa-fw fa-edit"></i>
                <span>Data Jurusan</span>
            </a>
            <a class="nav-link pb-0" href="<?= base_url('datakelompok') ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Data Kelompok</span>
            </a>
            <a class="nav-link pb-0" href="<?= base_url('datapeserta') ?>">
                <i class="fas fa-fw fa-user"></i>
                <span>Data Peserta</span>
            </a>
        </li>
        <hr class="sidebar-divider mt-3">

        <!-- <li class="nav-item">
            <a class="nav-link" href="< ?= base_url('auth/logout') ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->