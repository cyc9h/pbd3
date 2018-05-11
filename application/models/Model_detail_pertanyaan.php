<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detail_pertanyaan extends CI_Model{

    public function create($bap_id,$pertanyaan,$jawaban){
        $data = array('bap_id' => $bap_id,
        'pertanyaan'=>$pert,
        'jawaban'=>$jwb
        );
        $query = $this->db->insert('detail_pertanyaan', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('detail_pertanyaan');
        $this->db->join('bap', 'bap.id = detail_pertanyaan.bap_id');//kita join bap dengan foreign key bap_id
        $query = $this->db->get();
        return $query;
    }
    public function read($nopert){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('detail_pertanyaan');
        $this->db->join('bap', 'bap.id = detail_pertanyaan.bap_id');//kita join bap dengan foreign key bap_id
        $this->db->where('no_pertanyaan', $nopert);
        $query = $this->db->get();
        return $query;
    }
    public function update($bap_id,$pertanyaan,$jawaban, $nopert){
        $data = array('bap_id' => $bap_id,
        'pertanyaan'=>$pert,
        'jawaban'=>$jwb);
        $this->db->where('no_pertanyaan', $nopert);
        $query = $this->db->update('detail_pertanyaan',$data);
        return $query;
    }
    public function delete($nopert){
        $this->db->where('no_pertanyaan', $nopert);
        $query = $this->db->delete('detail_pertanyaan');
        return $query;
    }

}