<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Pelanggan";
        $this->load->view("layout/header");
        $this->load->view("datapelanggan/vw_data_pelanggan", $data);
        $this->load->view("layout/footer");
    }
}
?>