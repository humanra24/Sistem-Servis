<?php
class Pembayaran_model extends CI_Model
{

    public function GetAllServis()
    {
        $this->db->select('*,s.kode AS kodeS, s.id AS idS, p.kode AS kodeP, p.id AS idP');
        $this->db->from('tb_servis s');
        $this->db->join('tb_pengguna p', 's.id_tb_pengguna = p.id');
        $this->db->where('s.status', 'succ');
        return $this->db->get()->result_array();
    }

    public function GetIdBay()
    {
        $data = $this->db->query("SELECT max(id) as max FROM `tb_bayar`")->row_array();
        $id = $data['max'];
        $id++;
        $no = sprintf($id);
        return $no;
    }

    public function GetAllBayar()
    {
        $this->db->select('*');
        $this->db->from('tb_bayar');
        return $this->db->get()->result_array();
    }

    public function cekIdSer()
    {
        return $this->db->query("SELECT * FROM tb_bayar where id_tb_servis='".$this->input->post('idS')."'")->num_rows();
    }

    public function simpan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date("Y-m-d H:i:s");

        $jml = $this->input->post('hrgSpare',true);

        $tot = count($jml);

        for($i=0; $i<$tot; $i++){
            $jml[$i];
        }

        $jmlah = array_sum($jml);

        $tot = $jmlah + $this->input->post('jsServis', true);

        $data = [
            'id' => $this->input->post('id', true),
            'kode' => 'BYR',
            'tgl' => $tgl,
            'js_servis' => $this->input->post('jsServis', true),
            'id_tb_servis' => $this->input->post('idS', true),
            'tot' => $tot,
            'status' => 'belum'
        ];
        $this->db->insert('tb_bayar', $data);

        $ganti = $this->input->post('ganti',true);
        $hrgSpare = $this->input->post('hrgSpare',true);

        $total = count($ganti);

        for($i=0; $i<$total; $i++){
        
        $data1 = ['ganti' => $ganti[$i],
                'hrg' => $hrgSpare[$i],
                'id_tb_bayar' => $this->input->post('id', true)
        ];

        $this->db->insert('detail_bayar', $data1);
        }
    }

    public function cari()
    {
        $noBay = substr($this->input->post('noBay',true),2);

        $this->db->select('*, (hrg_sparepart + jasa_servis) AS total');
        $this->db->from('tb_bayar b');        
        $this->db->join('tb_servis s', 'b.id_tb_servis = s.id');
        $this->db->where('s.kode', 'SV');
        $this->db->where('b.id_tb_servis', $noBay);
        return $this->db->get()->result_array();        
    }

    public function status($idBYR, $idS)
    {
        
        $this->db->update('tb_bayar', ['status' => 'sudah'], ['id' => $idBYR]);     
        $this->db->update('tb_servis', ['status' => 'terima'], ['id' => $idS]);    
    }

    public function getLastPembayaran()
    {
        $this->db->select('Max(id) AS id, kode as kode');
        $this->db->from('tb_bayar');
        return $this->db->get()->row_array();
    }

    public function print($id)
    {
        $this->db->select('*');
        $this->db->from('tb_bayar b');        
        $this->db->join('tb_servis s', 'b.id_tb_servis = s.id');
        $this->db->where('b.id', $id);
        return $this->db->get()->result_array(); 
    }

    public function printDetail($id)
    {
        $this->db->select('*');
        $this->db->from('detail_bayar d');        
        $this->db->join('tb_bayar b', 'b.id = d.id_tb_bayar');
        $this->db->where('b.id', $id);
        return $this->db->get()->result_array(); 
    }

    public function GetBayarId($id,$table)
    {        
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id', $id);
        return $this->db->get()->row_array();   
    }

    public function GetDetailBayarId($id,$table)
    {        
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id_tb_bayar', $id);
        return $this->db->get()->result_array();   
    }

    public function P_ubah($data, $tabel,$id)
    {
        
        $this->db->update($tabel, $data, ['id' => $id]);        
    }

    public function hapusBayar($id)
    {        
        $this->db->delete('tb_bayar', ['id' => $id]);
        $this->db->delete('detail_bayar', ['id_tb_bayar' => $id]);
    }

    public function Getnama($id)
    {
        $this->db->select('*');
        $this->db->from('tb_servis s');
        $this->db->join('tb_pengguna p', 's.id_tb_pengguna = p.id');
        $this->db->join('tb_bayar b', 'b.id_tb_servis = s.id');
        $this->db->where('b.id', $id);
        return $this->db->get()->row_array();
    }

    public function GetNamaAdmin()
    {
        $this->db->select('*');
        $this->db->from('tb_pengguna');
        $this->db->where('id', $this->session->userdata('id'));
        return $this->db->get()->row_array();
    }

    
}
