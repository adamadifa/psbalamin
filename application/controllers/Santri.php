<?php

class Santri extends CI_Controller{

    function __construct() {
        parent::__construct();

        $this->load->model(array('model_santri','model_provinsi','model_gelombang','model_pendaftaran'));

    }
    function view_santri(){

        $tingkat = $this->uri->segment(3);
		
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
					
					
					$data['listdaftar'] = $this->model_santri->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(!empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listdaftar'] = $this->model_santri->cari_namadaftar_ta($namadaftar,$ta,$tingkat);
					
				}elseif(empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listdaftar'] = $this->model_santri->cari_ta($ta,$tingkat);
					
				}else{
					
					$data['v_ta'] 		= "-- Pilih Tahun Akademik --";
					$data['ta']	  		= "";	
					$data['v_nama']		="";
					$data['listdaftar'] = $this->model_santri->tampildaftartsn();
					
				}
				
				
			}else{
					$data['v_ta'] 		= "-- Pilih Tahun Akademik --";
					$data['ta']	  		= "";	
					$data['v_nama']		="";
					$data['listdaftar'] = $this->model_santri->tampildaftartsn();
			}
			
			
		}else{
			$data['class1']		="";
			$data['class2']		="active";
			$data['gelombang']	= $this->model_gelombang->tampil_ta();
			
			
			
			if(isset($_POST['submit'])){
				
				$namadaftar 	= $_REQUEST['nama_pendaftar'];
				$ta				= $_REQUEST['ta'];
				$data['v_nama'] = $namadaftar;
				
				if(empty($ta)){
					
					$data['v_ta'] = "-- Pilih Tahun Akademik --";
					$data['ta']	  = "";	
				}else{
					
					$data['v_ta'] = $ta;
					$data['ta']	  = $ta;	
				}
			
				if(!empty($_REQUEST['nama_pendaftar']) && empty($_REQUEST['ta'])){
					
					
					$data['listdaftar'] = $this->model_santri->carinamadaftar($namadaftar,$tingkat);
					
				}elseif(!empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listdaftar'] = $this->model_santri->cari_namadaftar_ta($namadaftar,$ta,$tingkat);
					
				}elseif(empty($_REQUEST['nama_pendaftar']) && !empty($_REQUEST['ta'])){
					
					$data['listdaftar'] = $this->model_santri->cari_ta($ta,$tingkat);
					
				}else{
					
					$data['v_ta'] 		= "-- Pilih Tahun Akademik --";
					$data['ta']	  		= "";	
					$data['v_nama']		="";
					$data['listdaftar'] = $this->model_santri->tampildaftarmln();
					
				}
				
				
			}else{
					$data['v_ta'] 		= "-- Pilih Tahun Akademik --";
					$data['ta']	  		= "";	
					$data['v_nama']		="";
					$data['listdaftar'] = $this->model_santri->tampildaftarmln();
			}
		}

        $this->template->load('template_admin','Santri/view_santri',$data);
    }



    function inputsantri(){
        if(isset($_POST['submit'])){
			
            
			$this->model_santri->insertsantri();
			
            redirect('santri/view_santri/'.$this->input->post('tingkat'));
        }else{
			$cekgelombang = $this->model_pendaftaran->getgelombang()->num_rows();
			if($cekgelombang == 1){
			
				$data['gel'] = $this->model_pendaftaran->getgelombang()->row_array();
				$data['provinsi']     = $this->model_provinsi->provinsi();
				$data['tgl_hariini']  = date('Y-m-d');
				$this->template->load('template_admin','Santri/frm_santri',$data);
			}else{
				
				echo "Pendaftaran Belum di Buka";
				
			}
        }

    }




    function editdaftar(){

		$nisn = $this->input->post('nisn');
		$this->model_santri->updatedaftar($nisn);
		redirect('dashboard/user');
     
    }
	
	
	function editdaftaradmin(){

       
		$nisn = $this->input->post('nisn');
		$this->model_santri->updatedaftar($nisn);
		$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Data Berhasil di Update.</p>
                </div>');  
		
		redirect('santri/view_santri/'.$this->input->post('tingkat'));
        
    }



    function hapusbarang(){

            $id = $this->uri->segment(3);
            $this->model_barang->delbarang($id);
            redirect('barang');




    }



    function ambil_data(){

        $modul=$this->input->post('modul');
        $id=$this->input->post('id');

        if($modul=="kabupaten"){

            echo $this->model_provinsi->kabupaten($id);
        }
        else if($modul=="kecamatan"){

            echo $this->model_provinsi->kecamatan($id);

        }
        else if($modul=="kelurahan"){

            echo $this->model_provinsi->kelurahan($id);

        }
    }

    function upload_foto(){
          $this->load->library('upload');
          $path ="./upload/foto_siswa/";

          $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
          $config['upload_path'] = $path; //path folder
          $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
          $config['max_size'] = '2048'; //maksimum besar file 2M
          $config['max_width']  = '1288'; //lebar maksimum 1288 px
          $config['max_height']  = '768'; //tinggi maksimu 768 px
          $config['file_name'] = $this->session->userdata('nisn'); //nama yang terupload nantinya

          $this->upload->initialize($config);
          $filelama   = $this->input->post('filelama');
          @unlink($path.$filelama);



          if($_FILES['filefoto']['name'])
          {
              if ($this->upload->do_upload('filefoto'))
              {

                  $gbr = $this->upload->data();
                  $data = array(

                    'foto' =>$gbr['file_name']

                  );



                  $this->model_santri->upload_foto($data); //akses model untuk menyimpan ke database
                  //pesan yang muncul jika berhasil diupload pada session flashdata
                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                  redirect('dashboard/user'); //jika berhasil maka akan ditampilkan view vupload
              }else{
                  //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                  redirect('dashboard/user'); //jika gagal maka akan ditampilkan form upload
              }
          }




    }
	
	
	
	function upload_fotoadmin(){
          $this->load->library('upload');
          $path ="./upload/foto_siswa/";

          $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
          $config['upload_path'] = $path; //path folder
          $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
          $config['max_size'] = '2048'; //maksimum besar file 2M
          $config['max_width']  = '1288'; //lebar maksimum 1288 px
          $config['max_height']  = '768'; //tinggi maksimu 768 px
          $config['file_name'] = $this->input->post('nisn'); //nama yang terupload nantinya

          $this->upload->initialize($config);
          $filelama   = $this->input->post('filelama');
          @unlink($path.$filelama);



          if($_FILES['filefoto']['name'])
          {
              if ($this->upload->do_upload('filefoto'))
              {

                  $gbr = $this->upload->data();
                  $data = array(

                    'foto' =>$gbr['file_name']

                  );



                  $this->model_santri->upload_fotoadmin($data); //akses model untuk menyimpan ke database
                  //pesan yang muncul jika berhasil diupload pada session flashdata
                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload gambar berhasil !!</div></div>");
                  redirect('pendaftaran/detail_pendaftar/'.$this->input->post('no_daftar')); //jika berhasil maka akan ditampilkan view vupload
              }else{
                  //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                  $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
                  redirect('pendaftaran/detail_pendaftar/'.$this->input->post('no_daftar')); //jika gagal maka akan ditampilkan form upload
              }
          }




    }
	
	
	
	function hapus_daftar(){
		
		$nodaftar = $this->uri->segment(3);
		$tingkat  = $this->uri->segment(4);
		$this->model_santri->hapus_daftar($nodaftar);
		$this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Success</h4>
                    <p>Data Berhasil di Hapus.</p>
                </div>');  
		redirect('santri/view_santri/'.$tingkat);
		
		
		
		
	}
	
	
	function edit_pendaftar(){
		
		$nisn				  = $this->uri->segment(3);
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
		
		$this->template->load('template_admin','santri/frm_edit',$data);
		
	}



}
