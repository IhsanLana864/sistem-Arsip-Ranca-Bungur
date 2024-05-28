<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Ubah Password</h1>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Ubah Password</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if ($message = $this->session->flashdata('message')) : ?>
                        <?= $message ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('user/edit'); ?>">
                        <div class="form-group">
                            <label for="kata_sandi_lama">Kata Sandi Lama</label>
                            <input type="text" class="form-control" id="kata_sandi_lama" name="kata_sandi_lama">
                            <?= form_error('kata_sandi_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi_baru1">Kata Sandi Baru</label>
                            <input type="text" class="form-control" id="kata_sandi_baru1" name="kata_sandi_baru1">
                            <?= form_error('kata_sandi_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi_baru2">Kata Sandi Baru (Ulangi)</label>
                            <input type="text" class="form-control" id="kata_sandi_baru2" name="kata_sandi_baru2">
                            <?= form_error('kata_sandi_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->