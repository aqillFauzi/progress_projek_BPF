<?php
class Cucian_model extends CI_Model {
    
    public function tambahKendaraan($data) {
        $this->db->insert('kendaraan', $data);
        return $this->db->insert_id();
    }

    public function tambahTukangCuci($data) {
        $this->db->insert('tukang_cuci', $data);
        return $this->db->insert_id();
    }

    public function tambahPesanan($data) {
        $this->db->insert('pesanan', $data);
        return $this->db->insert_id();
    }

    public function getPesanan() {
        return $this->db->get('pesanan')->result();
    }

    // tambahkan fungsi-fungsi lainnya sesuai kebutuhan
}
