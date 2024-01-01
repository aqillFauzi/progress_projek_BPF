<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_user_model");
    }
    public function index()
    {
        $data['judul'] = "Data User";
        $data['datauser'] = $this->Data_user_model->get();
        $this->load->view("layout/header");
        $this->load->view("datauser/vw_data_user", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Tambah User";
        $this->load->view("layout/header");
        $this->load->view("datauser/vw_tambah_user", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Data_user_model->delete($id);
        redirect('Data_user');
    }
    public function upload()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'hp' => $this->input->post('hp'),
        );

        $this->Data_user_model->insert($data);
        redirect('Data_user');
    }
    public function edit($id)
    {
        $data['judul'] = "Edit Data User";
        $data['datauser'] = $this->Data_user_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("datauser/vw_ubah_user", $data);
        $this->load->view("layout/footer");
    }
    public function update()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'hp' => $this->input->post('hp'),
        ];
        $id = $this->input->post('id');
        $this->Data_user_model->update(['id' => $id], $data);
        redirect('Data_user');
    }
}
