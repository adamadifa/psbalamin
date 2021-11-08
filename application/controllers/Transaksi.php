<?php

 class Transaksi extends CI_Controller{
     
     function __construct() {
         parent::__construct();
         
         $this->load->model(array('model_barang','model_transaksi'));
    
     }
             
     function index(){
         
       if(isset($_POST['submit'])){
           
           $this->model_transaksi->inputdetailtransaksi();
           redirect('transaksi');
       }else{
         
         
            $data['listdatabarang'] = $this->model_barang->tampilkanbarang()->result();
            $data['detailbarang']   = $this->model_transaksi->tampildetail()->result();
            $this->template->load('template','transaksi/frm_input',$data);
       }
         
     }
     
     
     
     
     
     
 }