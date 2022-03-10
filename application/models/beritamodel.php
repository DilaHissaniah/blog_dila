<?php
    class beritamodel extends CI_Model{

        function tampilBerita(){
            return $this->db->get('tbl_berita')->result_array();
        }
            public function add_berita($tambah){
                return $this->db->insert('tbl_berita',$tambah);
        }
        public function insertberita($data){
            $this->db->insert('berita',$data);
            return $this->db->insert_id();
        }                                                                                                                                             
    }
 ?>
                                                                                                                          