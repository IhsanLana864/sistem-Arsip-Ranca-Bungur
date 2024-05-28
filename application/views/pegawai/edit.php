<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
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
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir">Tanggal Lahir</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">1</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">2</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status Perkawinan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status_perkawinan">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Agama</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Status Kepegawaian</b></h3>
                                    <div class="form-group">
                                        <label for="status_pegawai">Status Pegawai</label>
                                        <input type="text" class="form-control" id="status_pegawai" name="status_pegawai" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_cpns">TMT CPNS</label>
                                        <input type="date" class="form-control" id="tmt_cpns" name="tmt_cpns" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pns">TMT PNS</label>
                                        <input type="date" class="form-control" id="tmt_pns" name="tmt_pns" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_asn">Jenis ASN</label>
                                        <input type="text" class="form-control" id="jenis_asn" name="jenis_asn" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_calon">Status Calon</label>
                                        <input type="text" class="form-control" id="status_calon" name="status_calon" readonly>
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