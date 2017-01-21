<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommentModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('comments', $value);
		
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
		
		$this->db->where('comments', $clause);
		
		$this->db->update('comments', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('comments',$clause);
		$delete = $this->db->delete('comments');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('comments');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('comments');
		return $dep;
	}
}