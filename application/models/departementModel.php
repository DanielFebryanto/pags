<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartementModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('departements', $value);
		
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
		
		$this->db->where('departements', $clause);
		
		$this->db->update('departements', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('departements',$clause);
		$delete = $this->db->delete('departements');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('departements');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('departements');
		return $dep;
	}
}