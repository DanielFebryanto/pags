<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrxTypeModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('trxtype', $value);
		
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
		
		$this->db->where('trxtype', $clause);
		
		$this->db->update('trxtype', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause, $value){
		$this->db->trans_begin();
		
		$this->db->where($clause);
		
		$this->db->update('trxtype', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function getAll(){
		$dep = $this->db->get('trxtype');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('trxtype');
		return $dep;
	}
}