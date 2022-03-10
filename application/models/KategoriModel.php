<?php

class kategorimodel extends CI_Model{
    
    function tampilkategori(){
        return $this->db->get('tbl_kategori')->result_array();
    }
    public function add_kategori($tambah){
        return $this->db->insert('tbl_kategori',$tambah);
}
public function getsingelkategori($field,$value){
    $this->db->where($field,$value);
    $query =$this->db->get('kategori');
    return $query->row_array();
}
}