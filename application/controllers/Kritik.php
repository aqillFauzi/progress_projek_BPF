<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kritik_model');
    }

    public function index()
    {
        $data['judul'] = "Data Kritik Pelanggan";
        $data['kritik'] = $this->Kritik_model->get();
        $this->load->view("layout/header");
        $this->load->view('kritik/vw_kritik', $data);
        $this->load->view("layout/footer");
    }

    public function tambahKritikSaran()
    {
        // Jika ada data yang dikirim melalui form
        if ($this->input->post()) {
            $data = array(
                'nama' => $this->input->post('nama'),
                'pesan' => $this->input->post('pesan'),
                'kebersihan' => $this->input->post('kebersihan'),
                'ketelitian' => $this->input->post('ketelitian'),
                'keramahan' => $this->input->post('keramahan')
            );

            // Panggil model untuk menyimpan data kritik dan saran
            $this->Kritik_model->insertKritikSaran($data);

            $this->session->set_flashdata('kritik_success', 'Kritik dan saran berhasil ditambahkan.');
            redirect(base_url('landingpage'));
        } else {
            // Jika tidak ada data yang dikirim, tampilkan form
            $this->load->view('tambah_kritik_view');
        }
    }
    public function hapus($id)
    {
        $this->Kritik_model->delete($id);
        redirect('Kritik');
    }
}
?>