<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{           
	            
                          
                $data['title'] = 'Halaman PSB Online Pesantren Persis Al Amin Sindangkasih';
		        $this->template->load('template','welcome_message',$data);
	}
	
	
	public function panduan()
	{
            
                $data['title'] = 'Panduan Pendaftaran Online Pesantren Persis Al Amin Sindangkasih';
		        $this->template->load('template','panduan',$data);
	}
	
	public function brosur()
	{
            
                $data['title'] = 'Brosur Pendaftaran Persis Al Amin Sindangkasih';
		        $this->template->load('template','brosur',$data);
	}
}
