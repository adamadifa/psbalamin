<?php

class Model_provinsi extends CI_Model{


    function provinsi(){


    $this->db->order_by('name','ASC');
    $provinces= $this->db->get('provinces');
    return $provinces;


    }

    function kabupaten($provId){

        $kabupaten="<option value='0'>-- Pilih Kabupaten --</pilih>";

        $this->db->order_by('name','ASC');
        $kab= $this->db->get_where('regencies',array('province_id'=>$provId));

        foreach ($kab->result_array() as $data ){
        $kabupaten.= "<option value='$data[id]'>$data[name]</option>";
        }

        return $kabupaten;

     }



     function kecamatan($kabId){
        $kecamatan="<option value='0'>-- Pilih Kecamatan --</pilih>";

        $this->db->order_by('name','ASC');
        $kec= $this->db->get_where('districts',array('regency_id'=>$kabId));

        foreach ($kec->result_array() as $data ){
        $kecamatan.= "<option value='$data[id]'>$data[name]</option>";
        }

        return $kecamatan;
    }

    function kelurahan($kecId){

        $kelurahan="<option value='0'>-- Pilih Kelurahan --</pilih>";

        $this->db->order_by('name','ASC');
        $kel= $this->db->get_where('villages',array('district_id'=>$kecId));

        foreach ($kel->result_array() as $data ){
        $kelurahan.= "<option value='$data[id]'>$data[name]</option>";
        }

        return $kelurahan;
    }
	
	
	
	function get_provinsi($idprovinsi){
		
		return $this->db->get_where('provinces',array('id'=>$idprovinsi));
	}
	
	function get_kabupaten($idkabupaten){
		
		return $this->db->get_where('regencies',array('id'=>$idkabupaten));
	}
	
	function get_kecamatan($idkecamatan){
		
		return $this->db->get_where('districts',array('id'=>$idkecamatan));
	}
	
	function get_kelurahan($idkelurahan){
		
		return $this->db->get_where('villages',array('id'=>$idkelurahan));
	}

 }
