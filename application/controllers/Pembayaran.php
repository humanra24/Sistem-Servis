<?php
class Pembayaran extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('Login_model');

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
        $data['judul'] = 'Pembayaran';
        $data['bayar'] = $this->Pembayaran_model->GetAllBayar();
        $data['cari'] = null;
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah()
    {
            $data['judul'] = 'Pembayaran';
            $data['servis'] = $this->Pembayaran_model->GetAllServis();
            $data['id'] = $this->Pembayaran_model->GetIdBay();
            $data['idS'] = $this->input->post('idSPil', true);
            $data['kodeS'] = $this->input->post('kodeSPil', true);
            $data['idP'] = $this->input->post('idPPil', true);
            $data['kodeP'] = $this->input->post('kodePPil', true);

            $this->load->view('templates/header', $data);
            $this->load->view('pembayaran/tambah', $data);
            $this->load->view('templates/footer', $data);
    }

    public function simpan(){
        $cekIDSer = $this->Pembayaran_model->cekIdSer();

        if ($cekIDSer == 0) {
            $this->Pembayaran_model->simpan();
            $this->session->set_flashdata('bayar', 'Pembayaran Berhasil ditambah');
            redirect('pembayaran');
        }else {
            $this->session->set_flashdata('ada', 'Pembayaran Berhasil ditambah');
            redirect('pembayaran/tambah');
        }

        
    }

    public function cari()
    {
        $data['bayar'] = $this->Pembayaran_model->cari();
        $data['judul'] = 'Pembayaran';
        $data['cari'] = $this->input->post('noBay',true);
        
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/index', $data);
        $this->load->view('templates/footer');
    }

    public function status()
    {
        $idBYR = $this->input->post('idBYR',true);
        $idS = $this->input->post('idS',true);

        $this->Pembayaran_model->status($idBYR, $idS);
        $this->session->set_flashdata('sudah', 'Pembayaran Berhasil dibayar');
        redirect('pembayaran');
    }

    public function print_penj($id)
    {        
        $data['judul'] = 'Print Laporan';
        $data['bayar'] = $this->Pembayaran_model->Print($id);
        $data['detail'] = $this->Pembayaran_model->PrintDetail($id);
        $data['detail1'] = $this->Pembayaran_model->PrintDetail($id);
        $data['detail1'] = $this->Pembayaran_model->PrintDetail($id);
        $data['nama'] = $this->Pembayaran_model->Getnama($id);
        $data['namaAdmin'] = $this->Pembayaran_model->GetNamaAdmin();
        
        $this->load->view('pembayaran/print', $data);
    }

    public function ubah($id)
    {        
        $data['judul'] = 'Detail Pembayaran';
        $data['tampil'] = $this->Pembayaran_model->GetBayarId($id,'tb_bayar');
        $data['tampilan'] = $this->Pembayaran_model->GetDetailBayarId($id,'detail_bayar');
        $this->load->view('templates/header', $data);
        $this->load->view('pembayaran/ubah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function P_ubah()
    {
        $ganti = $this->input->post('ganti',true);
        $hrgSpare = $this->input->post('hrgSpare',true);
        $jsServis = $this->input->post('jsServis',true);

        $id = $this->input->post('id',true);;

        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d H:i:s");

        $data = [
            'ganti' => $ganti,
            'hrg_sparepart' => $hrgSpare,
            'jasa_servis' => $jsServis,
            'tgl' => $tgl
        ];

            $this->Pembayaran_model->P_ubah($data, 'tb_bayar',$id);
            $this->session->set_flashdata('ubah', 'Pembayaran Berhasil diubah');
            redirect('pembayaran');

        
    }

    public function hapus($id)
    {
        $this->Pembayaran_model->hapusBayar($id);
        $this->session->set_flashdata('hapus', 'Data Berhasil Dihapus');
        redirect('pembayaran');        
    }


}
