<?php

class Model_gelombang extends CI_Model{



    function tampilgelombang(){

        $this->db->order_by('id_gel','DESC');
        return $this->db->get('gelombang');


    }
	
	
	function tampil_ta(){
		$this->db->group_by('tahun_ajaran');
        $this->db->order_by('id_gel','DESC');
        return $this->db->get('gelombang');


    }

    function insertgelombang(){

        $gelombang    = $this->input->post('gelombang');
        $tgl_mulai    = $this->input->post('tgl_mulai');
        $tgl_selesai  = $this->input->post('tgl_selesai');
        $tgl_test     = $this->input->post('tgl_test');
		$biaya_daftar = $this->input->post('biaya_daftar');
        $tahunajaran  = $this->input->post('tahunajaran');

        $data = array(

                'gelombang'    => $gelombang,
                'tgl_mulai'    => $tgl_mulai,
                'tgl_selesai'  => $tgl_selesai,
                'tgl_test'     => $tgl_test,
                'tahun_ajaran' => $tahunajaran,
				'biaya_daftar' => $biaya_daftar



        );


        $this->db->insert('gelombang',$data);




    }
	
	
	
	function get_gelombang($idgel){
		
		return $this->db->get_where('gelombang',array('id_gel'=>$idgel));
		



	}
	
	
	function hapus_gel($id_gel){
		
		$this->db->delete('gelombang',array('id_gel'=>$id_gel));
		
		
	}

}
