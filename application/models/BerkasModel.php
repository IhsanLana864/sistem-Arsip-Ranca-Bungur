<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerkasModel extends CI_Model
{
    public function get_berkas()
    {
        return $this->db->get('berkas')->result_array();
    }
}
