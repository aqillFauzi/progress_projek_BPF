<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_karyawan_model");
        $this->load->library('session');
        
        if (!$this->session->userdata('user_id')) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['judul'] = "Data Karyawan";
        $data['datakaryawan'] = $this->Data_karyawan_model->get();
        $this->load->view("layout/header");
        $this->load->view("datakaryawan/vw_data_karyawan", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Tambah Karyawan";
        $this->load->view("layout/header");
        $this->load->view("datakaryawan/vw_tambah_karyawan", $data);
        $this->load->view("layout/footer");
    }
    public function upload(){
        $data=[
            'Nama_karyawan' => $this->input->post('Nama_karyawan'),
            'No_hp' => $this->input->post('No_hp'),
            'Alamat' => $this->input->post('Alamat')
        ];
        $this->Data_karyawan_model->insert($data);
        redirect('Data_karyawan');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Data Karyawan";
        $data['datakaryawan'] = $this->Data_karyawan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datakaryawan/vw_detail_dtkaryawan", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Data_karyawan_model->delete($id);
        redirect('Data_karyawan');
    }

    public function edit($id)
    {
        $data['judul'] = "Edit Data Karyawan";
        $data['datakaryawan'] = $this->Data_karyawan_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datakaryawan/vw_ubah_data_karyawan", $data);
        $this->load->view("layout/footer");
    }
    public function update()
    {
        $data = [
            'Nama_karyawan' => $this->input->post('Nama_karyawan'),
            'No_hp' => $this->input->post('No_hp'),
            'Alamat' => $this->input->post('Alamat')
        ];
        $id = $this->input->post('id');
        $this->Data_karyawan_model->update(['id' => $id], $data);
        redirect('Data_karyawan');
    }
}
