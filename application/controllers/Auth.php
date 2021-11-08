<?php

Class Auth extends CI_Controller{

    function __construct() {
        parent::__construct();

        $this->load->model(array('model_operator','model_santri'));

    }


    // Login
    function loginadmin(){






        if(isset($_POST['submit'])){
          $username = $this->input->post('username');
          $password = $this->input->post('password');

           $hasil = $this->model_operator->loginadmin($username,$password)->num_rows();
           $op    = $this->model_operator->loginadmin($username,$password)->row_array();




           if($hasil!=0){

               $this->session->set_userdata(array('status_login'=>'admin','operator_id'=>$op['operator_id'],'nama_operator'=>$op['nama_lengkap']));
               redirect('dashboard/admin');
           }else{

               redirect('auth/loginadmin');
           }
        }else{
            check_logadmin();
            $data['title'] = 'Halaman Login';
            $this->load->view('frm_loginadmin');
        }


    }




    function loginuser(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if(isset($_POST['submit'])){

           $hasil = $this->model_santri->loginuser($username,$password)->num_rows();
           $s     = $this->model_santri->loginuser($username,$password)->row_array();

		   $data  = array(
					   'status_login'	=>'oke',
					   'nisn'			=>$s['nisn'],
					   'nama_santri'	=>$s['nama_lengkap'],
					   'no_daftar'		=>$s['no_daftar'],
					   'foto'			=>$s['foto']
					   );
           if($hasil!=0){

               $this->session->set_userdata($data);
               redirect('dashboard/user');
           }else{

               redirect('auth/loginuser');
           }
        }else{
            check_log();
            $data['title'] = 'Halaman Login';
            $this->template->load('template','frm_login',$data);
        }


    }


    //Log Out

    function logoutadmin(){

        $this->session->sess_destroy();
        redirect('auth/loginadmin');

    }


    function logoutuser(){

        $this->session->sess_destroy();
        redirect('auth/loginuser');

    }


}
