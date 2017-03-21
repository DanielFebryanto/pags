<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}
    function index(){
        $this->load->model('statusModel');
        $data['status'] = $this->statusModel->getAll();
        $data['title'] = 'Status Table';
		$this->template->display('home',$data);
	
    }

    function get(){
        
    }
    
    function create(){
        $data['title'] = 'Status Form';
		$this->template->display('form/formStatus',$data);
    }

    function update(){

    }

    function delete(){

    }
}