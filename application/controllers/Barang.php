<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangM');
	}
	public function index()
	{
		$this->load->view('header', $data);
	}
	public function detailBarang($id){
		$data["title"] = 'Detail Barang';
		$data["barang"] = $this->BarangM->getBarangById($id);
		$this->load->view('nav');
		$this->load->view('header', $data);
		$this->load->view('detailBarang', $data);
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */
// if ($_SESSION['username']!='penawar') {
// 	redirect('LoginPenawar');
// } 