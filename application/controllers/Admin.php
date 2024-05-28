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
            $kata_sandi = $this->input->post('kata_sandi1');
            $hashed_kata_sandi = hash('sha256', $kata_sandi);
            $peran = $this->input->post('peran');

            $data = [
                'nama_pengguna' => $nama_pengguna,
                'kata_sandi' => $hashed_kata_sandi,
                'peranId' => $peran,
            ];

            $this->UserModel->add_user($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengguna baru berhasil ditambahkan.</div>');
            redirect('admin/tambahpengguna');
        }
    }
}
