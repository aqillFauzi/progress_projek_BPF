<?php

defined('BASEPATH') or exit('No direct script allowed');

class Data_pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function index()
    {
        $data['judul'] = "Halaman Pendaftaran";
        $this->load->view("layout/header");
        $this->load->view("datapendaftaran/vw_data_pendaftaran", $data);
        $this->load->view("layout/footer");
    }
}
?>