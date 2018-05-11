<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan extends CI_Model{

    public function create($nrp, $terlapor_id,$saksi_id,$pelapor_id,$korban_id,$latitude,$longitude,$pukul,$apa,$bgmn,$brgbkt,$tindakan,$tgl){
        $data = array('nrp'=>$nrp,
        'terlapor_id'=>$terlapor_id,
        'saksi_id'=>$saksi_id,
        'pelapor_id'=>$pelapor_id,  
        'korban_id'=>$korban_id,  
        'latitude'=>$latitude,
        'longitude'=>$longitude
        'pukul'=>$pukul
        'apa'=>$apa
        'bagaimana'=>$bgmn
        'barang_bukti'=>$brgbkt
        'tindakan'=>$tindakan
        'tanggal'=>$tgl);
        $query = $this->db->insert('laporan', $data);
        return $query;
    }
    public function getAll(){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('laporan');
        $this->db->join('personil', 'personil.nrp = laporan.nrp', 'left');//kita join personil dengan foreign key nrp
        $this->db->join('terlapor', 'terlapor.id = laporan.terlapor_id', 'left');//kita join terlapor dengan foreign key terlapor_id
        $this->db->join('saksi', 'saksi.id = laporan.saksi_id', 'left');//kita join saksi dengan foreign key saksi_id
        $this->db->join('pelapor', 'pelapor.id = laporan.pelapor_id', 'left');//kita join pelapor dengan foreign key pelapor_id
        $this->db->join('korban', 'korban.id = laporan.korban_id', 'left');//kita join korban dengan foreign key korban_id
        $query = $this->db->get();
        return $query;
    }
    public function read($no){
        $this->db->select('*');//kita akan mengambil semua data
        $this->db->from('laporan');
        $this->db->join('personil', 'personil.nrp = laporan.nrp');//kita join personil dengan foreign key nrp
        $this->db->join('terlapor', 'terlapor.id = laporan.terlapor_id', 'left');//kita join terlapor dengan foreign key terlapor_id
        $this->db->join('saksi', 'saksi.id = laporan.saksi_id', 'left');//kita join saksi dengan foreign key saksi_id
        $this->db->join('pelapor', 'pelapor.id = laporan.pelapor_id', 'left');//kita join pelapor dengan foreign key pelapor_id
        $this->db->join('korban', 'korban.id = laporan.korban_id', 'left');//kita join korban dengan foreign key korban_id
        $this->db->where('no_laporan', $no);
        $query = $this->db->get();
        return $query;
    }
    public function update($nrp,$terlapor_id,$saksi_id,$pelapor_id,$korban_id,$latitude,$longitude,$pukul,$apa,$bgmn,$brgbkt,$tindakan,$tgl,$no){
        $data = array('nrp' => $nrp,
        'terlapor_id'=>$terlapor_id,
        'saksi_id'=>$saksi_id,
        'pelapor_id'=>$pelapor_id,  
        'korban_id'=>$korban_id,
        'latitude'=>$latitude,
        'longitude'=>$longitude
        'pukul'=>$pukul
        'apa'=>$apa
        'bagaimana'=>$bgmn
        'barang_bukti'=>$brgbkt
        'tindakan'=>$tindakan
        'tanggal'=>$tgl);
        $this->db->where('no_laporan', $no);
        $query = $this->db->update('laporan',$data);
        return $query;
    }
    public function delete($no){
        $this->db->where('no_laporan', $no);
        $query = $this->db->delete('laporan');
        return $query;
    }

}