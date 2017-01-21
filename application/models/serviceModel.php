<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ServiceModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('services', $value);
		
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
		
		$this->db->where('services', $clause);
		
		$this->db->update('services', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('services',$clause);
		$delete = $this->db->delete('services');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('services');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('services');
		return $dep;
	}
}