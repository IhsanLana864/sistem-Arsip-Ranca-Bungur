<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelola Pengguna</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengguna</h6>
            <a href="<?= base_url('admin/tambahpengguna'); ?>" class="btn btn-primary ml-auto">Tambah</a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Lengkap</th>
                            <th>Peran</th>
                            <th>Status Aktif</th>
                            <th>Tanggal Pembuatan Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Lengkap</th>
                            <th>Peran</th>
                            <th>Status Aktif</th>
                            <th>Tanggal Pembuatan Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        <?php foreach ($pengguna as $p) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $p['nama_pengguna']; ?></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= $p['nama_peran']; ?></td>
                                <td><?= ($p['status_aktif'] == 1) ? 'Aktif' : 'Tidak Aktif'; ?></td>
                                <td><?php echo format_date($p['tanggal_pembuatan_akun']); ?></td> <!-- Menggunakan tanggal yang telah diformat -->
                                <td>
                                    <a href="<?= base_url('admin/editPengguna/' . $p['nama_pengguna']); ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('admin/hapusPengguna/' . $p['nama_pengguna']); ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->