<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model 
{
    public function show_total_event()
    {
        $sql = 'SELECT * from tbl_event';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }    
}