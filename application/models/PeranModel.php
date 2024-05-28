<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PeranModel extends CI_Model
{
    public function get_peran()
    {
        return $this->db->get('peran')->result_array();
    }
}
