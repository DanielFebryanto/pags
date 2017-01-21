<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function requestPosition($idDep){
		$this->load->model('posisiModel');
		$clause = array('iddepartement'=>$idDep);
		$data['opt'] = $this->posisiModel->getByClause($clause);
		$this->load->view('partial/dropDownPartial', $data);
		
	}

	function getProduk(){
		$this->load->model('produkModel');
		$clause = array(
			'produk.idstatus'=>11110
		);
		$data['produk'] = $this->produkModel->getAll();
		
		foreach($data['produk']->result_array() as $row){
			$ee[] = $row;
		}
		echo json_encode($ee);
	}

}