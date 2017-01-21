<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdGenerator extends CI_Controller {

	function generateId($key){
		//md5($this->input->post('password'))
		//$this->db->where('password', );
		$f = md5('daniel');
		
		echo $f;
	}
}