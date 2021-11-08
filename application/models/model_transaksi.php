<?php

class  Model_transaksi extends CI_Model{
    
    
    
    
    function inputdetailtransaksi(){
        
        $namabarang = $this->input->post('nama_barang');
        $qty        = $this->input->post('qty');
        
        $id_barang  = $this->db->get_where('barang',array('nama_barang'=>$namabarang)); 
        
        $data = array(
            
            'barang_id' => $id_barang['brang_id'],
            'qty'       => $qty,
            'harga'     => $id_barang['harga']
                
                
            
            
        );
        
        $this->db->insert('transaksi_detail',$data);
    }
    
    
    function tampildetail(){
        
        
        return $this->db->get_where('transaksi_detail',array('status'=>'0'));
        
    }
    
}