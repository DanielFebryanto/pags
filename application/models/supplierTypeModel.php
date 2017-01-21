<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SupplierTypeModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('suppliertype', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
			$this->db->trans_commit();
			return  true;
	}

	function edit($clause, $value){
		$this->db->trans_begin();
		
		$this->db->where('suppliertype', $clause);
		
		$this->db->update('suppliertype', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('suppliertype',$clause);
		$delete = $this->db->delete('suppliertype');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('suppliertype');
		return $dep;
	}

	function getByClause($clause){
		$this->db->geselectt('*');
		$this->db->where($clause);
		$dep = $this->db->get('suppliertype');
		return $dep;
	}
}