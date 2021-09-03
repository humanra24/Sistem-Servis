<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');

        $this->load->library('form_validation');
    }

    function index()
    {
        $data['judul'] = 'Login';

        $this->load->view('login/index', $data);
    }

    function lupa_password()
    {
        $data['judul'] = 'Lupa Password';

        $this->load->view('login/lupa_password', $data);
    }

    function aksi_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'pass' => MD5($password)
        );
        $cek = $this->Login_model->cek_login("tb_pengguna", $where)->num_rows();
        $cekLevel = $this->Login_model->cekLevel("tb_pengguna", $where);
        $nama = $this->Login_model->cekUser("tb_pengguna", $where);
        $id = $this->Login_model->cekId("tb_pengguna", $where);

        if ($cek > 0 && $cekLevel == 'admin') {

            $data_session = array(
                'user' => $nama,
                'level' => $cekLevel,
                'id' => $id,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect('dashboard');
        }else if($cek > 0 && $cekLevel == 'member'){
            $data_session = array(
                'user' => $nama,
                'level' => $cekLevel,
                'id' => $id,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect('home');
        } else {
            $this->session->set_flashdata('flash', 'email atau Password salah!');
            redirect('login');
        }
    }

    function daftar()
    {
        $data['judul'] = 'Daftar';
        $data['cekTelp'] = '';
        $data['cekEmail'] = '';
        $data['id'] = $this->Login_model->GetId();
        $this->load->view('login/daftar', $data);
    }

    function simpan()
    {
        $namaD = $this->input->post('namaD', true);
        $namaB = $this->input->post('namaB', true);
        $telp = $this->input->post('telp', true);
        $alamat = $this->input->post('alamat', true);
        $email = $this->input->post('email', true);
        $pass = $this->input->post('pass', true);
        $rePass = $this->input->post('rePass', true);

        $data['id'] = $this->Login_model->GetId();

        $data['judul'] = 'Daftar';

        $data['namaD'] = $namaD;
        $data['namaB'] = $namaB;
        $data['telp'] = $telp;
        $data['alamat'] = $alamat;
        $data['email'] = $email;
        $data['pass'] = $pass;
        $data['rePass'] = $rePass;

        $cekTelp = $this->Login_model->cekTelp();
        $cekEmail = $this->Login_model->cekEmail();

        $this->form_validation->set_rules('namaD', 'Nama Depan', 'required|max_length[6]');
        $this->form_validation->set_rules('namaB', 'Nama Belakang', 'max_length[6]');
        $this->form_validation->set_rules('telp', 'telp/WA', 'required|max_length[15]|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[30]|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required|max_length[30]');
        $this->form_validation->set_rules('rePass', 'Password', 'required|max_length[30]');

        if ($this->form_validation->run() == FALSE) {
            $data['cekTelp'] = '';
            $data['cekEmail'] = '';
            $this->load->view('login/daftar', $data);
        } elseif ($cekTelp > 0 || $cekEmail > 0) {
            $data['cekTelp'] = $cekTelp > 0;
            $data['cekEmail'] = $cekEmail > 0;
            $this->load->view('login/daftar', $data);
        } elseif ($pass != $rePass) {
            $this->session->set_flashdata('pass', 'password harus sama!');
            $data['cekTelp'] = '';
            $data['cekEmail'] = '';
            $this->load->view('login/daftar', $data);
        } else {
            $this->session->set_flashdata('Daftar', 'Daftar Berhasil');
            $this->Login_model->simpan();
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
