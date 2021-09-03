<?php
class Admin_model extends CI_Model
{
    public function ambil($id)
    {
        $this->db->select('*');
        $this->db->where('id',$id);
        return $this->db->get('tb_pengguna')->row_array();
    }

    public function ubahan()
    {
        $data = [
            'nama' => $this->input->post('nama',true),
            'email' => $this->input->post('email',true),
            'telp' => $this->input->post('telp',true),
            'alamat' => $this->input->post('alamat',true)
        ];

        $this->db->update('tb_pengguna', $data, ['id' => $this->input->post('id',true)]);
    }

    public function ubahPass()
    {
        $data = [
            'pass' => MD5($this->input->post('pass',true))
        ];

        $this->db->update('tb_pengguna', $data, ['id' => $this->input->post('id',true)]);
    }
}
