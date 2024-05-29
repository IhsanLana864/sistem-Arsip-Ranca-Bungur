<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Profil Pegawai</h6>
                    <a href="<?= base_url('pegawai/edit'); ?>" class="btn btn-warning ml-auto">Edit</a>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?= base_url('assets/img/profil/default.png'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <form>
                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Informasi Pribadi</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Tempat, Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" value="Jakarta, 20 April 2002" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Jenis Kelamin</label>
                                        <input type="text" class="form-control" id="kata_sandi1" name="kata_sandi1" value="Laki-laki" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Status Perkawinan</label>
                                        <input type="text" class="form-control" id="kata_sandi2" name="kata_sandi2" value="Belum menikah" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Agama</label>
                                        <input type="text" class="form-control" id="kata_sandi2" name="kata_sandi2" value="Islam" readonly>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Status Kepegawaian</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Status Pegawai</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">TMT CPNS</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT PNS</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Jenis ASN</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Status Calon</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Jenis PNS</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Kedudukan PNS</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Mekanisme Mutasi</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Pendidikan</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Pendidikan Awal</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Tahun Pendidikan Awal</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Pendidikan Akhir</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Tahun Pendidikan Terakhir</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>

                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Jabatan dan Tugas</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Jenis Jabatan</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Eselon</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Status Gaji</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Kedudukan Pegawai</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>

                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Eselon</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Nama Jabatan</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Jabatan</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Jabatan Spesialisasi</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Tugas Tambahan</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Tugas Tambahan</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Tugas Tambahan 2</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Tugas Tambahan 2</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Instansi dan Penempatan</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">SOPD</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">TMT SKPD</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Instansi (jika dipekerjakan)</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Golongan dan Gaji</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Golongan Awal</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">TMT Golongan Awal</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Golongan Akhir</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Golongan Akhir</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Masa Kerja</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Gaji Pokok</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">No Rekening (BJB)</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">TMT Gaji Berkala Terbaru</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Identifikasi dan Kontak</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">No. KARPEG</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">No. Karis/Karsu</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">No. Askes</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">No. KTP</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>

                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">No. NPWP</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Golongan Darah</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">NUPTK</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">BAPETARUM</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Alamat Rumah</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">RT/RW (Alamat Rumah)</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Provinsi/Kota/Kecamatan/Desa (Alamat Rumah)</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Kode Pos (Alamat Rumah)</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Telp</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">HP</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Email</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi2">Email Resmi</label>
                                        <input type="password" class="form-control" id="kata_sandi2" name="kata_sandi2" readonly>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="mb-4"><b>Alamat Domisili (Jika berbeda dari alamat rumah)</b></h3>
                                    <div class="form-group">
                                        <label for="nama_pengguna">Domisili KTP</label>
                                        <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Provinsi/Kab/Kota/Kecamatan/Desa (Domisili)</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Kode Pos (Domisili)</label>
                                        <input type="password" class="form-control" id="kata_sandi1" name="kata_sandi1" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->