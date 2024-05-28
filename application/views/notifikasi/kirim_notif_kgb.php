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
                    <form method="post" action="<?= base_url('admin/tambahpengguna'); ?>">
                        <div class="form-group">
                            <label for="nama_pengguna">Kirim Ke</label>
                            <select class="form-control" id="nama_pengguna" name="nama_pengguna">
                                <?php foreach ($pengguna as $p) : ?>
                                    <option><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->