<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Riwayat KGB</h1>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Riwayat KGB</h6>
        </div>

        <div class="card-body">
            <?php if ($message = $this->session->flashdata('message')) : ?>
                <?= $message ?>
                <?php $this->session->unset_userdata('message'); ?>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Nama Berkas</td>
                            <td>Jenis Berkas</td>
                            <td>Ukuran Berkas</td>
                            <td>Berkas</td>
                            <td>Tanggal Unggah</td>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>#</td>
                            <td>Nama Berkas</td>
                            <td>Jenis Berkas</td>
                            <td>Ukuran Berkas</td>
                            <td>Berkas</td>
                            <td>Tanggal Unggah</td>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($berkas as $b) : ?>
                            <tr>
                                <td>#</td>
                                <td><?= $b['nama_berkas']; ?></td>
                                <td><?= $b['jenis_berkas']; ?></td>
                                <td><?= $b['ukuran_berkas']; ?></td>
                                <td><a href="<?= base_url('assets/berkas/' . $b['nama_berkas']); ?>">Lihat Berkas</a></td>
                                <td>Tanggal Unggah</td>
                                <th>
                                    <a href="" class="btn btn-success">Simpan Drive</a>
                                    <a href="<?= base_url('admin/hapusberkas/' . $b['id']); ?>" class="btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah KGB</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('pegawai/riwayatkgb', ['id' => 'form_kgb']); ?>
                    <div class="form-group row">
                        <label for="golongan_ruang" class="col-sm-3 col-form-label">Gol. Ruang</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="golongan_ruang">
                                <option selected disabled hidden>-Pilih-</option>
                                <option value=1>I</option>
                                <option value=2>II</option>
                                <option value=3>III</option>
                                <option value=4>IV</option>
                                <option value=5>V</option>
                                <option value=6>VI</option>
                                <option value=7>VII</option>
                                <option value=8>VIII</option>
                                <option value=9>IX</option>
                                <option value=10>X</option>
                                <option value=11>XI</option>
                                <option value=12>XII</option>
                                <option value=13>XIII</option>
                                <option value=14>XIV</option>
                                <option value=15>XV</option>
                                <option value=16>XVI</option>
                                <option value=17>XVII</option>
                            </select>
                            <?= form_error('golongan_ruang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gaji_tahun" class="col-sm-3 col-form-label">Gaji Tahun</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="gaji_tahun">
                                <option selected disabled hidden>-Pilih-</option>
                                <option value="PP Nomor 11 Tahun 2024">PP Nomor 11 Tahun 2024</option>
                                <option value="PP Nomor 9 Tahun 2020">PP Nomor 9 Tahun 2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="masa_kerja_tahun" class="col-sm-3 col-form-label">Masa Kerja Tahun</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="masa_kerja_tahun">
                                <option selected disabled hidden>-Pilih-</option>
                                <?php for ($i = 1; $i <= 40; $i++) : ?>
                                    <option value=<?= $i; ?>><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gaji" class="col-sm-3 col-form-label">Gaji</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="gaji">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kgb_nomor_sk" class="col-sm-3 col-form-label">KGB Nomor SK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kgb_nomor_sk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kgb_tmt" class="col-sm-3 col-form-label">KGB TMT</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="kgb_tmt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_yad_kgb" class="col-sm-3 col-form-label">KGB Tanggal YAD</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="tanggal_yad_kgb">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun_kgb" class="col-sm-3 col-form-label">Tahun KGB</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="tahun_kgb">
                                <?php $i = 1960; ?>
                                <option selected disabled hidden>-Pilih Tahun-</option>
                                <?php for ($i; $i <= date('Y'); $i++) : ?>
                                    <option value=<?= $i; ?>><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bulan_kgb" class="col-sm-3 col-form-label">Bulan KGB</label>
                        <div class="col-sm-9">
                            <select class="custom-select" name="bulan_kgb">
                                <option selected disabled hidden>-Pilih Bulan-</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kgb_tanggal_surat" class="col-sm-3 col-form-label">KGB Tanggal Surat</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="kgb_tanggal_surat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nomor_sk_terakhir" class="col-sm-3 col-form-label">Nomor SK Terakhir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nomor_sk_terakhir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_sk_berkala" class="col-sm-3 col-form-label">File SK Berkala</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_sk_berkala" name="file_sk_berkala">
                                <label class="custom-file-label" for="file_sk_berkala">Choose file</label>
                            </div>
                            <?= form_error('file_sk_berkala', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" form="form_kgb">Simpan</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->