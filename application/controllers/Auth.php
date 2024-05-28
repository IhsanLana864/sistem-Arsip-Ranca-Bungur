<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan, misal UserModel
        $this->load->model('UserModel');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        // Validasi form
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
        $this->form_validation->set_rules('kata_sandi', 'Kata Sandi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali halaman login
            $this->index();
        } else {
            // Ambil data dari form
            $nama_pengguna = $this->input->post('nama_pengguna');
            $kata_sandi = $this->input->post('kata_sandi');

            // Cek ke database untuk login
            $user = $this->UserModel->get_user($nama_pengguna);

            if ($user) {
                // Jika user ditemukan, verifikasi kata sandi
                if (hash('sha256', $kata_sandi) === $user->kata_sandi) {
                    // Jika verifikasi berhasil, set session dan arahkan ke halaman dashboard
                    $userdata = array(
                        'penggunaId' => $user->id,
                        'nama_pengguna' => $user->nama_pengguna,
                        'sedang_masuk' => TRUE
                    );
                    $this->session->set_userdata($userdata);
                    if ($user->nama_peran == 'Admin') {
                        redirect('admin');
                    } else if ($user->nama_peran == 'Kepala Sekolah') {
                        redirect('kepalasekolah');
                    } else {
                        redirect('pegawai');
                    }
                } else {
                    // Jika verifikasi kata sandi gagal, tampilkan pesan error
                    $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Nama pengguna atau kata sandi salah.</div>');
                    redirect('auth/index');
                }
            } else {
                // Jika user tidak ditemukan, tampilkan pesan error
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Nama pengguna atau kata sandi salah.</div>');
                redirect('auth/index');
            }
        }
    }

    public function keluar()
    {
        // Hapus session dan arahkan ke halaman login
        $this->session->sess_destroy();
        redirect('auth/index');
    }
}
