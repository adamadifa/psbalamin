<?php

class Operator extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->load->model('model_operator');
    }
    
    function index(){
        
        $data['operator'] = $this->model_operator->tampilkandata(); 
        $this->template->load('template','operator/view_operator',$data);
        
    }
    
    function inputoperator(){
        
        if(isset($_POST['submit'])){
             $this->model_operator->insertdata();
             redirect('operator');
        }else{
             $this->template->load('template','operator/frm_input');
        }
        
    }
    
    
    function hapusoperator(){
        $id = $this->uri->segment(3);
        $this->model_operator->hapusdata($id);
        redirect('operator');
        
        
    }
    
    
    
    function editoperator(){
        
        if(isset($_POST['submit'])){
            $id  = $this->input->post('operator_id');
            $this->model_operator->updatedata($id);
            redirect('operator');
        }else{
            $id = $this->uri->segment('3');
            $data['operator'] = $this->model_operator->getdata($id)->row_array();
            $this->template->load('template','operator/frm_edit',$data);
        }
    }
    
}