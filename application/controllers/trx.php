<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trx extends CI_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}
    function index(){
		$this->load->model('produkModel');
		$data['title'] = 'Create New Transaction';
		$data['Dep'] = $this->produkModel->getAll();
		$this->template->display('form/formtrx',$data);
	}
	
	function edit(){
		$this->load->model('supplierTypeModel');
		$data['title'] = 'Add New Supplier';
		$data['SupType'] = $this->supplierTypeModel->getAll();
		$this->template->display('form/formtrx',$data);
	}
	
	function create(){
		$this->load->model('produkModel');
		$data['title'] = 'Create New Transaction';
		$data['Dep'] = $this->produkModel->getAll();
		$this->template->display('form/formtrx',$data);
	}

	function save(){
		//
	}
	
	function update(){
		//
	}
	
	function delete(){
		//
	}
}