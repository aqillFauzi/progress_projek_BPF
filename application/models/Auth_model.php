<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table = 'login';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user_by_credentials($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->table);
        $user = $query->row_array();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }
    public function getById($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
}
