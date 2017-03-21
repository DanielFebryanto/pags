<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Ajax {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}
	function loadMisc(){
		$data['current_url']=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
            //$return_url = base64_decode($_POST["return_url"]);
		return $data;
	}
	function index(){
		$data['title'] = 'Dashboard';
		$this->template->display('home',$data);
	}
	
	
}