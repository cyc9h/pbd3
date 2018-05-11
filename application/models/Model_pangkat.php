<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pangkat extends CI_Model{

    public function create(){
        $data = array('nama' => $this->input->post('nama'));
        $query = $this->db->insert('pangkat', $data);
        return $query;
    }
    public function getAll(){
        $query = $this->db->get('pangkat');
        return $query;
    }
    public function read($id){
        $this->db->where('id', $id);
        $query = $this->db->get('pangkat');
        return $query;
    }
    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('pangkat');
        return $query;
    }
    public function update($nama, $id){
        $data = array('nama' => $this->input->post('nama'));
        $this->db->where('id', $id);
        $query = $this->db->update('pangkat', $data);
        return $query;
    }

}