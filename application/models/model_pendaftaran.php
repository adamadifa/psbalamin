<?php

class model_pendaftaran extends CI_Model{



function get_nomordaftar($tingkat){
	
	$this->db->order_by('no_daftar','DESC');
	$this->db->limit(1);
	return $this->db->get_where('pendaftar',array('tingkat'=>$tingkat));
	
	
	
}


function insertdaftar(){

	$tingkat            = $this->input->post('tingkat');
	if($tingkat==1){
		$kode = "TSN";
	}else{
		$kode = "MLN";
	}
		
	$tahun				= date("Y");
	$nomor_terakhir		= $this->input->post('no_terakhir');
	$no_daftar			= buatkode($nomor_terakhir, $tahun.$kode, 4);
    $nisn               = $this->input->post('nisn');
    $nama_lengkap       = $this->input->post('nama_lengkap');
    $tempat_lahir       = $this->input->post('tempat_lahir');
    $tgl_lahir          = $this->input->post('tgl_lahir');
    $jk                 = $this->input->post('jk');
    $password           = $this->input->post('password');
    $id_gel             = $this->input->post('id_gel');
    $tgl_daftar         = date("Y-m-d");


    $data = array(

            'nisn'          => $nisn,
			'no_daftar'		=> $no_daftar,
            'nama_lengkap'  => $nama_lengkap,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'jk'            => $jk,
            'password'      => $password,
            'id_gel'        => $id_gel,
            'tingkat'       => $tingkat,
            'tgl_daftar'    => $tgl_daftar






    );

    $this->db->insert('pendaftar',$data);


}


function getgelombang(){

    $hariini = date("Y-m-d");
    $query   = "SELECT * FROM gelombang WHERE '$hariini' Between tgl_mulai AND tgl_selesai";
    return $this->db->query($query);



}

function insert_konfirmasibayar(){
	
	$no_daftar   = $this->input->post('no_daftar');
	$daribank	 = $this->input->post('daribank');
	$norek		 = $this->input->post('norek');
	$namapemilik = $this->input->post('namapemilik');
	$bank_tujuan = $this->input->post('bank_tujuan');
	$jmlbayar	 = $this->input->post('jmlbayar');
	$tglbayar	 = $this->input->post('tglbayar');
	
	
	$data = array(
		
		'no_daftar' 	=> $no_daftar,
		'dari_bank'		=> $daribank,
		'norek'			=> $norek,
		'namapemilik'	=> $namapemilik,
		'bank_tujuan'	=> $bank_tujuan,
		'tgl_bayar'		=> $tglbayar,
		'jml_bayar'		=> $jmlbayar,
		'status_bayar'	=> '0'
		
		
	
	
	
	);
	
	$this->db->insert('konfirmasi_bayar',$data);
	
	
	
}





function get_konfirmasibayar($no_daftar){
	
	return $this->db->get_where('konfirmasi_bayar',array('no_daftar'=>$no_daftar));
		
	
}



function listkonfirmasi($tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,nisn,tgl_daftar,nama_lengkap,nohp,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar,gelombang,hasiltest
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar 
			INNER JOIN gelombang ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat='$tingkat'";
		
	return $this->db->query($query);
	
	
	
	
}



function carinamadaftar($namadaftar,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,tgl_daftar,nisn,nama_lengkap,nohp,gelombang,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar,hasiltest
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar 
			INNER JOIN gelombang ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat='$tingkat' AND nama_lengkap like '%$namadaftar%'";
		
	return $this->db->query($query);
		
}


function cari_namadaftar_ta($namadaftar,$ta,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,tgl_daftar,nisn,nama_lengkap,nohp,gelombang,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar,hasiltest
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar 
			INNER JOIN gelombang ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat='$tingkat' AND nama_lengkap like '%$namadaftar%' AND tahun_ajaran='$ta'";
		
	return $this->db->query($query);
		
}


function cari_ta($ta,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,tgl_daftar,nisn,nama_lengkap,nohp,gelombang,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar,hasiltest
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar 
			INNER JOIN gelombang ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat='$tingkat' AND tahun_ajaran='$ta'";
		
	return $this->db->query($query);
		
}

function cariperiode($dari,$sampai,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,nama_lengkap,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar WHERE tingkat='$tingkat' AND tgl_bayar Between '$dari' AND '$sampai'";
		
	return $this->db->query($query);
	
	
	
	
}
function cari_nama_periode($namadaftar, $dari,$sampai,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,nama_lengkap,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar WHERE tingkat='$tingkat' AND tgl_bayar Between '$dari' AND '$sampai' AND nama_lengkap like '%$namadaftar%'";
		
	return $this->db->query($query);
	
	
	
	
}


function update_konfirmasi($nodaftar){
	
	
	$this->db->update('konfirmasi_bayar',array('status_bayar'=>'1'),array('no_daftar'=>$nodaftar));
	
}

function hapus_konfirmasi($nodaftar){
	
	
	$this->db->update('konfirmasi_bayar',array('status_bayar'=>'0'),array('no_daftar'=>$nodaftar));
	
}



function get_pendaftar($no_daftar){
	
	return $this->db->get_where('pendaftar',array('no_daftar'=>$no_daftar));
	
}


function get_datakartu($no_daftar){
	
		$query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,
				alamatsiswa,rtrw,provinsi,kota,kecamatan,kelurahan,
				nohp,foto,tingkat,asalsekolah,pendaftar.id_gel,gelombang,tgl_test,tahun_ajaran 
				FROM pendaftar
				INNER JOIN gelombang
				ON pendaftar.id_gel = gelombang.id_gel WHERE no_daftar ='$no_daftar'";
		return $this->db->query($query);
	
	
}


function update_hasiltest($no_daftar){
	
	
	$hasiltest = $this->input->post('hasiltest');
	
	$data = array(
		
		'hasiltest' => $hasiltest
		
	);
	$this->db->update('konfirmasi_bayar',$data,array('no_daftar'=>$no_daftar));
	
}


function get_jmldaftar($ta,$tingkat,$gel){
	
	$query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
			INNER JOIN gelombang
			ON pendaftar.id_gel = gelombang.id_gel WHERE tahun_ajaran ='$ta' AND tingkat = '$tingkat' AND gelombang='$gel'";
	return $this->db->query($query);
	
	
}


function get_jmljk($ta,$tingkat,$jk){
	
	$query ="SELECT no_daftar,tgl_daftar,nisn,nama_lengkap,tgl_lahir,nohp,pendaftar.id_gel,gelombang,tahun_ajaran FROM pendaftar
			INNER JOIN gelombang
			ON pendaftar.id_gel = gelombang.id_gel WHERE tahun_ajaran ='$ta' AND tingkat = '$tingkat' AND jk='$jk'";
	return $this->db->query($query);
	
	
}


function get_jmlkonfirmasi($ta,$tingkat){
	
	$query="SELECT konfirmasi_bayar.no_daftar,nisn,tgl_daftar,nama_lengkap,nohp,tingkat,dari_bank,norek,namapemilik,bank_tujuan,tgl_bayar,jml_bayar,status_bayar,gelombang,hasiltest
			FROM konfirmasi_bayar
			INNER JOIN pendaftar ON konfirmasi_bayar.no_daftar = pendaftar.no_daftar 
			INNER JOIN gelombang ON pendaftar.id_gel = gelombang.id_gel WHERE tingkat='$tingkat' AND tahun_ajaran = '$ta'";
		
	return $this->db->query($query);
	
	
	
	
}










}
