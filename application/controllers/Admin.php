<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');

        $this->load->model('Servis_model');
        $this->load->model('Pembayaran_model');

        if($this->session->userdata('status') != "login"){
			redirect('login');
        }
        if($this->session->userdata('level') != "admin"){
			redirect('home');
        }
    }

    public function ubah($id)
    {
        $data['judul'] = 'Ubah Profil';
        $data['admin'] = $this->Admin_model->ambil($id);
        $this->load->view('templates/header', $data);
        $this->load->view('admin/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function ubahan()
    {
        $this->Admin_model->ubahan();
        $this->session->set_flashdata('ubah', 'Pembayaran Berhasil dibayar');
        redirect('dashboard');
    }

    public function ubahPass()
    {
        $this->Admin_model->ubahPass();
        $this->session->set_flashdata('ubahPass', 'Pembayaran Berhasil dibayar');
        redirect('dashboard');
    }
}
