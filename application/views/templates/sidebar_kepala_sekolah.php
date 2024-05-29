<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="<?= base_url('assets/img/logo/smansa_rancus.png'); ?>" alt="" class="img-fluid" width="60">
        <div class="sidebar-brand-text mx-3">Arsip</div>
    </a>

    <!-- Nav Item - Kelola Pengguna -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('kepalasekolah/datapegawai'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Data Pegawai</span></a>
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