<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_korban extends CI_Model{

    public function create($nama,$tempat_l,$tanggal_l,$kerja,$agama,$j_kel, $kwn,$alamat,$telp){
        $data = array('nama' => $nama,
        'tempat_lahir'=>$tempat_l,
        'tanggal_lahir'=>$tanggal_l,
        'pekerjaan'=>$kerja,
        'agama'=>$agama,
        'j_kel'=>$j_kel,
        'kwn'=>$kwn,
        'alamat'=>$alamat,
        'no_telp'=>$telp
        );
        $query = $this->db->insert('korban', $data);
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('korban');
        return $query;
    }
    public function read($id){
        $this->db->where('id', $id);
        $query = $this->db->get('korban');
        return $query;
    }
    public function update($nama,$tempat_l,$tanggal_l,$kerja,$agama,$j_kel, $kwn,$alamat,$telp, $id){
        $data = array('nama' => $nama,
        'tempat_lahir'=>$tempat_l,
        'tanggal_lahir'=>$tanggal_l,
        'pekerjaan'=>$kerja,
        'agama'=>$agama,
        'j_kel'=>$j_kel,
        'kwn'=>$kwn,
        'alamat'=>$alamat,
        'no_telp'=>$telp);
        $this->db->where('id', $id);
        $query = $this->db->update('korban',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('korban');
        return $query;
    }

}