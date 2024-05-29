<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Pengguna</h1>
    <p class="mb-4"><a href="<?= base_url('admin/kelolapengguna'); ?>">Kembali</a> / Edit Pengguna</p>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Pengguna</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <?php if ($message = $this->session->flashdata('message')) : ?>
                        <?= $message ?>
                        <?php $this->session->unset_userdata('message'); ?>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url('admin/editpengguna/' . $pengguna->nama_pengguna); ?>">
                        <div class="form-group">
                            <label for="nama_pengguna">Nama Pengguna</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="<?= $pengguna->nama_pengguna; ?>">
                            <?= form_error('nama_pengguna', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi2">Peran</label>
                            <select class="custom-select" name="peran">
                                <?php foreach ($peran as $p) : ?>
                                    <?php $selected = ($p['id'] == $pengguna->peranId) ? 'selected' : ''; ?>
                                    <option value="<?= $p['id']; ?>" <?= $selected; ?>><?= $p['nama_peran']; ?></option> <!-- Menetapkan value dan teks opsi -->
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kata_sandi2">Status Aktif</label>
                            <select class="custom-select" name="status_aktif">
                                <option value="1" <?= ($pengguna->status_aktif == 1) ? 'selected' : ''; ?>>Aktif</option>
                                <option value="0" <?= ($pengguna->status_aktif == 0) ? 'selected' : ''; ?>>Tidak Aktif</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->