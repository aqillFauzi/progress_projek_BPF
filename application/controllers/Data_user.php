<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $data['judul'] = "Halaman Data User";
        $this->load->view("layout/header");
        $this->load->view("datauser/vw_data_user", $data);
        $this->load->view("layout/footer");
    }
}
?>