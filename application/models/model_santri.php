<?php

class Model_santri extends CI_Model{

    function loginuser($username,$password){

       $check = $this->db->get_where('pendaftar',array('nisn'=>$username,'password'=>$password));
       return $check;




    }



    function  tampildaftartsn(){
		
		$query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat =1";
		return $this->db->query($query);
		
     

    }
	
	function  tampildaftarmln(){

		
        $query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat =2";
		return $this->db->query($query);

    }
	
	
	
	
	function  carinamadaftar($namadaftar,$tingkat){

		
        $query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE nama_lengkap like '%$namadaftar%' AND tingkat = '$tingkat'";
		return $this->db->query($query);

    }
	
	
	function  cari_namadaftar_ta($namadaftar,$ta,$tingkat){

		
        $query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE nama_lengkap like '%$namadaftar%' AND tahun_ajaran = '$ta'  AND tingkat = '$tingkat'";
		return $this->db->query($query);

    }
	
	
	function  cari_ta($ta,$tingkat){

		
        $query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE tahun_ajaran = '$ta' AND tingkat = '$tingkat'";
		return $this->db->query($query);

    }


    function getdaftar($nisn){

        return $this->db->get_where('pendaftar',array('nisn'=>$nisn));

    }


    function pilihankategori(){

        return $this->db->get('kategori_barang');



    }


    function  insertsantri(){
		
		
		$tingkat 			= $this->input->post('tingkat');
		if($tingkat==1){
			$kode = "TSN";
		}else{
			$kode = "MLN";
		}
		$this->db->order_by('no_daftar','DESC');
		$this->db->limit(1);
		$tahun				= date("Y");
		$nodaftarterakhir 	= $this->db->get_where('pendaftar',array('tingkat'=>$tingkat))->row_array();
		$nomor_terakhir		= $nodaftarterakhir['no_daftar'];
		$no_daftar			= buatkode($nomor_terakhir, $tahun.$kode, 4);
        $nisn               = $this->input->post('nisn');
        $nama_lengkap       = $this->input->post('nama_lengkap');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tgl_lahir          = $this->input->post('tgl_lahir');
        $jk                 = $this->input->post('jk');
        $anakke             = $this->input->post('anakke');
        $dari               = $this->input->post('dari');
        $anak               = $anakke."/".$dari;
        $nokk               = $this->input->post('nokk');
        $hobi               = $this->input->post('hobi');
        $citacita           = $this->input->post('citacita');
        $nohp               = $this->input->post('nohp');
        $alamatsiswa        = $this->input->post('jalan');
        $rtrw               = $this->input->post('rtrw');
        $provinsi           = $this->input->post('provinsi');
        $kota               = $this->input->post('kabupaten');
        $kecamatan          = $this->input->post('kecamatan');
        $kelurahan          = $this->input->post('kelurahan');
        $jarak              = $this->input->post('jarak');
        $transportasi       = $this->input->post('transportasi');
        $asalsekolah        = $this->input->post('asalsekolah');
        $jenjang            = $this->input->post('jenjang');
        $status             = $this->input->post('statusekolah');
        $npsn               = $this->input->post('npsn');
        $alamatsekolah      = $this->input->post('alamatsekolah');
        $kabsekolah         = $this->input->post('kabsekolah');
        $noskhu             = $this->input->post('noskhu');
       


       
		$nikayah            = $this->input->post('nikayah');
        $namaayah            = $this->input->post('namaayah');
        $pddayah            = $this->input->post('pddayah');
        $pekerjaanayah      = $this->input->post('pekerjaanayah');

        $nikibu             = $this->input->post('nikibu');
        $namaibu            = $this->input->post('namaibu');
        $pddibu             = $this->input->post('pddibu');
        $pekerjaanibu       = $this->input->post('pekerjaanibu');
        $penghasilan        = $this->input->post('penghasilan');

        $bidangprestasi     = $this->input->post('bidangprestasi');
        $tingkatprestasi    = $this->input->post('tingkatprestasi');
        $peringkat          = $this->input->post('peringkat');

        $tahun              = $this->input->post('tahun');
        $tgl_daftar         = $this->input->post('tgl_daftar');;
		
		$gelombang			= $this->input->post('id_gel');

		$daribank	 		= "Manual";
		$biaya_daftar		= $this->input->post('biaya_daftar');
		$tglbayar	 		= $this->input->post('tgl_daftar');
	
	
		$datakonfirmasi = array(
		
			'no_daftar' 	=> $no_daftar,
			'dari_bank'		=> $daribank,
			
			'tgl_bayar'		=> $tglbayar,
			'jml_bayar'		=> $biaya_daftar,
			'status_bayar'	=> '1'
		
		
	
	
	
		);
	
	  




        $data       = array(
						'no_daftar'				  => $no_daftar,
                        'nisn'                    => $nisn,
                        'nama_lengkap'            => $nama_lengkap,
                        'tempat_lahir'            => $tempat_lahir,
                        'tgl_lahir'               => $tgl_lahir,
                        'jk'                      => $jk,
                        'anakke'                  => $anak,
                        'nokk'                    => $nokk,
                        'hobi'                    => $hobi,
                        'citacita'                => $citacita,
						'nohp'					  => $nohp,
                        'alamatsiswa'             => $alamatsiswa,
                        'rtrw'                    => $rtrw,
                        'provinsi'                => $provinsi,
                        'kota'                    => $kota,
                        'kecamatan'               => $kecamatan,
                        'kelurahan'               => $kelurahan,
                        'jarak'                   => $jarak,
                        'transportasi'            => $transportasi,
                        'asalsekolah'             => $asalsekolah,
                        'jenjang'                 => $jenjang,
                        'status'                  => $status,
                        'npsn'                    => $npsn,
                        'alamatsekolah'           => $alamatsekolah,
                        'kotasekolah'             => $kabsekolah,
                        'noskhu'                  => $noskhu,
                        'nikayah'                 => $nikayah,
                        'namaayah'                => $namaayah,
                        'pddayah'                 => $pddayah,
                        'pekerjaanayah'           => $pekerjaanayah,
                        'nikibu'                  => $nikibu,
                        'namaibu'                 => $namaibu,
                        'pddibu'                  => $pddibu,
                        'pekerjaanibu'            => $pekerjaanibu,
                        'penghasilan'             => $penghasilan,
                        'bidangprestasi'          => $bidangprestasi,
                        'tingkatprestasi'         =>$tingkatprestasi,
                        'peringkatprestasi'       =>$peringkat,
                        'tahun'                   =>$tahun,
                        'tgl_daftar'              =>$tgl_daftar,
						'tingkat'				  => $tingkat,
						'id_gel'				  => $gelombang




                     );

        $this->db->insert('pendaftar',$data);
		$this->db->insert('konfirmasi_bayar',$datakonfirmasi);


    }

   


    function updatedaftar($nisn){


      $nama_lengkap       = $this->input->post('nama_lengkap');
      $tempat_lahir       = $this->input->post('tempat_lahir');
      $nohp               = $this->input->post('nohp');
      $tgl_lahir          = $this->input->post('tgl_lahir');
      $jk                 = $this->input->post('jk');
      $anakke             = $this->input->post('anakke');
      $dari               = $this->input->post('dari');
      $anak               = $anakke."/".$dari;
      $nokk               = $this->input->post('nokk');
      $hobi               = $this->input->post('hobi');
      $citacita           = $this->input->post('citacita');
      $nohp               = $this->input->post('nohp');
      $alamatsiswa        = $this->input->post('jalan');
      $rtrw               = $this->input->post('rtrw');
      $provinsi           = $this->input->post('provinsi');
      $kota               = $this->input->post('kabupaten');
      $kecamatan          = $this->input->post('kecamatan');
      $kelurahan          = $this->input->post('kelurahan');
      $jarak              = $this->input->post('jarak');
      $transportasi       = $this->input->post('transportasi');
      $asalsekolah        = $this->input->post('asalsekolah');
      $jenjang            = $this->input->post('jenjang');
      $status             = $this->input->post('statusekolah');
      $npsn               = $this->input->post('npsn');
      $alamatsekolah      = $this->input->post('alamatsekolah');
      $kabsekolah         = $this->input->post('kabsekolah');
  
  


      $noskhu             = $this->input->post('noskhu');

      $nikayah            = $this->input->post('nikayah');
      $namaayah            = $this->input->post('namaayah');
      $pddayah            = $this->input->post('pddayah');
      $pekerjaanayah      = $this->input->post('pekerjaanayah');

      $nikibu             = $this->input->post('nikibu');
      $namaibu            = $this->input->post('namaibu');
      $pddibu             = $this->input->post('pddibu');
      $pekerjaanibu       = $this->input->post('pekerjaanibu');
      $penghasilan        = $this->input->post('penghasilan');

      $bidangprestasi     = $this->input->post('bidangprestasi');
      $tingkatprestasi    = $this->input->post('tingkatprestasi');
      $peringkat          = $this->input->post('peringkat');

      $tahun              = $this->input->post('tahun');
	 // $tgl_daftar		  = $this->input->post('tgl_daftar');







      $data       = array(


                      'nama_lengkap'           => $nama_lengkap,
                      'tempat_lahir'           => $tempat_lahir,
                      'nohp'                    => $nohp,
                      'tgl_lahir'               => $tgl_lahir,
                      'jk'                      => $jk,
                      'anakke'                  => $anak,
                      'nokk'                    => $nokk,
                      'hobi'                    => $hobi,
                      'citacita'                => $citacita,
                      'alamatsiswa'             => $alamatsiswa,
                      'rtrw'                    => $rtrw,
                      'provinsi'                => $provinsi,
                      'kota'                    => $kota,
                      'kecamatan'               => $kecamatan,
                      'kelurahan'               => $kelurahan,
                      'jarak'                   => $jarak,
                      'transportasi'            => $transportasi,
                      'asalsekolah'             => $asalsekolah,
                      'jenjang'                 => $jenjang,
                      'status'                  => $status,
                      'npsn'                    => $npsn,
                      'alamatsekolah'           => $alamatsekolah,
                      'kotasekolah'             => $kabsekolah,
                      'noskhu'                  => $noskhu,
                      'nikayah'                 => $nikayah,
                      'namaayah'                => $namaayah,
                      'pddayah'                 => $pddayah,
                      'pekerjaanayah'           => $pekerjaanayah,
                      'nikibu'                  => $nikibu,
                      'namaibu'                 => $namaibu,
                      'pddibu'                  => $pddibu,
                      'pekerjaanibu'            => $pekerjaanibu,
                      'penghasilan'             => $penghasilan,
                      'bidangprestasi'          => $bidangprestasi,
                      'tingkatprestasi'         =>$tingkatprestasi,
                      'peringkatprestasi'       =>$peringkat,
                      'tahun'                   =>$tahun,
                     




                   );

        $this->db->update('pendaftar',$data,array('nisn'=>$nisn));
    }



   

    function upload_foto($data){
       $nisn = $this->session->userdata('nisn');
       $this->db->update('pendaftar',$data,array('nisn'=>$nisn));
       return TRUE;
    }
	
	
	function upload_fotoadmin($data){
       $nisn = $this->input->post('nisn');
       $this->db->update('pendaftar',$data,array('nisn'=>$nisn));
       return TRUE;
    }
	
	
	function hapus_daftar($no_daftar){
		
		$this->db->delete('pendaftar',array('no_daftar'=>$no_daftar));
		$this->db->delete('konfirmasi_bayar',array('no_daftar'=>$no_daftar));
		
	}


}
