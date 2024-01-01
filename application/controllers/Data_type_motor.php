<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_type_motor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_type_mtr_model");
        
    }
    public function index()
    {
        $data['judul'] = "Data Type Motor";
        $data['datatypemotor'] = $this->Data_type_mtr_model->get();
        $this->load->view("layout/header");
        $this->load->view("datatypemotor/vw_data_typemotor", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Tambah type motor";
        $this->load->view("layout/header");
        $this->load->view("datatypemotor/vw_tambah_type_motor", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id){
        $this->Data_type_mtr_model->delete($id);
        redirect('Data_type_motor');
    }
    public function upload(){
        $data=[
            'kategori_motor' => $this->input->post('kategori_motor'),
            'tarif' => $this->input->post('tarif'),
        ];
        $this->Data_type_mtr_model->insert($data);
        redirect('Data_type_motor');
    }
    public function edit($id)
    {
        $data['judul'] = "Edit Data Type Motor";
        $data['datatypemotor'] = $this->Data_type_mtr_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datatypemotor/vw_ubah_typemotor", $data);
        $this->load->view("layout/footer");
    }
    public function update(){
        $data=[
            'kategori_motor' => $this->input->post('kategori_motor'),
            'tarif' => $this->input->post('tarif')
        ];
        $id = $this->input->post('id');
        $this->Data_type_mtr_model->update(['id' => $id], $data);
        redirect('Data_type_motor');
    }
}
?>