<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function grafik_rusakringan(){
		$this->load->view('v_rusakringan');
	}

	function grafik_rusaksedang(){
		$this->load->view('v_rusaksedang');
	}

	function grafik_rusakberat(){
		$this->load->view('v_rusakberat');
	}

	function grafik_tidakrusak(){
		$this->load->view('v_tidakrusak');
	}

	function maps_tidakrusak(){
        // $this->load->library('googlemaps');
        //     $config=array();
        //     $config['center']="37.4419, -122.1419";
        //     $config['zoom']=17;
        //     $config['map_height']="400px";
        //     $this->googlemaps->initialize($config);
        //     $marker=array();
        //     $marker['position']="37.4419, -122.1419";
        //     $this->googlemaps->add_marker($marker);
        //     $data['map']=$this->googlemaps->create_map();
		//$this->load->view('v_maptidakrusak',$data);
		$this->load->view('v_maptidakrusak');
	}
	
	function maps_rusakringan(){
        // $this->load->library('googlemaps');
        //     $config=array();
        //     $config['center']="37.4419, -122.1419";
        //     $config['zoom']=17;
        //     $config['map_height']="400px";
        //     $this->googlemaps->initialize($config);
        //     $marker=array();
        //     $marker['position']="37.4419, -122.1419";
        //     $this->googlemaps->add_marker($marker);
        //     $data['map']=$this->googlemaps->create_map();
		//$this->load->view('v_maptidakrusak',$data);
		$this->load->view('v_maprusakringan');
	}
	
	function maps_rusaksedang(){
        // $this->load->library('googlemaps');
        //     $config=array();
        //     $config['center']="37.4419, -122.1419";
        //     $config['zoom']=17;
        //     $config['map_height']="400px";
        //     $this->googlemaps->initialize($config);
        //     $marker=array();
        //     $marker['position']="37.4419, -122.1419";
        //     $this->googlemaps->add_marker($marker);
        //     $data['map']=$this->googlemaps->create_map();
		//$this->load->view('v_maptidakrusak',$data);
		$this->load->view('v_maprusaksedang');
	}
	
	function maps_rusakberat(){
        // $this->load->library('googlemaps');
        //     $config=array();
        //     $config['center']="37.4419, -122.1419";
        //     $config['zoom']=17;
        //     $config['map_height']="400px";
        //     $this->googlemaps->initialize($config);
        //     $marker=array();
        //     $marker['position']="37.4419, -122.1419";
        //     $this->googlemaps->add_marker($marker);
        //     $data['map']=$this->googlemaps->create_map();
		//$this->load->view('v_maptidakrusak',$data);
		$this->load->view('v_maprusakberat');
    }

}
