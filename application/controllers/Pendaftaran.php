<?php

class Pendaftaran extends CI_Controller{

    function __construct(){

        parent::__construct();

        $this->load->model(array('model_pendaftaran','model_gelombang','model_santri'));



    }

    function daftartsn(){

      if(isset($_POST['submit'])){
			
		
		$this->model_pendaftaran->insertdaftar();
		redirect('auth/loginuser');

      }else{
          $cekgelombang = $this->model_pendaftaran->getgelombang()->num_rows();
          if($cekgelombang == 1){
			  
			  $tingkat  = 1;
			  $nodaftar	= $this->model_pendaftaran->get_nomordaftar($tingkat)->row_array();
			  $data['act']				="daftartsn";
			  $data['nomor_terakhir']	= $nodaftar['no_daftar'];
              $data['title']   			='Pendaftaran Tingkat Tsanawiyah';
              $data['gel']      		= $this->model_pendaftaran->getgelombang()->row_array();
              $data['tingkat']  		= $tingkat;
              $this->template->load('template','Pendaftaran/frm_daftar',$data);
            }else{

              echo "Pendaftaran Belum di Buka";

            }

      }
    }
	
	function daftarmln(){

      if(isset($_POST['submit'])){
			
		
		$this->model_pendaftaran->insertdaftar();
		redirect('auth/loginuser');

      }else{
          $cekgelombang = $this->model_pendaftaran->getgelombang()->num_rows();
          if($cekgelombang == 1){
			  $tingkat  = 2;
			  $nodaftar	= $this->model_pendaftaran->get_nomordaftar($tingkat)->row_array();
			   $data['act']				="daftarmln";
			  $data['nomor_terakhir']	= $nodaftar['no_daftar'];
              $data['title']   			='Pendaftaran Tingkat Mualimien';
              $data['gel']      		= $this->model_pendaftaran->getgelombang()->row_array();
              $data['tingkat']  		= $tingkat;
              $this->template->load('template','Pendaftaran/frm_daftar',$data);
            }else{

              echo "Pendaftaran Belum di Buka";

            }

      }
    }
	
	
	function konfirmasi_bayar(){
		
		
		$this->model_pendaftaran->insert_konfirmasibayar();
		redirect('dashboard/user');
		
		
	}
	
	
	function view_konfirmasi(){
		$tingkat = $this->uri->segment(3);
		if($tingkat ==1){
			$data['class1']		="active";
			$data['class2']		="";
			
			if(isset($_POST['submit'])){
				
				$namadaftar 		= $_REQUEST['nama_pendaftar'];
				$dari				= $_REQUEST['dari'];
				$sampai				= $_REQUEST['sampai'];
				$data['v_nama'] 	= $namadaftar ;
				$data['v_dari'] 	= $dari ;
				$data['v_sampai'] 	= $sampai ;
				if(!empty($namadaftar) && empty($dari) && empty($sampai)){
					
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(empty($namadaftar) && !empty($dari) && !empty($sampai)){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cariperiode($dari,$sampai,$tingkat);
				
				}elseif(!empty($namadaftar) && !empty($dari) && !empty($sampai)){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_nama_periode($namadaftar, $dari,$sampai,$tingkat);
				
				}else{
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->listkonfirmasi($tingkat);	
				}
					
			}else{
				$data['v_nama'] 		= "" ;
				$data['v_dari'] 		= "" ;
				$data['v_sampai'] 		= "" ;
				$data['listkonfirmasi'] = $this->model_pendaftaran->listkonfirmasi($tingkat);	
			}
		}else{
			$data['class1']		="";
			$data['class2']		="active";	

			if(isset($_POST['submit'])){
				
				$namadaftar 		= $_REQUEST['nama_pendaftar'];
				$dari				= $_REQUEST['dari'];
				$sampai				= $_REQUEST['sampai'];
				$data['v_nama'] 	= $namadaftar ;
				$data['v_dari'] 	= $dari ;
				$data['v_sampai'] 	= $sampai ;
				if(!empty($namadaftar) && empty($dari) && empty($sampai)){
					
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(empty($namadaftar) && !empty($dari) && !empty($sampai)){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cariperiode($dari,$sampai,$tingkat);
				
				}elseif(!empty($namadaftar) && !empty($dari) && !empty($sampai)){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_nama_periode($namadaftar, $dari,$sampai,$tingkat);
				
				}else{
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->listkonfirmasi($tingkat);	
				}
					
			}else{
				$data['v_nama'] 		= "" ;
				$data['v_dari'] 		= "" ;
				$data['v_sampai'] 		= "" ;
				$data['listkonfirmasi'] = $this->model_pendaftaran->listkonfirmasi($tingkat);	
			}
		}
		
		$this->template->load('template_admin','Pendaftaran/view_konfirmasi',$data);
		
		
	}
	
	
	
	function update_konfirmasi(){
		
		$nodaftar = $this->uri->segment(3);
		$tingkat  = $this->uri->segment(4);
		$this->model_pendaftaran->update_konfirmasi($nodaftar);
		redirect('pendaftaran/view_konfirmasi/'.$tingkat);
		
		
	}
	
	function hapus_konfirmasi(){
		
		$nodaftar = $this->uri->segment(3);
		$tingkat  = $this->uri->segment(4);
		$this->model_pendaftaran->hapus_konfirmasi($nodaftar);
		redirect('pendaftaran/view_konfirmasi/'.$tingkat);
		
		
	}
	
	
	
	
	function view_test(){
		
		$tingkat 					= $this->uri->segment(3);
		if($tingkat ==1){
			$data['class1']		="active";
			$data['class2']		="";
			$data['gelombang']	= $this->model_gelombang->tampil_ta();
			
			if(isset($_POST['submit'])){
				$namadaftar 	= $_REQUEST['nama_pendaftar'];
				$ta				= $_REQUEST['ta'];
				$data['v_nama'] = $namadaftar ;
				if(empty($ta)){
					
					$data['v_ta'] = "-- Pilih Tahun Akademik --";
					$data['ta']	  = "";	
				}else{
					
					$data['v_ta'] = $ta;
					$data['ta']	  = $ta;	
				}

				if(!empty($_REQUEST['nama_pendaftar']) && empty($_REQUEST['ta'])){
					
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(!empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_namadaftar_ta($namadaftar,$ta,$tingkat);
					
				}elseif(empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_ta($ta,$tingkat);
					
				}else{
					
					$data['v_ta'] 				= "-- Pilih Tahun Akademik --";
					$data['ta']	  				= "";	
					$data['v_nama']				="";
					$data['listkonfirmasi']		=$this->model_pendaftaran->listkonfirmasi($tingkat);
					
				}
				
			}else{
					$data['v_ta'] 				= "-- Pilih Tahun Akademik --";
					$data['ta']	  				= "";	
					$data['v_nama']				="";
					$data['listkonfirmasi']		=$this->model_pendaftaran->listkonfirmasi($tingkat);
			}
		}else{
			
			$data['class1']		="";
			$data['class2']		="active";
			$data['gelombang']	= $this->model_gelombang->tampil_ta();
			
			if(isset($_POST['submit'])){
				$namadaftar 	= $_REQUEST['nama_pendaftar'];
				$ta				= $_REQUEST['ta'];
				$data['v_nama'] = $namadaftar ;
				if(empty($ta)){
					
					$data['v_ta'] = "-- Pilih Tahun Akademik --";
					$data['ta']	  = "";	
				}else{
					
					$data['v_ta'] = $ta;
					$data['ta']	  = $ta;	
				}

				if(!empty($_REQUEST['nama_pendaftar']) && empty($_REQUEST['ta'])){
					
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(!empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_namadaftar_ta($namadaftar,$ta,$tingkat);
					
				}elseif(empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listkonfirmasi'] = $this->model_pendaftaran->cari_ta($ta,$tingkat);
					
				}else{
					
					$data['v_ta'] 				= "-- Pilih Tahun Akademik --";
					$data['ta']	  				= "";	
					$data['v_nama']				="";
					$data['listkonfirmasi']		=$this->model_pendaftaran->listkonfirmasi($tingkat);
					
				}
				
			}else{
					$data['v_ta'] 				= "-- Pilih Tahun Akademik --";
					$data['ta']	  				= "";	
					$data['v_nama']				="";
					$data['listkonfirmasi']		=$this->model_pendaftaran->listkonfirmasi($tingkat);
			}
			
		}
		
		
		
		$this->template->load('template_admin','Pendaftaran/view_test',$data);
		
		
		
		
	}
	
	
	
	function update_hasiltest(){
		
		if(isset($_POST['submit'])){
			$no_daftar = $this->input->post('no_daftar');
			$tingkat   = $this->input->post('tingkat');
			
			
			$this->model_pendaftaran->update_hasiltest($no_daftar);
			redirect('pendaftaran/view_test/'.$tingkat);
			
		}else{
		
			$no_daftar 			= $this->input->post('no_daftar');
			$data['pendaftar']	= $this->model_pendaftaran->get_pendaftar($no_daftar)->row_array();
			$kb					= $this->model_pendaftaran->get_konfirmasibayar($no_daftar)->row_array();
			
			if($kb['hasiltest'] == ""){
				
				$data['hasiltest'] = "Belum di Proses";
			}else{
				$data['hasiltest'] = $kb['hasiltest'];
			}
			$this->load->view('Pendaftaran/frm_updatehasiltest',$data);
		}
		
		
	}
	
	
	
	function cetak_kartu(){
		
		$this->load->library('cfpdf');
		$no_daftar 		   = $this->uri->segment(3); 
		$data['pendaftar'] = $this->model_pendaftaran->get_datakartu($no_daftar)->row_array();
		$this->load->view('Pendaftaran/cetak_kartu',$data);
		
		
		
	}
	
	
	
	function cetak_formulir(){
		
		$this->load->library('cfpdf');
		$no_daftar 		   = $this->uri->segment(3); 
		$data['pendaftar'] = $this->model_pendaftaran->get_pendaftar($no_daftar)->row_array();
		$this->load->view('Pendaftaran/cetak_formulir',$data);
		
		
		
	}
	
	function detail_pendaftar(){
		
		
		$no_daftar 		    = $this->uri->segment(3); 
		$pendaftar 			= $this->model_pendaftaran->get_pendaftar($no_daftar)->row_array();
		if(!empty($pendaftar['foto'])){

            $data['foto']     = base_url()."/upload/foto_siswa/".$pendaftar['foto'];
        }else{

            $data['foto']     = base_url()."/upload/foto_siswa/user.jpg";

        }
		$data['pendaftar']  = $this->model_pendaftaran->get_pendaftar($no_daftar)->row_array();
		$this->template->load('template_admin','Pendaftaran/detail_pendaftar',$data);
		
		
		
		
	}
	
	
	
	function rekap_daftar(){
		
		$data['gelombang']	= $this->model_gelombang->tampil_ta();
		if(isset($_POST['submit'])){
			$ta	= $_REQUEST['ta'];	
			if(empty($ta)){
				
				$data['v_ta'] = "-- Pilih Tahun Akademik --";
				$data['ta']	  = "";	
			}else{
				
				$data['v_ta'] = $ta;
				$data['ta']	  = $ta;	
			}
			
			
			$data['jmltsn1'] = $this->model_pendaftaran->get_jmldaftar($ta,1,1)->num_rows();
			$data['jmltsn2'] = $this->model_pendaftaran->get_jmldaftar($ta,1,2)->num_rows();
			$data['jmlmln1'] = $this->model_pendaftaran->get_jmldaftar($ta,2,1)->num_rows();
			$data['jmlmln2'] = $this->model_pendaftaran->get_jmldaftar($ta,2,2)->num_rows();
			
			
			//Jenis Kelamin
			$data['jmltsnL'] = $this->model_pendaftaran->get_jmljk($ta,1,"L")->num_rows();
			$data['jmltsnP'] = $this->model_pendaftaran->get_jmljk($ta,1,"P")->num_rows();
			$data['jmlmlnL'] = $this->model_pendaftaran->get_jmljk($ta,2,"L")->num_rows();
			$data['jmlmlnP'] = $this->model_pendaftaran->get_jmljk($ta,2,"P")->num_rows();
			
			
			
			//Konfirmasi
			$data['jmlktsn'] = $this->model_pendaftaran->get_jmlkonfirmasi($ta,1)->num_rows();
			$data['jmlkmln'] = $this->model_pendaftaran->get_jmlkonfirmasi($ta,2)->num_rows();
			
		}else{
			$data['jmltsn1'] 			="0";
			$data['jmltsn2'] 			="0";
			$data['jmlmln1'] 			="0";
			$data['jmlmln2'] 			="0";
			
			$data['jmltsnL'] 			="0";
			$data['jmltsnP'] 			="0";
			$data['jmlmlnL'] 			="0";
			$data['jmlmlnP'] 			="0";
			
			$data['jmlktsn'] 			="0";
			$data['jmlkmln'] 			="0";
			$data['v_ta'] 				= "-- Pilih Tahun Akademik --";
			$data['ta']	  				= "";	
			
		}
		$this->template->load('template_admin','Pendaftaran/rekap_daftar',$data);
		
		
		
		
		
	}
	
	
	
	
	
	
	




}
