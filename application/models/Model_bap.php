<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bap extends CI_Model{

    public function create($no,$pukul){
        $data = array('no_laporan' => $no,
        'pukul'=>$pukul
        );
        $query = $this->db->insert('bap', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('bap');
        $this->db->join('laporan', 'laporan.no_laporan = bap.no_laporan');//kita join laporan dengan foreign key no_laporan
        $query = $this->db->get();
        return $query;
    }
    public function read($id){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('bap');
        $this->db->join('laporan', 'laporan.no_laporan = bap.no_laporan');//kita join laporan dengan foreign key no_laporan
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
    public function update($no,$pukul,$id){
        $data = array('no_laporan' => $no,
        'pukul'=>$pukul);
        $this->db->where('id', $id);
        $query = $this->db->update('bap',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('bap');
        return $query;
    }

}