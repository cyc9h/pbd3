<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_pemeriksaan extends CI_Model{

    public function create($bap_id,$nrp,$status){
        $data = array('bap_id' => $bap_id,
        'nrp'=>$nrp,
        'status'=>$status
        );
        $query = $this->db->insert('detail_pemeriksaan', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('detail_pemeriksaan');
        $this->db->join('bap', 'bap.id = detail_pemeriksaan.bap_id', 'left');//kita join bap dengan foreign key bap_id
        $this->db->join('personil', 'personil.nrp = detail_pemeriksaan.nrp', 'left');//kita join personil dengan foreign key nrp
        $query = $this->db->get();
        return $query;
    }
    public function read($id){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('detail_pemeriksaan');
        $this->db->join('bap', 'bap.id = detail_pemeriksaan.bap_id', 'left');//kita join bap dengan foreign key bap_id
        $this->db->join('personil', 'personil.nrp = detail_pemeriksaan.nrp', 'left');//kita join personil dengan foreign key nrp
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
    public function update($bap_id,$nrp,$status, $id){
        $data = array('bap_id' => $bap_id,
        'nrp'=>$nrp,
        'status'=>$status);
        $this->db->where('id', $id);
        $query = $this->db->update('detail_pemeriksaan',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('detail_pemeriksaan');
        return $query;
    }

}