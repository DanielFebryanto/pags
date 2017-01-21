<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('menus', $value);
		
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
		
		$this->db->where('menus', $clause);
		
		$this->db->update('menus', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause){
		$this->db->where('menus',$clause);
		$delete = $this->db->delete('menus');
		return null;
	}

	function getAll(){
		$dep = $this->db->get('menus');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$dep = $this->db->get('menus');
		return $dep;
	}
}