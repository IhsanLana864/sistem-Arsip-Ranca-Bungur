<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RKGBModel extends CI_Model
{
    public function get_riwayat_kgb($session_pengguna_id)
    {
        return $this->db->get_where('riwayat_kgb', ['penggunaId' => $session_pengguna_id])->result_array();
    }

    public function get_all_riwayat_kgb()
    {
        $this->db->select('riwayat_kgb.*, pengguna.nama');
        $this->db->from('riwayat_kgb');
        $this->db->join('pengguna', 'riwayat_kgb.penggunaId = pengguna.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
}
