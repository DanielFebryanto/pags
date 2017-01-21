<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('produk', $value);
		
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
		
		$this->db->where($clause);
		
		$this->db->update('produk', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function delete($clause, $value){
		$this->db->trans_begin();
		
		$this->db->where($clause);
		
		$this->db->update('produk', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}

	function getAll(){
		$this->db->join('produkkat','produkkat.idprodukkat = produk.idprodukkat');
		$this->db->join('status','status.idstatus = produk.idstatus');
		$dep = $this->db->get('produk');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$this->db->join('produkkat','produkkat.idprodukkat = produk.idprodukkat');
		$this->db->join('status','status.idstatus = produk.idstatus');
		$dep = $this->db->get('produk');
		return $dep;
	}
}