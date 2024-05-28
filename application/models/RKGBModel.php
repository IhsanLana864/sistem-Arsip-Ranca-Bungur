<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RKGBModel extends CI_Model
{
    public function get_riwayat_kgb($session_pengguna_id)
    {
        return $this->db->get_where('riwayat_kgb', ['penggunaId' => $session_pengguna_id])->result_array();
    }
}
