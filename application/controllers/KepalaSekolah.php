<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KepalaSekolah extends CI_Controller
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

    public function dataPegawai()
    {
        $data['pengguna'] = $this->UserModel->get_all_pegawai();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_kepala_sekolah');
        $this->load->view('templates/topbar');
        $this->load->view('kepalasekolah/data_pegawai', $data);
        $this->load->view('templates/footer');
    }
}
