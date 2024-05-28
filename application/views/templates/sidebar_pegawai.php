<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-folder-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Arsip</div>
    </a>

    <!-- Nav Item - Data Pegawai -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pegawai/profil'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Pegawai</span></a>
    </li>

    <!-- Nav Item - Ubah Password -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('pegawai/riwayatkgb'); ?>">
            <i class="fas fa-fw fa-history"></i>
            <span>Riwayat KGB (ASN)</span></a>
    </li>

    <!-- Nav Item - Ubah Password -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-key"></i>
            <span>Ubah Password</span></a>
    </li>

    <!-- Nav Item - Keluar -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/keluar'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">