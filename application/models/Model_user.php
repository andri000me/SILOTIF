<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAlluser()
    {
        $query = $this->db->get('tbl_user');
        return $query->result();
    }

    public function insert($user)
    {
        $this->db->insert('user', $user);
        return $this->db->insert_id();
    }

    public function getUser($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    public function activate($data, $id)
    {
        $this->db->where('user.id', $id);
        return $this->db->update('user', $data);
    }
}
