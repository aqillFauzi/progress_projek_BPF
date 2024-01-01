<?php

defined('BASEPATH') or exit('No direct script allowed');

class Landingpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Landing_page_model");
    }
    public function index()
    {
        $data['judul'] = "";
        $data['landingpage'] = $this->Landing_page_model->get();
        
        if ($this->input->post('submit_kritik_saran')) {
            $kritik_saran_data = array(
                'pesan' => $this->input->post('pesan'),
                'kebersihan' => $this->input->post('kebersihan'),
                'keramahan' => $this->input->post('keramahan'),
                'ketelitian' => $this->input->post('ketelitian'),
            );
    
            $this->Landing_page_model->insertKritikSaran($kritik_saran_data);    
        }
        $this->load->view("landingpage/vw_landingpage", $data);
    }  
}
?>