<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_transaksi_model extends CI_Model
{
    public $table = 'transaksi';
    public $id = 'transaksi.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('t.*, k.Nama_karyawan as Nama_karyawan, ty.kategori_motor as kategori_motor');
        $this->db->from('transaksi t');
        $this->db->join('karyawan k', 't.karyawan = k.id');
        $this->db->join('type_motor ty', 't.type_motor = ty.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getTotalGajiSemuaKaryawan($tanggal)
{
    $countGajiByKaryawan = $this->countGajiByTanggal($tanggal);

    $totalGajiSemuaKaryawan = 0;
    foreach ($countGajiByKaryawan as $result) {
        $totalGajiSemuaKaryawan += $result['total_gaji'];
    }

    return $totalGajiSemuaKaryawan;
}
    public function getById($id)
    {
        $this->db->select('t.*,k.Nama_karyawan as Nama_karyawan, ty.kategori_motor as kategori_motor');
        $this->db->from('transaksi t');
        $this->db->join('karyawan k', 't.karyawan = k.id');
        $this->db->join('type_motor ty', 't.type_motor = ty.id');
        $this->db->where('t.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function countByKaryawanAndTanggal($karyawanId, $tanggal)
    {
        $this->db->where('karyawan', $karyawanId);
        $this->db->where('tanggal', $tanggal);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function getTotalGajiByTanggal($tanggal)
    {
        $countGajiByKaryawan = $this->countGajiByTanggal($tanggal);

        $totalGaji = 0;
        foreach ($countGajiByKaryawan as $result) {
            $totalGaji += $result['total_gaji'];
        }

        return $totalGaji;
    }

    public function getByTanggal($tanggal)
    {
        $this->db->select('t.*, k.Nama_karyawan as Nama_karyawan, ty.kategori_motor as kategori_motor');
        $this->db->from('transaksi t');
        $this->db->join('karyawan k', 't.karyawan = k.id');
        $this->db->join('type_motor ty', 't.type_motor = ty.id');
        $this->db->where('t.tanggal', $tanggal);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTotalTarifByTanggal($tanggal)
    {
        $this->db->select_sum('tarif');
        $this->db->where('tanggal', $tanggal);
        $query = $this->db->get($this->table);
        return $query->row()->tarif;
    }

    public function getTotalGajiPerKaryawan($tanggal)
    {
        $this->db->select('karyawan, SUM(tarif) as total_gaji');
        $this->db->where('tanggal', $tanggal);
        $this->db->group_by('karyawan');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function countMotorByTanggal($tanggal)
    {
        $this->db->select('karyawan, COUNT(*) as jumlah_motor');
        $this->db->where('tanggal', $tanggal);
        $this->db->group_by('karyawan');
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function countGajiByTanggal($tanggal)
{
    $this->db->select('karyawan, COUNT(*) as jumlah_motor, SUM(tarif) as total_gaji');
    $this->db->where('tanggal', $tanggal);
    $this->db->group_by('karyawan');
    $query = $this->db->get($this->table);
    $results = $query->result_array();

    foreach ($results as &$result) {
        $karyawanId = $result['karyawan'];
        $gajiPerMotor = $this->hitungGajiPerMotor($tanggal, $karyawanId);
        $result['total_gaji'] = $gajiPerMotor;
    }

    return $results;
}

public function hitungGajiPerMotor($tanggal, $karyawanId)
{
    $this->db->select('ty.kategori_motor, COUNT(*) as jumlah_motor');
    $this->db->from('transaksi t');
    $this->db->join('type_motor ty', 't.type_motor = ty.id');
    $this->db->where('t.tanggal', $tanggal);
    $this->db->where('t.karyawan', $karyawanId);
    $this->db->group_by('ty.kategori_motor');

    $query = $this->db->get();
    $kategoriMotor = $query->result_array();

    $gajiPerMotor = 0;
    foreach ($kategoriMotor as $motor) {
        $kategori = $motor['kategori_motor'];
        $jumlahMotor = $motor['jumlah_motor'];
        
        if ($kategori == 'Kecil') {
            $gajiPerMotor += $jumlahMotor * 6000;
        } elseif ($kategori == 'Sedang') {
            $gajiPerMotor += $jumlahMotor * 7000;
        } elseif ($kategori == 'Besar') {
            $gajiPerMotor += $jumlahMotor * 8000;
        }
    }

    return $gajiPerMotor;
}

    public function pendapatanBersih($tanggal)
{
    $totalTarif = $this->getTotalTarifByTanggal($tanggal);
    $countGajiByKaryawan = $this->countGajiByTanggal($tanggal);

    $totalGaji = 0;
    foreach ($countGajiByKaryawan as $result) {
        $totalGaji += $result['total_gaji'];
    }

    return $totalTarif - $totalGaji;
}


    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
