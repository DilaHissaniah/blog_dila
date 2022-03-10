<?php

class Blog extends CI_controller {                                                                                        
public function index(){
      $this->load->database();
      $this->load->model('Blogmodel');    

      $data['blog'] = 
      $this->Blogmodel->tampilBlog();

      $this->load->view('blog_view', $data);
  }
public function add_blog(){
      $this->load->view('add_blog_view');
    }
public function add_blog_act(){
      $this->load->database();
      $this->load->model('Blogmodel');
      
      $tambah = [
        'blog_judul'   => $this->input->post('blog_judul'),
        'blog_content' => $this->input->post('blog_content'),
        'blog_penulis' => $this->input->post('blog_penulis'),
      ];
      $this->Blogmodel->add_blog($tambah);
      redirect('Blog');
    }

 public function edit($id){
      $data['blog']=$this->Blogmodel->getsingelBlog('id',$id);
      $this->load->view('form_edit',$data);
    }

 public function delete($id){
      $this->load->database();
      $this->db->where('blog_id',$id);
      $this->db->delete('tbl_blog');

      redirect('blog');
    }
}
?>