<?php

class Login_model extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function cekLevel($table, $where)
    {
        $lev = $this->db->get_where($table, $where)->row_array();
        $level = $lev['level'];
        return $level;
    }

    function cekUser($table, $where)
    {
        $lev = $this->db->get_where($table, $where)->row_array();
        $level = $lev['nama'];
        return $level;
    }

    function cekId($table, $where)
    {
        $lev = $this->db->get_where($table, $where)->row_array();
        $level = $lev['id'];
        return $level;
    }

    public function getId()
    {
        $this->db->select('MAX(id) AS idMax, kode');
        return $this->db->get('tb_pengguna')->row_array();
    }

    public function simpan()
    {
        $data = [
            'id' => $this->input->post('id', true),
            'kode' => 'PL',
            'nama' => $this->input->post('namaD', true) . ' ' . $this->input->post('namaB', true),
            'email' => $this->input->post('email', true),
            'pass' => MD5($this->input->post('pass', true)),
            'telp' => $this->input->post('telp', true),
            'alamat' => $this->input->post('alamat', true),
            'level' => 'member'
        ];

        $this->db->insert('tb_pengguna', $data);
    }

    public function cekTelp()
    {
        return $this->db->query("SELECT * FROM tb_pengguna where telp='" . $this->input->post('telp') . "'")->num_rows();
    }

    public function cekEmail()
    {
        return $this->db->query("SELECT * FROM tb_pengguna where email='" . $this->input->post('email') . "'")->num_rows();
    }
}
