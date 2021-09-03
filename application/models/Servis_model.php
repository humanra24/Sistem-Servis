<?php
class Servis_model extends CI_Model
{
    public function GetAllServis()
    {
        $this->db->select('*,s.kode AS kodeS, s.id AS idS, p.kode AS kodeP, p.id AS idP ');
        $this->db->from('tb_servis s');
        $this->db->join('tb_pengguna p', 's.id_tb_pengguna = p.id');
        return $this->db->get()->result_array();
    }

    public function GetAllServisById($id)
    {
        $this->db->select('*,s.kode AS kodeS, s.id AS idS, p.kode AS kodeP, p.id AS idP ');
        $this->db->from('tb_servis s');
        $this->db->join('tb_pengguna p', 's.id_tb_pengguna = p.id');
        $this->db->where('s.id', $id);
        return $this->db->get('')->row_array();
    }

    public function ubah()
    {
        $status = $this->input->post('status');
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d H:i:s");
            if ($status == 'succ' || $status == 'fail') {
            $data = ['status' => $status,
                    'tgl_selesai' => $tgl];
            $this->db->where('id', $this->input->post('id') );
            $this->db->update('tb_servis', $data);
        }elseif($status == 'acc'){
            $data = ['status' => $status,];
            $this->db->where('id', $this->input->post('id') );
            $this->db->update('tb_servis', $data);
        }
    }

    public function ubahAll()
    {
        $data = [
            'jns' => $this->input->post('jns'),
            'merk' => $this->input->post('merk'),
            'seri' => $this->input->post('seri'),
            'kerusakan' => $this->input->post('kerusakan')
        ];
        $this->db->where('id', $this->input->post('id') );
        $this->db->update('tb_servis', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_servis');
    }

    public function cari()
    {
        $noSer = substr($this->input->post('noSer',true),2);

        $this->db->select('*,s.kode AS kodeS, s.id AS idS, p.kode AS kodeP, p.id AS idP ');
        $this->db->from('tb_servis s');
        $this->db->join('tb_pengguna p', 's.id_tb_pengguna = p.id');
        $this->db->where('s.kode', 'SV');
        $this->db->where('s.id', $noSer);
        return $this->db->get()->result_array();        
    }

    public function getLastServis()
    {
        $this->db->select('Max(id) AS id, kode as kode');
        $this->db->from('tb_servis');
        return $this->db->get()->row_array();
    }

    public function rusak($id)
    {
        $this->db->select('*');
        $this->db->from('kerusakan');
        $this->db->where('id_tb_servis', $id);
        return $this->db->get()->result_array();
    }
}
