<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Notifikasi</h1>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pemberitahuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php foreach ($notifikasi as $n) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="row align-items-center">
                                            <div class="col-md-4">
                                                <div class="icon-circle bg-warning">
                                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8 d-flex align-items-center">
                                                <p style="margin-bottom: 0.2rem;"><b>Notifikasi</b> <br> <?= date('d F Y H:i', strtotime($n['tanggal_kirim'])); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <p><?= $n['pesan']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->