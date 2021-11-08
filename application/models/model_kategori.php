<?php

class Model_kategori extends CI_Model{
    
    
    
    
    function tampilkategori(){
        
        
        return $this->db->get('kategori_barang');
        
    }
    
    
   function inputkategori(){
       
       $nama_kategori = $this->input->post('nama_kategori');
       $data          = array('nama_kategori'=>$nama_kategori);
       $this->db->insert('kategori_barang',$data);
       
   }
    
   function editkategori($id){
       
      return $this->db->get_where('kategori_barang',array('kategori_id'=>$id));
       
       
   }
   
   
   function updatekategori($id){
       
       $nama_kategori   =   $this->input->post('nama_kategori');
       $data = array(
           
           'nama_kategori' => $nama_kategori
       );
       
       return $this->db->update('kategori_barang',$data,array('kategori_id'=>$id));
       
   }
   
   
   
   function deletekategori($id){
       
       
       return $this->db->delete('kategori_barang',array('kategori_id'=>$id));
       
       
   }
    
}