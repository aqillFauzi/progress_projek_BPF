<?php
defined('BASEPATH') or exit('No direct script allowed');

class Landingpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Landing_page_model");
        $this->load->library('session');
    }

    public function index()
    {
        $data['judul'] = "";
        $data['landingpage'] = $this->Landing_page_model->get();

        if ($this->input->post('submit_kritik_saran')) {
            $kritik_saran_data = array(
                'nama' => $this->input->post('nama'),
                'pesan' => $this->input->post('pesan'),
                'kebersihan' => $this->input->post('kebersihan'),
                'keramahan' => $this->input->post('keramahan'),
                'ketelitian' => $this->input->post('ketelitian'),
            );

            // Panggil model untuk menyimpan data kritik dan saran
            $this->Landing_page_model->insertKritikSaran($kritik_saran_data);


            // Arahkan kembali ke halaman landing
            header("Location: " . base_url('landingpage'));
            exit(); // Penting untuk menghentikan eksekusi setelah melakukan redirect

            // Tambahkan flashdata untuk memberi pemberitahuan
            $this->session->set_flashdata('kritik_success', 'Kritik dan saran Anda telah berhasil dikirim.');

            redirect('landingpage');
        }
        $this->load->view("landingpage/vw_landingpage", $data);
    }
    
}
