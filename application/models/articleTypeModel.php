<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArticleTypeModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('articletypes', $value);
		
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
		
		$this->db->where('articletypes', $clause);
		
		$this->db->update('articletypes', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('articletypes',$clause);
		$delete = $this->db->delete('articletypes');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('articletypes');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('articletypes');
		return $dep;
	}
}