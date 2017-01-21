<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KaryawanModel extends CI_Model {
	function save($value){
		$this->db->trans_begin();
		
		$this->db->insert('karyawan', $value);
		
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
		
		$this->db->update('karyawan', $value);
		
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
		
		$this->db->update('karyawan', $value);
		
		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			return  false;
		}
		$this->db->trans_commit();
		return  true;
	}
	function getAll(){
		$this->db->join('posisi', 'posisi.idposisi = karyawan.idposisi');
		$this->db->join('departement', 'departement.iddepartement = posisi.iddepartement');
		$dep = $this->db->get('karyawan');
		return $dep;
	}

	function getByClause($clause){
		$this->db->select('*');
		$this->db->where($clause);
		$this->db->join('posisi', 'posisi.idposisi = karyawan.idposisi');
		$this->db->join('departement', 'departement.iddepartement = posisi.iddepartement');
		$dep = $this->db->get('karyawan');
		return $dep;
	}
}