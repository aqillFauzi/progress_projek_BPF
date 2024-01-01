<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_user_model extends CI_Model{
    public $table = 'login';
    public $id = 'login.id';
    public function __construct(){
        parent::__construct();

    }
    public function get(){
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result_array();
    }
    public function getById($id){
        $this->db->from($this->table);
        $this->db->where('id', $id);
        $query=$this->db->get();
        return $query->row_array();
    }
    public function update($where, $data){
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data){
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
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
}
?>