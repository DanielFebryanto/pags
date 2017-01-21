<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}

    
	
	function index(){
		$this->load->model('karyawanModel');
		$data['title'] = 'list of Employee';
        $clause = array(
            'karyawan.idstatus'=>11110
        );
		$data['Emp'] = $this->karyawanModel->getByClause($clause);
		$this->template->display('table/tableKaryawan',$data);
	}

    function create(){
		$this->load->model('departementModel');
		$data['title'] = 'Create New Employee';
		$data['Dep'] = $this->departementModel->getAll();
		$this->template->display('form/formKaryawan',$data);
	}
	
	function edit($id){
		$this->load->model('karyawanModel');
		$this->load->model('departementModel');
		$value = array(
			'idkaryawan' => $id
		);
		$data['title'] = 'Edit Karyawan';
		$data['Dep'] = $this->departementModel->getAll();
		$data['Emp'] = $this->karyawanModel->getByClause($value);
		$this->template->display('form/formKaryawanUpdate',$data);
	}
	
	function save(){
		$this->load->model('karyawanModel');
		$value = array (
			'idstatus' => 11110,
			'idposisi' => $_POST ['pos'],
			'namapanjang' => $_POST ['nama'],
			'email' => $_POST ['email'],
			'password' => $_POST ['email'],
			'alamat' => $_POST ['alamat'],
			'gender' => $_POST ['gender'],
			'kontak' => $_POST ['kontak'] 
		);
		$insert = $this->karyawanModel->save($value);

		if($insert){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
		redirect('employee/create');
	}
	
	function update(){
		$this->load->model('karyawanModel');
        $clause = array(
            'idkaryawan'=>$_POST['id']
        );
		$value = array (
			'idstatus' => 11110,
			'idposisi' => $_POST ['pos'],
			'namapanjang' => $_POST ['nama'],
			'email' => $_POST ['email'],
			'password' => $_POST ['email'],
			'alamat' => $_POST ['alamat'],
			'gender' => $_POST ['gender'],
			'kontak' => $_POST ['kontak'] 
		);
		$insert = $this->karyawanModel->edit($clause, $value);

		if($insert){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
		redirect('employee/');
	}
	
	function delete($id){
		$this->load->model('karyawanModel');
        $clause = array(
            'idkaryawan'=>$id
        );
        $value = array(
            'idstatus'=>11111
        );
        $del = $this->karyawanModel->delete($clause, $value);
        
        $this->session->set_flashdata('success', 'Data Telah Terhapus');
        
		redirect('employee/');
	}

}