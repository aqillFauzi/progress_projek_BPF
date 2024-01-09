<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        $this->load->library('form_validation'); // Load library Form Validation
    }

    public function index()
    {
        $this->load->view('layout/auth_header');
        $this->load->view('auth/login');
        $this->load->view('layout/auth_footer');
    }

    public function login()
    {
        // Set rules untuk validasi form
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan pesan error
            $this->load->view('layout/auth_header');
            $this->load->view('auth/login');
            $this->load->view('layout/auth_footer');
        } else {
            // Jika validasi berhasil
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->Auth_model->get_user_by_credentials($username, $password);

            if ($user) {
                // Jika user ditemukan, set session dan redirect ke halaman utama
                $this->session->set_userdata('user_id', $user['id']);
                redirect('Dashboard'); // Ganti 'dashboard' dengan halaman utama setelah login
            } else {
                // Jika user tidak ditemukan, tampilkan pesan error
                $data['error_message'] = 'Username atau password salah.';
                $this->load->view('layout/auth_header');
                $this->load->view('auth/login', $data);
                $this->load->view('layout/auth_footer');
            }
        }
    }

    public function logout()
    {
        // Hapus session dan redirect ke halaman login
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('message', 'Logout berhasil');
        redirect('auth');
    }
}
?>
