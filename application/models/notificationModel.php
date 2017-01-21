<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('notifications', $value);
		
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
		
		$this->db->where('notifications', $clause);
		
		$this->db->update('notifications', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('notifications',$clause);
		$delete = $this->db->delete('notifications');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('notifications');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('notifications');
		return $dep;
	}
}