<?php
class Berita extends ci_controller{
    public function index(){
        $this->load->database();
        $this->load->model('beritamodel');

        $data['Berita'] =
        $this->beritamodel->tampilberita();

        $this->load->view('berita_view', $data);
  }
    public function delete($id){
       $this->load->database();
       $this->db->where('berita_id', $id);               
       $this->db->delete('tbl_berita');
       redirect('berita');
  }
    public function add_berita(){
    $this->load->view('add_berita_view');
  }
  public function add_berita_act(){
      $this->load->database();
      $this->load->model('beritamodel');
    $tambah = [
      'berita_judul'   => $this->input->post('berita_judul'),
      'berita_isi'     => $this->input->post('berita_isi'),
      'berita_penulis' => $this->input->post('berita_penulis'),
      'berita_tanggal' => $this->input->post('berita_tanggal'),
      'berita_lokasi'  => $this->input->post('berita_lokasi'),
      'berita_id'      => $this->input->post('berita_id'),
      'berita_foto'    => $this->input->post('berita_foto'),
    ];
    $this->beritamodel->add_berita($tambah);
    redirect('Berita');
  }
}
?>