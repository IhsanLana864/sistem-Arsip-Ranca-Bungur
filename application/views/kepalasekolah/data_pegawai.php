<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Kelola Pengguna</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengguna</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Jenis Pegawai</th>
                            <th>No. HP / No. Telp</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Jenis Pegawai</th>
                            <th>No. HP / No. Telp</th>
                            <th>Alamat</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 1;
                        ?>
                        <?php foreach ($pengguna as $p) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><img src="<?= base_url('assets/img/profil/' . $p['foto_profil']); ?>" alt="" width="50"></td>
                                <td><?= $p['nama']; ?></td>
                                <td><?= !empty($p['jenis_kelamin']) ? $p['jenis_kelamin'] : '-'; ?></td>
                                <td><?= !empty($p['pengguna_email']) ? $p['pengguna_email'] : '-'; ?></td>
                                <td><?= !empty($p['jenis_pegawai']) ? $p['jenis_pegawai'] : '-'; ?></td>
                                <td>
                                    <?php
                                    if (!empty($p['hp']) && !empty($p['telp'])) {
                                        echo $p['hp'] . ' / ' . $p['telp'];
                                    } elseif (!empty($p['hp'])) {
                                        echo $p['hp'];
                                    } elseif (!empty($p['telp'])) {
                                        echo $p['telp'];
                                    } else {
                                        echo '-'; // Display an empty cell if both are empty
                                    }
                                    ?>
                                </td>
                                <td><?= !empty($p['domisili']) ? $p['domisili'] : '-'; ?></td>
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