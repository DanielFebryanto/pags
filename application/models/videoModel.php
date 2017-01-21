<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VideoModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('videos', $value);
		
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
		
		$this->db->where('videos', $clause);
		
		$this->db->update('videos', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('videos',$clause);
		$delete = $this->db->delete('videos');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('videos');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('videos');
		return $dep;
	}
}