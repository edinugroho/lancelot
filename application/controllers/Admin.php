<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['username']!='admin') {
			redirect('Login');
		}
		$this->load->model('BarangM');
	}

	public function index()
	{
		$data['title'] = 'Admin Dashboard';
		$data['jumlahBarang'] = $this->BarangM->getJumlahBarang();
		$this->load->view('header',$data);
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/dashboard');
	}
	public function viewDataBarang()
	{
		$data['title'] = 'Lihat Data Barang';
		// $data['jumlahBarang'] = $this->BarangM->getJumlahBarang();data barang
		$data['barang'] = $this->BarangM->getBarang();
		$this->load->view('header',$data);
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/viewDataBarang',$data);
	}
	public function logout()
	{
		session_destroy();
		redirect('Login');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */