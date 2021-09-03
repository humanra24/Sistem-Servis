<?php
class M_Servis_model extends CI_Model
{

    public function getId()
    {
        $this->db->select('MAX(id) AS idMax, kode');
        return $this->db->get('tb_servis')->row_array();
    }

    public function getServ()
    {
        $this->db->where('id', $this->input->post('id',true));
        return $this->db->get('tb_servis')->row_array();
    }

    public function getIdServ()
    {
        $this->db->select('S.id, S.kode, S.status');
        $this->db->from('tb_servis S');
        $this->db->join('tb_pengguna P', 'S.id_tb_pengguna = P.id');
        $this->db->where('P.id', $this->session->userdata('id'));
        return $this->db->get()->result_array();
    }

    public function rusak()
    {
        $this->db->select('*');
        $this->db->from('kerusakan');
        $this->db->where('id_tb_servis', $this->input->post('id',true));
        return $this->db->get()->result_array();
    }

    public function tambah()
    {

        $kerusakan = $this->input->post('kerusakan',true);

        $total = count($kerusakan);
        for($i=0; $i<$total; $i++){
        
        $data1 = ['kerusakan' => $kerusakan[$i],
                'id_tb_servis' => $this->input->post('id', true)
        ];

        $this->db->insert('kerusakan', $data1);
        }

        $data = [
            'id' => $this->input->post('id', true),
            'kode' => $this->input->post('kode', true),
            'id_tb_pengguna' => $this->input->post('userId', true),
            'tgl_masuk' => $this->input->post('tgl', true),
            'jns' => $this->input->post('jns', true),
            'merk' => $this->input->post('merk', true),
            'seri' => $this->input->post('seri', true),          
            'status' => 'pend'
        ];
        $this->db->insert('tb_servis', $data);
    }

    public function tagih($id)
    {
        $this->db->select('*');
        $this->db->from('detail_bayar d');
        $this->db->join('tb_bayar b', 'b.id = d.id_tb_bayar');
        $this->db->join('tb_servis s', 's.id = b.id_tb_servis');
        $this->db->where('b.id_tb_servis', $id);
        return $this->db->get()->result_array();
    }

    public function tagihDetail($id)
    {
        $this->db->select('*');
        $this->db->from('tb_bayar b');
        $this->db->join('tb_servis s', 's.id = b.id_tb_servis');
        $this->db->where('b.id_tb_servis', $id);
        return $this->db->get()->row_array();
    }
}

