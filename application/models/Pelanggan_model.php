<?php
class Pelanggan_model extends CI_Model
{
    public function GetAll()
    {
        $this->db->where('level','member');
        return $this->db->get('tb_pengguna')->result_array();
    }

    public function hapus($id)
    {
        $this->db->delete('tb_pengguna', ['id' => $id]);
    }

    public function cari()
    {
        $noPel = substr($this->input->post('noPel',true),2);
        $this->db->where('kode', 'PL');
        $this->db->where('id', $noPel);
        return $this->db->get('tb_pengguna')->result_array();
        
    }
}
