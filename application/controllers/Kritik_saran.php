<?php

defined('BASEPATH') or exit('No direct script allowed');

class Kritik_saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Data_user_model");
    }
    public function index()
{
    $data['judul'] = "Halaman Dashboard";
    $username = $this->session->userdata('username');
    $data['userData'] = $this->Data_user_model->get($username);
    
    $this->load->view("layout/header");
    $this->load->view("dashboard/vw_dashboard", $data);
    $this->load->view("layout/footer");
}
            
}
?>
