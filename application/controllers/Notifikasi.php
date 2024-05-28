<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model yang diperlukan, misal UserModel
        $this->load->model('UserModel');
        $this->load->model('PeranModel');
        $this->load->helper('date');
    }

    public function kirimNotifKGB()
    {
        $data['peran'] = $this->PeranModel->get_peran();
        // Mengurutkan pengguna berdasarkan nama_pengguna secara ascending
        $this->db->order_by('nama_pengguna', 'ASC');
        $data['pengguna'] = $this->UserModel->get_all_user();

        $this->form_validation->set_rules('nama_pengguna', 'Nama', 'required|trim');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('notifikasi/kirim_notif_kgb', $data);
            $this->load->view('templates/footer');
        } else {
            $nama_pengguna = $this->input->post('nama_pengguna');

            $user = $this->UserModel->get_user($nama_pengguna);

            $notifikasi_data = array(
                'pengguna_id' => $user->id,
                'dikirim_ke' => $user->nama,
                'dikirim_oleh' => 'Admin',
                'pesan' => $this->input->post('pesan')
            );

            $this->db->insert('notifikasi_kgb', $notifikasi_data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Notifikasi berhasil dikirim.</div>');
            redirect('notifikasi/kirimnotifkgb');
        }
    }
}
