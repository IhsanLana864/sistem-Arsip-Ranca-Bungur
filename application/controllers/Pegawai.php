<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_pegawai');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/index');
        $this->load->view('templates/footer');
    }

    public function profil()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_pegawai');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/profil');
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_pegawai');
        $this->load->view('templates/topbar');
        $this->load->view('pegawai/edit');
        $this->load->view('templates/footer');
    }
}
