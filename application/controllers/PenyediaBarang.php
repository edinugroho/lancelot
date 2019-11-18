<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['role']!='penyedia') {
			redirect('LoginPenyediaBarang');
		}
	}
	public function index()
	{
		$data["title"] = "Dashboard Penyedia Barang";
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/dashboard');
	}
	public function tambahBarang()
	{
		$data["title"] = "Tambah Barang";
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/tambahBarang');
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file PenyediaBarang.php */
/* Location: ./application/controllers/PenyediaBarang.php */