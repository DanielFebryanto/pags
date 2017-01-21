<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('members', $value);
		
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
		
		$this->db->where('members', $clause);
		
		$this->db->update('members', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('members',$clause);
		$delete = $this->db->delete('members');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('members');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('members');
		return $dep;
	}
}