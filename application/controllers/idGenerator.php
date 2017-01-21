<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IdGenerator extends CI_Controller {

	function generateIdSupplier(){
		$this->load->model('supplierModel');
		$this->db->limit(1);
		$this->db->order_by('id','DESC');
		$getId = $this->db->get('supplier');
		
		foreach ($getId->result_array() as $row){
			$id = $row['id'];
		}

		$hasil = "Ngaco";
		$idExp=explode("-", $id);
		if($idExp[1] < 9){
			$ee = $idExp[1] + 1;
			$hasil ="SP-000$ee";
		}else if($idExp[1] > 8 && $idExp[1] < 99){
			$ee = $idExp[1] + 1;
			$hasil ="SP-00$ee";
		}else if($idExp[1] > 98&& $idExp[1] < 999){
			$ee = $idExp[1] + 1;
			$hasil ="SP-0$ee";
		}else if($idExp[1] == null){
			$hasil ="SP-0001";
		}
		else{
			$ee = $idExp[1] + 1;
			$hasil ="SP-$ee";
		}
		
		return $hasil;
	}
}