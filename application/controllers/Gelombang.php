<?php

class Gelombang extends CI_Controller{


  function __construct() {
      parent::__construct();

      $this->load->model('model_gelombang');

  }



function view_gelombang(){

    $data['listgelombang'] = $this->model_gelombang->tampilgelombang();
    $this->template->load('template_admin','Gelombang/view_gelombang',$data);


}


function inputgelombang(){
    if(isset($_POST['submit'])){

        $this->model_gelombang->insertgelombang();
        redirect('gelombang/view_gelombang');
    }else{


        $this->template->load('template_admin','Gelombang/frm_gelombang');
    }

}



function hapus_gel(){
	
	$id_gel = $this->uri->segment(3);
	
	$this->model_gelombang->hapus_gel($id);
	redirect('gelombang/view_gelombang');
	
	
}


}