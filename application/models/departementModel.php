<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DepartementModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('departement', $value);
		
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
		
		$this->db->where('departement', $clause);
		
		$this->db->update('departement', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('departement',$clause);
		$delete = $this->db->delete('departement');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('departement');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('departement');
		return $dep;
	}
}