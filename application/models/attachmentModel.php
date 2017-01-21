<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AttachmentModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('attachments', $value);
		
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
		
		$this->db->where('attachments', $clause);
		
		$this->db->update('attachments', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('attachments',$clause);
		$delete = $this->db->delete('attachments');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('attachments');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('attachments');
		return $dep;
	}
}