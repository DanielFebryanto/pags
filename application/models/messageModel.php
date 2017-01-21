<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MessageModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('messages', $value);
		
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
		
		$this->db->where('messages', $clause);
		
		$this->db->update('messages', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('messages',$clause);
		$delete = $this->db->delete('messages');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('messages');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('messages');
		return $dep;
	}
}