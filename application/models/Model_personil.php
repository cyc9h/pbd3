<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_personil extends CI_Model{

    public function create($nama,$pangkat_id,$jabatan,$tempat_l,$tanggal_l,$agama,$j_kel,$alamat,$telp,$ket){
        $data = array('nama' => $nama,
        'pangkat_id'=>$pangkat_id,
        'jabatan'=>$jabatan
        'tempat_lahir'=>$tempat_l
        'tanggal_lahir'=>$tanggal_l
        'j_kel'=>$j_kel
        'alamat'=>$alamat
        'no_telp'=>$telp
        'ket'=>$ket);
        $query = $this->db->insert('personil', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('personil');
        $this->db->join('pangkat', 'pangkat.id = personil.pangkat_id');//kita join personil dengan foreign key pangkat
        $query = $this->db->get();
        return $query;
    }
    public function read($nrp){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('personil');
        $this->db->join('pangkat', 'pangkat.id = personil.pangkat_id');//kita join personil dengan foreign key pangkat_id
        $this->db->where('nrp', $nrp);
        $query = $this->db->get('');
        return $query;
    }
    public function update($nama,$pangkat_id,$jabatan,$tempat_l,$tanggal_l,$agama,$j_kel,$alamat,$telp,$ket,$nrp){
        $data = array('nama' => $nama,
        'pangkat_id'=>$pangkat_id,
        'jabatan'=>$jabatan
        'tempat_lahir'=>$tempat_l
        'tanggal_lahir'=>$tanggal_l
        'j_kel'=>$j_kel
        'alamat'=>$alamat
        'no_telp'=>$telp
        'ket'=>$ket);
        $this->db->where('nrp', $nrp);
        $query = $this->db->update('personil',$data);
        return $query;
    }
    public function delete($id){
        $this->db->where('nrp', $nrp);
        $query = $this->db->delete('personil');
        return $query;
    }

}