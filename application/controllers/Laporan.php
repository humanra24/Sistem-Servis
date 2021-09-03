<?php
class Laporan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Login_model');

        $this->load->model('Laporan_model');

        if($this->session->userdata('status') != "login"){
			redirect('login');
        }
        if($this->session->userdata('level') != "admin"){
			redirect('home');
        }
    }

    public function index()
    {
        $data['judul'] = 'Laporan';
        $data['laporan'] =$this->Laporan_model->GetAllServis();
        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function cektgl()
    {
        $data['judul'] = 'Laporan';
        $data['dari'] = $this->input->post('tglDari',true);
        $data['sampai'] = $this->input->post('tglSampai',true);
        $data['laporan'] =$this->Laporan_model->GetAllServis();
        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function print()
    {
        $data['judul'] = 'Print Laporan';
        $data['dari'] = $this->input->post('tglDari',true);
        $data['sampai'] = $this->input->post('tglSampai',true);
        $data['laporan'] =$this->Laporan_model->GetAllServis();
        $data['laporan1'] =$this->Laporan_model->GetAllServis();
        $data['nama'] = $this->Laporan_model->admin();
        $this->load->view('laporan/print', $data);
    }

}
