<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('users', $value);
		
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
		
		$this->db->where('users', $clause);
		
		$this->db->update('users', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('users',$clause);
		$delete = $this->db->delete('users');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('users');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('users');
		return $dep;
	}
}