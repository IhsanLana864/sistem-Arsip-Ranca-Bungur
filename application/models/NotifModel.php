<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotifModel extends CI_Model
{
    public function get_notif($session_pengguna_id)
    {
        $this->db->order_by('tanggal_kirim', 'DESC');
        $this->db->where('pengguna_id', $session_pengguna_id);
        return $this->db->get('notifikasi_kgb')->result_array();
    }
}
