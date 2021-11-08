<?php

class Kategori extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_kategori');
    }
    
    
    function index(){
        
        $data['listkategori'] = $this->model_kategori->tampilkategori();
       
        
        
        $this->template->load('template','kategori/view_kategori',$data);
        
    }
    
    
    //Input Kategori
    function inputkategori(){
        
       if(isset($_POST['submit'])){
           
           $this->model_kategori->inputkategori();
           redirect('kategori');
          
       }else{
        
       
         $this->template->load('template','kategori/frm_kategori');
       }
        
    }
    
    
    
    //Edit Kategori
    function editkategori(){
         if(isset($_POST['submit'])){
           
           $id = $this->input->post('kategori_id');  
           $this->model_kategori->updatekategori($id);
           redirect('kategori');
          
       }else{
        
        
            $id = $this->uri->segment(3);
            $data['kategori'] = $this->model_kategori->editkategori($id)->row_array();
           
            $this->template->load('template','kategori/edit_kategori',$data);
       }
    }
    
    
    //Hapus Kategori
    
    
    function hapuskategori(){
        
        $id = $this->uri->segment(3);
        $this->model_kategori->deletekategori($id);
        redirect('kategori');
    }
    
    
    
}
