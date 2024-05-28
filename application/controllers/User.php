<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan, misal UserModel
        $this->load->model('UserModel');
        $this->load->model('PeranModel');
        $this->load->model('NotifModel');
        $this->load->helper('date');
    }

    public function edit()
    {
        $session_peranId = $this->session->userdata('peranId');
        $session_nama_pengguna = $this->session->userdata('nama_pengguna');

        $this->form_validation->set_rules('kata_sandi_lama', 'Kata Sandi Lama', 'required|trim');
        $this->form_validation->set_rules('kata_sandi_baru1', 'Kata Sandi Baru', 'required|trim|min_length[3]|matches[kata_sandi_baru2]', [
            'matches' => 'Password tidak cocok!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('kata_sandi_baru2', 'Kata Sandi Baru', 'required|trim|matches[kata_sandi_baru1]');

        // nangkep notifikasi di topbar
        $session_pengguna_id = $this->session->userdata('penggunaId');
        $data['notifikasi'] = $this->NotifModel->get_notif($session_pengguna_id);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            // Cek nilai peranId dan load sidebar yang sesuai
            if ($session_peranId == 1) {
                $this->load->view('templates/sidebar');
                $this->load->view('templates/topbar');
            } elseif ($session_peranId == 3) {
                $this->load->view('templates/sidebar_pegawai');
                $this->load->view('templates/topbar_pegawai', $data);
            }
            $this->load->view('user/ubah_password');
            $this->load->view('templates/footer');
        } else {
            // Ambil data dari form
            $kata_sandi_lama = $this->input->post('kata_sandi_lama');
            $kata_sandi_baru = $this->input->post('kata_sandi_baru1');
            $hash_sandi_baru = hash('sha256', $kata_sandi_baru);

            $user = $this->UserModel->get_user($session_nama_pengguna);

            if (hash('sha256', $kata_sandi_lama) === $user->kata_sandi) {
                $this->UserModel->update_password($session_nama_pengguna, $hash_sandi_baru);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil memperbaharui kata sandi.</div>');
                redirect('user/edit');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal memperbaharui kata sandi.</div>');
                redirect('user/edit');
            }
        }
    }
}
