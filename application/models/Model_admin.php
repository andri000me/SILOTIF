<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_admin extends CI_Model
{
    function forget_password_update($email, $data)
    {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }

    function reset_password_update($email, $data)
    {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }

    function check_email($email)
    {
        $sql = "SELECT * FROM tbl_user WHERE email=?";
        $query = $this->db->query($sql, array($email));
        return $query->first_row('array');
    }

    function check_password($email, $password)
    {
        $sql = "SELECT * FROM tbl_user WHERE email=? AND password=?";
        $query = $this->db->query($sql, array($email, md5($password)));
        return $query->first_row('array');
    }

    public function check_url($email, $token)
    {
        $sql = "SELECT * from tbl_user WHERE email=? AND token=?";
        $query = $this->db->query($sql, array($email, $token));
        return $query->num_rows();
    }

    public function setting_update($data)
    {
        $this->db->where('id', 1);
        $this->db->update('tbl_settings', $data);
    }

    function profile_update($data)
    {
        $this->db->where('id', 1);
        $this->db->update('tbl_user', $data);
    }

    public function all_photos()
    {
        $sql = "SELECT * FROM tbl_photo ORDER BY photo_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function total_photos()
    {
        $sql = 'SELECT * from tbl_photo';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function total_directories()
    {
        $sql = 'SELECT * from tbl_directory';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
    public function total_client()
    {
        $sql = 'SELECT * from tbl_client';
        $query = $this->db->query($sql);
        return $query->num_rows();
    }

    function photo_ai_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_photo'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function photo_add($data)
    {
        $this->db->insert('tbl_photo', $data);
        return $this->db->insert_id();
    }

    function photo_update($id, $data)
    {
        $this->db->where('photo_id', $id);
        $this->db->update('tbl_photo', $data);
    }
    function photo_delete($id)
    {
        $this->db->where('photo_id', $id);
        $this->db->delete('tbl_photo');
    }
    function photo_get_data_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_photo WHERE photo_id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }
    function photo_check($id)
    {
        $sql = 'SELECT * FROM tbl_photo WHERE photo_id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }

    public function all_directories()
    {
        $sql = "SELECT * FROM tbl_directory ORDER BY directory_id ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function directory_ai_id()
    {
        $sql = "SHOW TABLE STATUS LIKE 'tbl_directory'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function directory_add($data)
    {
        $this->db->insert('tbl_directory', $data);
        return $this->db->insert_id();
    }

    function directory_update($id, $data)
    {
        $this->db->where('directory_id', $id);
        $this->db->update('tbl_directory', $data);
    }
    function directory_delete($id)
    {
        $this->db->where('directory_id', $id);
        $this->db->delete('tbl_directory');
    }
    function directory_get_data_by_id($id)
    {
        $sql = 'SELECT * FROM tbl_directory WHERE directory_id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }
    function directory_check($id)
    {
        $sql = 'SELECT * FROM tbl_directory WHERE directory_id=?';
        $query = $this->db->query($sql, array($id));
        return $query->first_row('array');
    }
}
