<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $data['judul'] = "Halaman Data Transaksi";
        $this->load->view("layout/header");
        $this->load->view("datatransaksi/vw_data_transaksi", $data);
        $this->load->view("layout/footer");
    }
}
?>