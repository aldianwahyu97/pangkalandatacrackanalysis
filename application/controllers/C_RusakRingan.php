<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_RusakRingan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		
    }
    
	public function grafik_rusakringan(){
		$this->load->view('v_rusakringan');
	}

}