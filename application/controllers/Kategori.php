<?php
 class Kategori extends CI_controller{
     public function index(){
         $this->load->database();

         $this->load->model('KategoriModel');

         $data['kategori'] =
         $this->KategoriModel->tampilkategori();
         $this->load->view('kategori_view', $data);

     }

     public function delete($id){
        $this->load->database();

        $this->db->where('kategori_id', $id);               
        $this->db->delete('tbl_kategori');


        redirect('kategori');

      }
      public function add_kategori(){
        $this->load->view('add_kategori_view');
      }
      public function add_kategori_act(){
        $this->load->database();
        $this->load->model('KategoriModel');
        
        $tambah = [
          'kategori_nama'   => $this->input->post('kategori_nama'),
          'kategori_ket' => $this->input->post('kategori_ket'),
        ];
        $this->KategoriModel->add_kategori($tambah);
        redirect('kategori');
      }
      public function edit($id){
        $data['kategori']=$this->KategoriModel->getsingelkategori('id',$id);
        $this->load->view('form_edit',$data);
      }
 }
 ?>