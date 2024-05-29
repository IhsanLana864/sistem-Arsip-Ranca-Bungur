<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kirim Notifikasi</h1>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Kirim Notifikasi</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if ($message = $this->session->flashdata('message')) : ?>
                        <?= $message ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form>
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="nama_pengguna">Nama Pengguna</label>
                                    <input type="text" class="form-control" name="nama_pengguna">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->