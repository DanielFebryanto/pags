<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->library(array('template'));
	}

    function index(){
        $data['title']='Data Produk';
        $this->load->model('produkModel');
        $clause = array(
            'produk.idstatus'=>11118
        );
        $data['produk'] = $this->produkModel->getByClause($clause);

		$this->template->display('table/tableProduk',$data);
    }
    function create(){
        $data['title']='Form Produk';
        $this->load->model('produkKatModel');
        $data['produkKat'] = $this->produkKatModel->getAll();

		$this->template->display('form/formProduk',$data);
    }
    function save(){
        $this->load->model('produkModel');
        $value = array(
            'idprodukkat'=>$_POST['produkKat'],
            'idstatus'=>11118,
            'namaproduk'=>$_POST['namaProduk'],
            'stok'=>$_POST['stok'],
            'harga'=>$_POST['harga']
        );

        $insert = $this->produkModel->save($value);

		if($insert){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
		redirect('produk/create');
    }
    
    function edit($id){
        $data['title']='Form Edit Produk';
        $this->load->model('produkModel');
        $this->load->model('produkKatModel');
        $clause = array(
            'idproduk'=>$id
        );
        $data['produk'] = $this->produkModel->getByClause($clause);
        $data['produkKat'] = $this->produkKatModel->getAll();

		$this->template->display('form/formProdukUpdate',$data);
    }
    function update(){
        $this->load->model('produkModel');
        $clause = array(
            'idproduk'=>$_POST['id']
        );
        $value = array(
            'idprodukkat'=>$_POST['produkKat'],
            'idstatus'=>11118,
            'namaproduk'=>$_POST['namaProduk'],
            'stok'=>$_POST['stok'],
            'harga'=>$_POST['harga']
        );

        $update = $this->produkModel->edit($clause, $value);

		if($update == true){
			$this->session->set_flashdata('success','Data Telah Tersimpan!');
		}else{
			$this->session->set_flashdata('error','Ada Kesalahan!!');
		}
		redirect('produk/');
    }

    function delete($id){
        $this->load->model('produkModel');
        $clause = array(
            'idproduk'=>$id
        );
        $value = array(
            'idstatus'=>11111
        );
        $del = $this->produkModel->delete($clause, $value);
        
        $this->session->set_flashdata('success', 'Data Telah Terhapus');
        
		redirect('produk/');
    }
}