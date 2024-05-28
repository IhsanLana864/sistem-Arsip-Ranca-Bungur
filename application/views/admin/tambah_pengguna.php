<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Pengguna</h1>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pengguna</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if ($message = $this->session->flashdata('message')) : ?>
                        <?= $message ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('admin/tambahpengguna'); ?>">
                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?= set_value('nama_pengguna'); ?>">
                            <?= form_error('nama_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi1">Kata Sandi</label>
                            <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1">
                            <?= form_error('kata_sandi1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi2">Kata Sandi (Ulangi)</label>
                            <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2">
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi2">Peran</label>
                            <select class="custom-select" name="peran">
                                <?php foreach ($peran as $p) : ?>
                                    <?php $selected = ($p['id'] == 3) ? 'selected' : ''; ?>
                                    <option value="<?= $p['id']; ?>" <?= $selected; ?>><?= $p['nama_peran']; ?></option> <!-- Menetapkan value dan teks opsi -->
                                <?php endforeach; ?>
                            </select>
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