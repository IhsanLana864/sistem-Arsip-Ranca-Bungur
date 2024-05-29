<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan, misal UserModel
        $this->load->model('UserModel');
        $this->load->model('PeranModel');
        $this->load->model('RKGBModel');
        $this->load->model('NotifModel');
        $this->load->model('BerkasModel');
        $this->load->helper('date');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/index');
        $this->load->view('templates/footer');
    }

    public function tambahPengguna()
    {
        $data['peran'] = $this->PeranModel->get_peran();

        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'required|trim|is_unique[pengguna.nama_pengguna]', [
            'is_unique' => 'Nama pengguna telah terdaftar!'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('kata_sandi1', 'Kata Sandi', 'required|trim|min_length[3]|matches[kata_sandi2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('kata_sandi2', 'Kata Sandi', 'required|trim|matches[kata_sandi1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/tambah_pengguna', $data);
            $this->load->view('templates/footer');
        } else {
            // Ambil data dari form
            $nama_pengguna = $this->input->post('nama_pengguna');
            $nama_lengkap = $this->input->post('nama');
            $kata_sandi = $this->input->post('kata_sandi1');
            $hashed_kata_sandi = hash('sha256', $kata_sandi);
            $peran = $this->input->post('peran');

            $data = [
                'nama_pengguna' => $nama_pengguna,
                'nama' => $nama_lengkap,
                'kata_sandi' => $hashed_kata_sandi,
                'foto_profil' => 'default.png',
                'peranId' => $peran,
                'status_aktif' => 1,
                'tanggal_pembuatan_akun' => time(),
            ];

            $this->UserModel->add_user($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna baru berhasil ditambahkan.</div>');
            redirect('admin/tambahpengguna');
        }
    }

    public function editPengguna($nama_pengguna)
    {
        $data['peran'] = $this->PeranModel->get_peran();
        $data['pengguna'] = $this->UserModel->get_user($nama_pengguna);

        $this->form_validation->set_rules('peran', 'Peran', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/edit_pengguna', $data);
            $this->load->view('templates/footer');
        } else {
            // Ambil data dari form
            $peran = $this->input->post('peran');
            $status_aktif = $this->input->post('status_aktif');

            // Data yang akan diperbarui
            $update_data = array(
                'peranId' => $peran,
                'status_aktif' => $status_aktif
            );

            // Lakukan pembaruan data berdasarkan nama pengguna
            $this->UserModel->edit_user($nama_pengguna, $update_data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil memperbaharui data pengguna.</div>');
            redirect('admin/editpengguna/' . $nama_pengguna);
        }
    }

    public function hapusPengguna($nama_pengguna)
    {
        $this->db->delete('pengguna', ['nama_pengguna' => $nama_pengguna]);
        redirect('admin/kelolapengguna');
    }

    public function hapusBerkas($id)
    {
        $this->db->delete('berkas', ['id' => $id]);
        redirect('admin/kelolaberkas');
    }


    public function kelolaPengguna()
    {
        $data['pengguna'] = $this->UserModel->get_all_user();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kelola_pengguna', $data);
        $this->load->view('templates/footer');
    }

    public function kelolaRiwayatKgb()
    {
        $session_pengguna_id = $this->session->userdata('penggunaId');
        $data['riwayat_kgb'] = $this->RKGBModel->get_all_riwayat_kgb();
        $data['notifikasi'] = $this->NotifModel->get_notif($session_pengguna_id);
        $this->form_validation->set_rules('golongan_ruang', 'Gol. Ruang', 'required|trim');
        // $this->form_validation->set_rules('gaji_tahun', 'Gaji Tahun', 'required|trim');
        // $this->form_validation->set_rules('masa_kerja_tahun', 'Masa Kerja Tahun', 'required|trim');
        // $this->form_validation->set_rules('gaji', 'Gaji', 'required|trim');
        // $this->form_validation->set_rules('kgb_nomor_sk', 'KGB Nomor SK', 'required|trim');
        // $this->form_validation->set_rules('kgb_tmt', 'KGB TMT', 'required|trim');
        // $this->form_validation->set_rules('tanggal_yad_kgb', 'Tanggal YAD KGB', 'required|trim');
        // $this->form_validation->set_rules('tahun_kgb', 'Tahun KGB', 'required|trim');
        // $this->form_validation->set_rules('bulan_kgb', 'Bulan KGB', 'required|trim');
        // $this->form_validation->set_rules('kgb_tanggal_surat', 'KGB Tanggal Surat', 'required|trim');
        // $this->form_validation->set_rules('nomor_sk_terakhir', 'No. SK Terakhir', 'required|trim');
        // $this->form_validation->set_rules('file_sk_berkala', 'File SK Berkala', 'required|trim');
        $this->form_validation->set_rules('file_sk_berkala', 'File SK Berkala', 'callback_file_check');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar_pegawai', $data);
            $this->load->view('admin/kelola_riwayat_kgb', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'penggunaId' => $session_pengguna_id,
                'golongan_ruang' => $this->input->post('golongan_ruang'),
                'gaji_tahun' => $this->input->post('gaji_tahun'),
                'masa_kerja_tahun' => $this->input->post('masa_kerja_tahun'),
                'gaji' => $this->input->post('gaji'),
                'kgb_nomor_sk' => $this->input->post('kgb_nomor_sk'),
                'kgb_tmt' => $this->input->post('kgb_tmt'),
                'tanggal_yad_kgb' => $this->input->post('tanggal_yad_kgb'),
                'tahun_kgb' => $this->input->post('tahun_kgb'),
                'bulan_kgb' => $this->input->post('bulan_kgb'),
                'kgb_tanggal_surat' => $this->input->post('kgb_tanggal_surat'),
                'nomor_sk_terakhir' => $this->input->post('nomor_sk_terakhir'),
            ];

            // Handle file upload
            $upload_file = $_FILES['file_sk_berkala']['name'];
            if ($upload_file) {
                $config['allowed_types'] = 'pdf';
                $config['max_size']     = '10000';
                $config['upload_path'] = './assets/file/riwayatkgb';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file_sk_berkala')) {
                    $new_image = $this->upload->data('file_name');
                    $data['file_sk_berkala'] = $new_image;
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('pegawai/riwayatkgb');
                }
            }

            $this->db->insert('riwayat_kgb', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menyimpan data.</div>');
            redirect('pegawai/riwayatkgb');
        }
    }

    public function kelolaberkas()
    {
        $data['pengguna'] = $this->UserModel->get_all_user();
        $data['berkas'] = $this->BerkasModel->get_berkas();


        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kelola_berkas', $data);
        $this->load->view('templates/footer');
    }
}
