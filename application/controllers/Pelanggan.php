<?php
class Pelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');

        if ($this->session->userdata('status') != "login") {
            redirect('login');
        }
        if($this->session->userdata('level') != "admin"){
			redirect('home');
        }
    }

    public function index()
    {
        $data['judul'] = 'Pelanggan';
        $data['GetAll'] = $this->Pelanggan_model->GetAll();
        $data['cari'] = null;
        
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Pelanggan_model->hapus($id);
        $this->session->set_flashdata('hapus_P', 'Data Pelangga Telah Dihapus');
        redirect('pelanggan');
    }

    public function cari()
    {
        $data['GetAll'] = $this->Pelanggan_model->cari();
        $data['judul'] = 'Pelanggan';
        $data['cari'] = $this->input->post('noPel',true);
        
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }
}
