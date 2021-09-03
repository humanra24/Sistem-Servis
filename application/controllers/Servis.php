<?php
class Servis extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Servis_model');

        if($this->session->userdata('status') != "login"){
			redirect('login');
        }
        if($this->session->userdata('level') != "admin"){
			redirect('home');
        }
    }

    public function index()
    {
        $data['judul'] = 'Servis';
        $data['servis'] = $this->Servis_model->GetAllServis();
        $data['cari'] = null;
        $this->load->view('templates/header', $data);
        $this->load->view('servis/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Servis';
        $this->load->view('templates/header', $data);
        $this->load->view('servis/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function Ubah($id)
    {
        $data['judul'] = 'Ubah Servis';
        $data['servis'] = $this->Servis_model->GetAllServisById($id);
        $data['rusak'] = $this->Servis_model->rusak($id);
        $this->load->view('templates/header', $data);
        $this->load->view('servis/ubah', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'detail';
        $data['servis'] = $this->Servis_model->GetAllServisById($id);
        $data['rusak'] = $this->Servis_model->rusak($id);
        $this->load->view('templates/header', $data);
        $this->load->view('servis/detail', $data);
        $this->load->view('templates/footer');
    }

    public function UbahStatus($id)
    {
        $data['judul'] = 'Ubah status Servis';
        $data['servis'] = $this->Servis_model->GetAllServisById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('servis/ubahStatus', $data);
        $this->load->view('templates/footer');
    }

    public function Ubahan()
    {
        $data['servis'] = $this->Servis_model->ubah();
        $this->session->set_flashdata('ubahStatus', 'Data Berhasil Dirubah');
        redirect('servis');
    }

    public function ubahAll()
    {
        $this->Servis_model->ubahAll();
        $this->session->set_flashdata('ubah', 'Data Berhasil Dirubah');
        redirect('servis');
    }

    public function Hapus($id)
    {
        $data['servis'] = $this->Servis_model->hapus($id);
        $this->session->set_flashdata('hapus', 'Data Berhasil Dihapus');
        redirect('servis');
    }

    public function cari()
    {
        $data['servis'] = $this->Servis_model->cari();
        $data['judul'] = 'Servis';
        $data['cari'] = $this->input->post('noSer',true);
        
        $this->load->view('templates/header', $data);
        $this->load->view('servis/index', $data);
        $this->load->view('templates/footer');
    }
}
