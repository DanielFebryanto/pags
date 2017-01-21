<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}
    function loadMisc(){
		$data['current_url']=base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	
            //$return_url = base64_decode($_POST["return_url"]);
		return $data;
	}
    function pembeli(){
        $data['title']='Data Customer';
        $this->load->model('supplierModel');
        $clause = array(
            'supplier.idsuppliertype'=>112,
            'supplier.idstatus'=>11110 //11110 adalah Status Aktif
        );
        $data['supp'] = $this->supplierModel->getByClause($clause);

		$this->template->display('table/tableSupplier',$data);
    }

    function pemasok(){
        $data['title']='Data Pemasok';
        $this->load->model('supplierModel');
        $clause = array(
            'supplier.idsuppliertype'=>111,
            'supplier.idstatus'=>11110 //11110 adalah Status Aktif
        );
        $data['supp'] = $this->supplierModel->getByClause($clause);

		$this->template->display('table/tableSupplier',$data);
    }

    function create(){
        $data['title']='Form Supplier';
        $this->load->model('supplierTypeModel');
        $data['supType'] = $this->supplierTypeModel->getAll();

		$this->template->display('form/formSupplier',$data);
    }
    function save(){
        $this->load->model('supplierModel');
        $value = array(
            'idsuppliertype'=>$_POST['supType'],
            'idstatus'=>11110,
            'namaPT'=>$_POST['nama'],
            'email'=>$_POST['email'],
            'kontak'=>$_POST['kontak'],
            'alamat'=>$_POST['alamat'],
            'tglgabung'=>date("Y-m-d")
        );

        $insert = $this->supplierModel->save($value);

		if($insert){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
		redirect('supplier/create');
    }
    
    function edit($id){
        $data['title']='Form Edit Supllier';
        $this->load->model('supplierModel');
        $this->load->model('supplierTypeModel');
        $app = $this->loadMisc();
        $clause = array(
            'idsupplier'=>$id
        );
		$data['fd'] = $app['current_url'];
        $data['supp'] = $this->supplierModel->getByClause($clause);
        $data['supType'] = $this->supplierTypeModel->getAll();

		$this->template->display('form/formSupllierUpdate',$data);
    }
    function update(){
        $this->load->model('supplierModel');
        $clause = array(
            'idsupplier'=>$_POST['idsup']
        );
        $value = array(
            'idsuppliertype'=>$_POST['supType'],
            'idstatus'=>11110,
            'namaPT'=>$_POST['nama'],
            'email'=>$_POST['email'],
            'kontak'=>$_POST['kontak'],
            'alamat'=>$_POST['alamat'],
        );
        $return_url = base64_decode($_POST["return_url"]);

        $update = $this->supplierModel->edit($clause, $value);

		if($update == true){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
       redirect('supplier/'.$_POST['return_url'].'');
    }

    function delete($id, $return){
        $this->load->model('supplierModel');
        $clause = array(
            'idsupplier'=>$id
        );
        $value = array(
            'idstatus'=>11111
        );
        $del = $this->supplierModel->delete($clause, $value);
        
        $this->session->set_flashdata('success', 'Data Telah Terhapus');
        
		redirect('supplier/'.$return.'');
    }
}