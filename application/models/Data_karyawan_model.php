<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_karyawan_model extends CI_Model{
    public $table = 'karyawan';
    public $id = 'karyawan.id';
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
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id){
        // Pemeriksaan apakah karyawan memiliki relasi dengan transaksi atau data lain
        $cekHapus = $this->cekHapus($id);
    
        if ($cekHapus) {
            // Jika dapat dihapus, hapus data karyawan
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        } else {
            // Jika tidak dapat dihapus, tampilkan pesan atau pop-up
            echo '<script>alert("Data karyawan tidak dapat dihapus karena memiliki relasi dengan data lain.");</script>';
            return false;
        }
    }
    
    private function cekHapus($id) {
        // Fungsi untuk memeriksa apakah karyawan dapat dihapus
        // Anda dapat menambahkan logika pemeriksaan relasi di sini
    
        // Contoh sederhana: Pemeriksaan apakah karyawan memiliki transaksi
        $this->db->where('karyawan', $id);
        $countTransaksi = $this->db->count_all_results('transaksi');
    
        return ($countTransaksi == 0); // Jika tidak ada transaksi, karyawan dapat dihapus
    }
    
}
?>