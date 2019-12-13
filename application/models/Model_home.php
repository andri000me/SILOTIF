<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_home extends CI_Model
{
    public function all_slider()
    {
        $query = $this->db->query("SELECT * FROM tbl_slider ORDER BY id ASC");
        return $query->result_array();
    }
}
