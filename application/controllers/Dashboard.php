<?php
class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Login_model');

        $this->load->model('Servis_model');
        $this->load->model('Pembayaran_model');

        if($this->session->userdata('status') != "login"){
			redirect('login');
        }
        if($this->session->userdata('level') != "admin"){
			redirect('home');
        }
    }

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['servis'] = $this->Servis_model->getLastServis();
        $data['pembayaran'] = $this->Pembayaran_model->getLastPembayaran();
        $this->load->view('templates/header', $data);
        $this->load->view('Dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
