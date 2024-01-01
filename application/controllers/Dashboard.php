<?php

defined('BASEPATH') or exit('No direct script allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('Auth');
        }
    }
    public function index()
{
    $data['judul'] = "Dashboard";
    $data['user'] = $this->get_user_info(); // Mendapatkan informasi pengguna
    $this->load->view("layout/header");
    $this->load->view("dashboard/vw_dashboard", $data);
    $this->load->view("layout/footer");
}
private function get_user_info()
    {
        // Ambil informasi pengguna dari model berdasarkan user_id dari session
        $user_id = $this->session->userdata('user_id');
        $this->load->model('Auth_model');
        return $this->Auth_model->getById($user_id);
    }
            
}
?>
