<?php

class model_operator extends CI_Model{



    function loginadmin($username,$password){

        $check      = $this->db->get_where('operator',array('username'=>$username,'password'=>md5($password)));
        return      $check;


    }






    function tampilkandata(){

        return $this->db->get('operator');

    }


    function insertdata(){

        $nama_lengkap = $this->input->post('nama_lengkap');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');

        $data        = array(

                            'nama_lengkap'=>$nama_lengkap,
                            'username'    =>$username,
                            'password'    =>md5($password)

                        );
        $this->db->insert('operator',$data);


    }


     function updatedata($id){

        $nama_lengkap = $this->input->post('nama_lengkap');
        $username     = $this->input->post('username');
        $password     = $this->input->post('password');

        $data        = array(

                            'nama_lengkap'=>$nama_lengkap,
                            'username'    =>$username,
                            'password'    =>md5($password)

                        );
        $this->db->where(array('operator_id'=>$id));
        $this->db->update('operator',$data);


    }



    function hapusdata($id){

        $this->db->where(array('operator_id'=>$id));
        $this->db->delete('operator');


    }


    function getdata($id){


            $this->db->where(array('operator_id'=>$id));
            return $this->db->get('operator');
    }

}
