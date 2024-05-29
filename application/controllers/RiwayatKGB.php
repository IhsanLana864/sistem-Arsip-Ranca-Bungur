<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RiwayatKGB extends CI_Controller
{
    public function delete($id)
    {
        $session_peran_id = $this->session->userdata('peranId');
        $this->db->delete('riwayat_kgb', ['id' => $id]);

        if ($session_peran_id == 1) {
            redirect('admin/kelolariwayatkgb');
        } else if ($session_peran_id == 3) {
            redirect('pegawai/riwayatkgb');
        }
    }

    public function edit($id)
    {
    }
}
