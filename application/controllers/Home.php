<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Login_model');

        $this->load->model('M_Servis_model');

        $this->load->library('form_validation');

        if($this->session->userdata('status') != "login"){
			redirect('login');
        }
        if($this->session->userdata('level') != "member"){
			redirect('dashboard');
        }
    }

    public function index()
    {
        $data['judul'] = 'ELS Computer | Servis';
        $data['id'] = $this->M_Servis_model->getId();
        $data['idServ'] = $this->M_Servis_model->getIdServ();

        $this->load->view('templates/header', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('m_servis/index', $data);
        $this->load->view('tentang/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail()
    {
        $data['judul'] = 'ELS Computer | Servis';
        $data['idServ'] = $this->M_Servis_model->getIdServ();
        $data['servis'] = $this->M_Servis_model->getServ();
        $data['rusak'] = $this->M_Servis_model->rusak();


        $this->load->view('templates/header', $data);
        $this->load->view('m_servis/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
            $this->M_Servis_model->tambah();
            $this->session->set_flashdata('servis', 'Daftar Servis Berhasil');
            redirect('Home');
    }
    public function tagihan($id)
    {
        $data['judul'] = 'ELS Computer | Servis';
        $data['idServ'] = $this->M_Servis_model->getIdServ();
        $data['tagih'] = $this->M_Servis_model->tagih($id);
        $data['tagih1'] = $this->M_Servis_model->tagih($id);
        $data['tagih2'] = $this->M_Servis_model->tagihDetail($id);
        $data['id'] = $id;

        $this->load->view('templates/header', $data);
        $this->load->view('m_servis/tagihan', $data);
        $this->load->view('templates/footer');
    }
}
