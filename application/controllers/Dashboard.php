<?php

class Dashboard extends CI_Controller{

    function __construct() {
        parent::__construct();

        $this->load->model(array('model_santri','model_provinsi','model_gelombang','model_pendaftaran'));




    }
    //Halaman Utama

    function admin(){


        check_loginadmin();
        $data ['title']       = 'Halaman Dashboard';
        $this->template->load('template_admin','dashboard',$data);

    }

    function user(){

        check_login();
        $nisn                 = $this->session->userdata('nisn');
		$no_daftar			  = $this->session->userdata('no_daftar');


        $data['provinsi']     = $this->model_provinsi->provinsi();
        $data['santri']       = $this->model_santri->getdaftar($nisn)->row_array();
        
		
		$santri               = $this->model_santri->getdaftar($nisn)->row_array();
		$data['jk']			  = $santri['jk'];

		//GET PROVINSI
		$provinsi	  	  	  = $this->model_provinsi->get_provinsi($santri['provinsi'])->row_array();
		if(empty($santri['provinsi'])){
			$data['prov']		="-- Pilih Provinsi --";
			$data['id_prov']	="0";
		}else{

			$data['prov']		=$provinsi['name'];
			$data['id_prov']	=$santri['provinsi'];

		}

		//Get Kabupaten / Kota

		$kabupaten	  	  	  = $this->model_provinsi->get_kabupaten($santri['kota'])->row_array();
		if(empty($santri['kota'])){
			$data['kota']		="-- Pilih Kabupaten / Kota --";
			$data['id_kota']	="0";
		}else{

			$data['kota']		=$kabupaten['name'];
			$data['id_kota']	=$santri['kota'];

		}


		//Get Kecamatan

		$kecamatan	  	  	  = $this->model_provinsi->get_kecamatan($santri['kecamatan'])->row_array();
		if(empty($santri['kecamatan'])){
			$data['kec']		="-- Pilih Kecamatan --";
			$data['id_kec']		="0";
		}else{

			$data['kec']		=$kecamatan['name'];
			$data['id_kec']		=$santri['kecamatan'];

		}


		//Get Kelurahan

		$kelurahan	  	  	  = $this->model_provinsi->get_kelurahan($santri['kelurahan'])->row_array();
		if(empty($santri['kelurahan'])){
			$data['kelurahan']		="-- Pilih Kelurahan --";
			$data['id_kelurahan']	="0";
		}else{

			$data['kelurahan']		=$kelurahan['name'];
			$data['id_kelurahan']	=$santri['kelurahan'];

		}


		$idgel				  = $santri['id_gel'];
		$data['gel']		  = $this->model_gelombang->get_gelombang($idgel)->row_array();
		$cekkonfirmasibayar	  = $this->model_pendaftaran->get_konfirmasibayar($no_daftar)->num_rows();
		$ck	  				  = $this->model_pendaftaran->get_konfirmasibayar($no_daftar)->row_array();

		if($cekkonfirmasibayar != 0 && $ck['status_bayar'] == 0 ){
			$data['color']		  =	"Yellow";
			$data['status_bayar'] = "SEDANG DALAM PROSES VERIFIKASI";
			$data['ckb']		  = 1;
			$data['sb']			  = $ck['status_bayar'];
		}elseif($cekkonfirmasibayar != 0 && $ck['status_bayar'] == 1 ){

			$data['status_bayar'] = "SUDAH DI VERIFIKASI";
			$data['color']		  =	"Green";
			$data['ckb']		  = 1;
			$data['sb']			  = $ck['status_bayar'];
		}else{

			$data['status_bayar'] = "BELUM DI VERIFIKASI";
			$data['color']		  =	"Red";
			$data['ckb']		  = 0;
			$data['sb']			  = $ck['status_bayar'];

		}

        if(!empty($santri['foto'])){

            $data['foto']     = "./upload/foto_siswa/".$santri['foto'];
        }else{

            $data['foto']     = "./upload/foto_siswa/user.jpg";

        }
        
       // $data1['status_daftar'] = $this->load->view('Santri/status_daftar',$data);
        $this->template->load('template_user','dashboard_user',$data);

    }



}
