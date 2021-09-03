<?php
class Laporan_model extends CI_Model
{
    public function GetAllServis()
    {

        $tglDari = $this->input->post('tglDari',true);
        $tglSampai = $this->input->post('tglSampai',true);

        if ($tglDari == null && $tglSampai == null) {
            $this->db->select('*,s.id AS Sid, b.id AS Bid');
            $this->db->from('tb_servis s');
            $this->db->join('tb_bayar b', 's.id = b.id_tb_servis');
            $this->db->where('s.status', 'terima');
            return $this->db->get()->result_array();
        }else{
            $this->db->select('*,s.id AS Sid, b.id AS Bid');
            $this->db->from('tb_servis s');
            $this->db->join('tb_bayar b', 's.id = b.id_tb_servis');
            $this->db->where('s.status', 'terima');
            $this->db->where('tgl_selesai >=', $tglDari);
            $this->db->where('tgl_selesai <=', $tglSampai);
            return $this->db->get()->result_array();
        }
    }
    public function admin()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('id', 1);
        return $this->db->get()->row_array();
    }
}
