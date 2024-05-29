<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img src="<?= base_url('assets/img/logo/smansa_rancus.png'); ?>" alt="" class="img-fluid" width="60">
        <div class="sidebar-brand-text mx-3">Arsip</div>
    </a>

    <!-- Nav Item - Kelola Pengguna -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelolapengguna'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span>Kelola Pengguna</span></a>
    </li>

    <!-- Nav Item - Kelola Berkas -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelolaberkas'); ?>">
            <i class="fas fa-fw fa-file"></i>
            <span>Kelola Berkas</span></a>
    </li>

    <!-- Nav Item - Kirim Notifikasi KGB: -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('notifikasi/kirimnotifkgb'); ?>">
            <i class="fas fa-fw fa-bell"></i>
            <span>Kirim Notifikasi KGB</span></a>
    </li>

    <!-- Nav Item - Kelola Riwayat KGB -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kelolariwayatkgb'); ?>">
            <i class="fas fa-fw fa-history"></i>
            <span>Kelola Riwayat KGB</span></a>
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