<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserRoleModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('userroles', $value);
		
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
		
		$this->db->where('userroles', $clause);
		
		$this->db->update('userroles', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('userroles',$clause);
		$delete = $this->db->delete('userroles');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('userroles');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('userroles');
		return $dep;
	}
}