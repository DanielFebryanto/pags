<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationTypeModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('notificationtypes', $value);
		
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
		
		$this->db->where('notificationtypes', $clause);
		
		$this->db->update('notificationtypes', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('notificationtypes',$clause);
		$delete = $this->db->delete('notificationtypes');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('notificationtypes');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('notificationtypes');
		return $dep;
	}
}