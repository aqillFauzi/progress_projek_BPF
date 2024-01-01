<?php
defined('BASEPATH') or exit('No direct script allowed');

class Data_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_transaksi_model");
        $this->load->model("Data_karyawan_model");
        $this->load->model("Data_type_mtr_model");
    }

    public function index()
    {
        $data['judul'] = "Data Transaksi";
        $data['datatransaksi'] = $this->Data_transaksi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("datatransaksi/vw_data_transaksi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Tambah Transaksi";
        $data['datakaryawan'] = $this->Data_karyawan_model->get();
        $data['datatypemotor'] = $this->Data_type_mtr_model->get();
        $this->load->view("layout/header");
        $this->load->view("datatransaksi/vw_tambah_transaksi", $data);
        $this->load->view("layout/footer");
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Data Transaksi";
        $data['datatransaksi'] = $this->Data_transaksi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datatransaksi/vw_detail_transaksi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function hapus($id)
    {
        $this->Data_transaksi_model->delete($id);
        redirect('Data_transaksi');
    }

    public function countKendaraanByKaryawanAndTanggal($karyawanId, $tanggal)
    {
        $data['judul'] = "Data Transaksi";
        $data['totalKendaraan'] = $this->Data_transaksi_model->countByKaryawanAndTanggal($karyawanId, $tanggal);
        $data['datatransaksi'] = $this->Data_transaksi_model->getByKaryawanAndTanggal($karyawanId, $tanggal);

        $this->load->view("layout/header");
        $this->load->view("datatransaksi/vw_data_transaksi", $data);
        $this->load->view("layout/footer");
    }

    public function filterByTanggal()
{
    $tanggal = $this->input->post('tanggal');
    $data['datatransaksi'] = $this->Data_transaksi_model->getByTanggal($tanggal);
    $data['totalTarif'] = $this->Data_transaksi_model->getTotalTarifByTanggal($tanggal);
    $data['countGajiByKaryawan'] = $this->Data_transaksi_model->countGajiByTanggal($tanggal);

    // Hitung total gaji semua karyawan
    $totalGajiSemuaKaryawan = 0;
    foreach ($data['countGajiByKaryawan'] as $gaji) {
        $totalGajiSemuaKaryawan += $gaji['total_gaji'];
    }

    $data['totalGajiSemuaKaryawan'] = $totalGajiSemuaKaryawan;

    // Calculate total penghasilan bersih
    $data['totalPenghasilanBersih'] = $this->Data_transaksi_model->pendapatanBersih($tanggal);

    $data['judul'] = "Data Transaksi (Filter)";
    $this->load->view("layout/header");
    $this->load->view("datatransaksi/vw_data_transaksi", $data);
    $this->load->view("layout/footer");
}





    public function countMotorByTanggal($tanggal)
    {
        $data['judul'] = "Data Transaksi";
        $data['countMotorByKaryawan'] = $this->Data_transaksi_model->countMotorByTanggal($tanggal);

        foreach ($data['countMotorByKaryawan'] as &$countMotor) {
            $karyawanId = $countMotor['karyawan'];
            $karyawan = $this->Data_karyawan_model->getById($karyawanId);
            $countMotor['Nama_karyawan'] = $karyawan ? $karyawan['Nama_karyawan'] : 'Nama tidak ditemukan';
        }

        $this->load->view("layout/header");
        $this->load->view("datatransaksi/vw_count_motor", $data);
        $this->load->view("layout/footer");
    }

    public function countGajiByTanggal($tanggal)
    {
        $data['judul'] = "Data Transaksi";
        $data['countGajiByKaryawan'] = $this->Data_transaksi_model->countGajiByTanggal($tanggal);

        // Menghitung gaji berdasarkan kategori motor
        foreach ($data['countGajiByKaryawan'] as &$countGaji) {
            $karyawanId = $countGaji['karyawan'];
            $gajiPerMotor = $this->Data_transaksi_model->hitungGajiPerMotor($tanggal, $karyawanId);
            $countGaji['total_gaji'] = $gajiPerMotor;
        }

        $this->load->view("layout/header");
        $this->load->view("datatransaksi/vw_count_gaji", $data);
        $this->load->view("layout/footer");
    }


    public function upload()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'nomor_plat' => $this->input->post('nomor_plat'),
            'type_motor' => $this->input->post('type_motor'),
            'tarif' => $this->input->post('tarif'),
            'karyawan' => $this->input->post('karyawan'),
        ];
        $this->Data_transaksi_model->insert($data);
        redirect('Data_transaksi');
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Data Karyawan";
        $data['datatransaksi'] = $this->Data_transaksi_model->getById($id);
        $data['datakaryawan'] = $this->Data_karyawan_model->get();
        $data['datatypemotor'] = $this->Data_type_mtr_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("datatransaksi/vw_ubah_transaksi", $data);
        $this->load->view("layout/footer");
    }

    public function update()
    {
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'nomor_plat' => $this->input->post('nomor_plat'),
            'type_motor' => $this->input->post('type_motor'),
            'tarif' => $this->input->post('tarif'),
            'karyawan' => $this->input->post('karyawan'),
        ];
        $id = $this->input->post('id');
        $this->Data_transaksi_model->update(['id' => $id], $data);
        redirect('Data_transaksi');
    }
}
?>
