<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdGenerator extends CI_Controller {

	function generateId($key){
		$toCrypt = md5($key);
		
		return $toCrypt;
	}
}