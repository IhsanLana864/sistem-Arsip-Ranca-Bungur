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
                            <form method="post" action="<?= base_url('pegawai/edit'); ?>">
                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Informasi Pribadi</b></h3>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggal_lahir">Jenis Kelamin</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
                                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                                            <label class="form-check-label" for="wanita">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Status Perkawinan</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="status_perkawinan">
                                            <option value="Belum menikah">Belum menikah</option>
                                            <option value="Sudah menikah">Sudah menikah</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Agama</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Khonghuu">Khonghucu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Status Kepegawaian</b></h3>
                                    <div class="form-group">
                                        <label for="status_pegawai">Status Pegawai</label>
                                        <input type="text" class="form-control" id="status_pegawai" name="status_pegawai">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_cpns">TMT CPNS</label>
                                        <input type="date" class="form-control" id="tmt_cpns" name="tmt_cpns">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_pns">TMT PNS</label>
                                        <input type="date" class="form-control" id="tmt_pns" name="tmt_pns">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_asn">Jenis ASN</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="jenis_asn">
                                            <option value="Islam">ASN</option>
                                            <option value="Kristen">PPPK</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_calon">Status Calon</label>
                                        <input type="text" class="form-control" id="status_calon" name="status_calon">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_pns">Jenis PNS</label>
                                        <input type="text" class="form-control" id="jenis_pns" name="jenis_pns">
                                    </div>
                                    <div class="form-group">
                                        <label for="kedudukan_pns">Kedudukan PNS</label>
                                        <input type="text" class="form-control" id="kedudukan_pns" name="kedudukan_pns">
                                    </div>
                                    <div class="form-group">
                                        <label for="mekanisme_mutasi">Mekanisme Mutasi</label>
                                        <input type="text" class="form-control" id="mekanisme_mutasi" name="mekanisme_mutasi">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Pendidikan</b></h3>
                                    <div class="form-group">
                                        <label for="pendidikan_awal">Pendidikan Awal</label>
                                        <input type="text" class="form-control" id="pendidikan_awal" name="pendidikan_awal">
                                    </div>
                                    <div class="form-group">
                                        <label for="kata_sandi1">Tahun Pendidikan Awal</label>
                                        <input type="number" class="form-control" id="kata_sandi1" name="tahun_pendidikan_awal">
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan_akhir">Pendidikan Akhir</label>
                                        <input type="text" class="form-control" id="pendidikan_akhir" name="pendidikan_akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_pendidikan_akhir">Tahun Pendidikan Terakhir</label>
                                        <input type="number" class="form-control" id="tahun_pendidikan_akhir" name="tahun_pendidikan_akhir">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Jabatan dan Tugas</b></h3>
                                    <div class="form-group">
                                        <label for="jenis_jabatan">Jenis Jabatan</label>
                                        <input type="text" class="form-control" id="jenis_jabatan" name="jenis_jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="eselon">Eselon</label>
                                        <input type="text" class="form-control" id="eselon" name="eselon">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_gaji">Status Gaji</label>
                                        <input type="text" class="form-control" id="status_gaji" name="status_gaji">
                                    </div>
                                    <div class="form-group">
                                        <label for="kedudukan_pegawai">Kedudukan Pegawai</label>
                                        <input type="text" class="form-control" id="kedudukan_pegawai" name="kedudukan_pegawai">

                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_eselon">TMT Eselon</label>
                                        <input type="date" class="form-control" id="tmt_eselon" name="tmt_eselon">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_jabatan">Nama Jabatan</label>
                                        <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_jabatan">TMT Jabatan</label>
                                        <input type="date" class="form-control" id="tmt_jabatan" name="tmt_jabatan">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_spesialisasi">Jabatan Spesialisasi</label>
                                        <input type="text" class="form-control" id="jenis_spesialisasi" name="jenis_spesialisasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas_tambahan">Tugas Tambahan</label>
                                        <input type="text" class="form-control" id="tugas_tambahan" name="tugas_tambahan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_tugas_tambahan">TMT Tugas Tambahan</label>
                                        <input type="date" class="form-control" id="tmt_tugas_tambahan" name="tmt_tugas_tambahan">
                                    </div>
                                    <div class="form-group">
                                        <label for="tugas_tambahan_2">Tugas Tambahan 2</label>
                                        <input type="text" class="form-control" id="tugas_tambahan_2" name="tugas_tambahan_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_tugas_tambahan_2">TMT Tugas Tambahan 2</label>
                                        <input type="date" class="form-control" id="tmt_tugas_tambahan_2" name="tmt_tugas_tambahan_2">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Instansi dan Penempatan</b></h3>
                                    <div class="form-group">
                                        <label for="sopd">SOPD</label>
                                        <input type="text" class="form-control" id="sopd" name="sopd">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_skpd">TMT SKPD</label>
                                        <input type="date" class="form-control" id="tmt_skpd" name="tmt_skpd">
                                    </div>
                                    <div class="form-group">
                                        <label for="instansi">Instansi (jika dipekerjakan)</label>
                                        <input type="text" class="form-control" id="instansi" name="instansi">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Golongan dan Gaji</b></h3>
                                    <div class="form-group">
                                        <label for="golongan_awal">Golongan Awal</label>
                                        <input type="text" class="form-control" id="golongan_awal" name="golongan_awal">
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan_akhir">TMT Golongan Awal</label>
                                        <input type="date" class="form-control" id="golongan_akhir" name="golongan_akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan_akhir">Golongan Akhir</label>
                                        <input type="text" class="form-control" id="golongan_akhir" name="golongan_akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_golongan_akhir">TMT Golongan Akhir</label>
                                        <input type="text" class="form-control" id="tmt_golongan_akhir" name="tmt_golongan_akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="masa_kerja">Masa Kerja</label>
                                        <input type="text" class="form-control" id="masa_kerja" name="masa_kerja">
                                    </div>
                                    <div class="form-group">
                                        <label for="gaji_pokok">Gaji Pokok</label>
                                        <input type="number" class="form-control" id="gaji_pokok" name="gaji_pokok">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_rekening">No Rekening (BJB)</label>
                                        <input type="text" class="form-control" id="no_rekening" name="no_rekening">
                                    </div>
                                    <div class="form-group">
                                        <label for="tmt_gaji_berkala_terbaru">TMT Gaji Berkala Terbaru</label>
                                        <input type="date" class="form-control" id="tmt_gaji_berkala_terbaru" name="tmt_gaji_berkala_terbaru">
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h3 class="mb-4"><b>Identifikasi dan Kontak</b></h3>
                                    <div class="form-group">
                                        <label for="no_karpeg">No. KARPEG</label>
                                        <input type="text" class="form-control" id="no_karpeg" name="no_karpeg">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_karis_karsu">No. Karis/Karsu</label>
                                        <input type="text" class="form-control" id="no_karis_karsu" name="no_karis_karsu">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_askes">No. Askes</label>
                                        <input type="text" class="form-control" id="no_askes" name="no_askes">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_ktp">No. KTP</label>
                                        <input type="text" class="form-control" id="no_ktp" name="no_ktp">

                                    </div>
                                    <div class="form-group">
                                        <label for="no_npwp">No. NPWP</label>
                                        <input type="text" class="form-control" id="no_npwp" name="no_npwp">
                                    </div>
                                    <div class="form-group">
                                        <label for="golongan_darah">Golongan Darah</label>
                                        <input type="text" class="form-control" id="golongan_darah" name="golongan_darah">
                                    </div>
                                    <div class="form-group">
                                        <label for="nuptk">NUPTK</label>
                                        <input type="text" class="form-control" id="nuptk" name="nuptk">
                                    </div>
                                    <div class="form-group">
                                        <label for="bapetarum">BAPETARUM</label>
                                        <input type="text" class="form-control" id="bapetarum" name="bapetarum">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_rumah">Alamat Rumah</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="alamat_rumah" name="alamat_rumah" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rt_rumah">RT (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="rt_rumah" name="rt_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="rw_rumah">RW (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="rw_rumah" name="rw_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_rumah">Provinsi (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="provinsi_rumah" name="provinsi_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota_rumah">Kota (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="kota_rumah" name="kota_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan_rumah">Kecamatan (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="kecamatan_rumah" name="kecamatan_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="desa_rumah">Desa (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="desa_rumah" name="desa_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_pos">Kode Pos (Alamat Rumah)</label>
                                        <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                                    </div>
                                    <div class="form-group">
                                        <label for="telp">Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp">
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">HP</label>
                                        <input type="text" class="form-control" id="hp" name="hp">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="email_resmi">Email Resmi</label>
                                        <input type="text" class="form-control" id="email_resmi" name="email_resmi">
                                    </div>
                                </div>

                                <div>
                                    <h3 class="mb-4"><b>Alamat Domisili (Jika berbeda dari alamat rumah)</b></h3>
                                    <div class="form-group">
                                        <label for="domisili_ktp">Domisili KTP</label>
                                        <div class="form-group">
                                            <textarea class="form-control" id="domisili_ktp" name="domisili_ktp" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="provinsi_domisili">Provinsi (Domisili)</label>
                                        <input type="text" class="form-control" id="provinsi_domisili" name="provinsi_domisili">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota_domisili">Kota (Domisili)</label>
                                        <input type="text" class="form-control" id="kota_domisili" name="kota_domisili">
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan_rumah">Kecamatan (Domisili)</label>
                                        <input type="text" class="form-control" id="kecamatan_rumah" name="kecamatan_rumah">
                                    </div>
                                    <div class="form-group">
                                        <label for="desa_domisili">Desa (Domisili)</label>
                                        <input type="text" class="form-control" id="desa_domisili" name="desa_domisili">
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_pos_domisili">Kode Pos (Domisili)</label>
                                        <input type="text" class="form-control" id="kode_pos_domisili" name="kode_pos_domisili">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <a href="<?= base_url('pegawai/edit'); ?>" class="btn btn-warning ml-auto">Edit</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->