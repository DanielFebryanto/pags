<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PosisiModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('posisi', $value);
		
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
		
		$this->db->where('posisi', $clause);
		
		$this->db->update('posisi', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('posisi',$clause);
		$delete = $this->db->delete('posisi');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('posisi');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('posisi');
		return $dep;
	}
}