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

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('notifikasi/kirim_notif_kgb', $data);
            $this->load->view('templates/footer');
        } else {
            $notifikasi_data = array(
                'tipe' => 'KGB',
                'dikirimKe' => 'wef',
                'dikirimOleh' => $this->session->userdata('user_id'),
                'tanggalKirim' => date('Y-m-d H:i:s'),
                'status' => 'Belum Dibaca',
                'pesan' => $this->input->post('pesan')
            );


            $this->session->set_flashdata('message', 'Notifikasi KGB berhasil dikirim.');
        }
    }
}
