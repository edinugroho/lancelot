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
		$this->load->model('PenyediaBarangM');
	}

	public function index()
	{
		$data['title'] = 'Admin Dashboard';
		$data['jumlahBarang'] = $this->BarangM->getAllJumlahBarang();
		$data['jumlahPenyediaBarang'] = $this->PenyediaBarangM->getAllJumlahPenyediaBarang();
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
	public function viewDataPenyedia()
	{
		$data['title'] = 'Lihat Data Penyedia Barang';
		$data['penyediaBarang'] = $this->PenyediaBarangM->getPenyediaBarang();
		$this->load->view('header',$data);
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/viewDataPenyediaBarang',$data);
	}
	public function getDataBarangById($id)
	{
		$data = $this->BarangM->getBarangById($id);
		json_encode($data);
	}
	public function ubahStatusBarangDitolak($id)
	{
		$this->BarangM->ubahStatusBarangDitolak($id);
		redirect('Admin/viewDataBarang');
	}
	public function ubahStatusBarangDiterima($id)
	{
		$this->BarangM->ubahStatusBarangDiterima($id);
		redirect('Admin/viewDataBarang');
	}
	public function detailBarangbyId($id)
	{
		$data['barang'] = $this->BarangM->getBarangById($id);
		echo "<pre>";
		print_r($data['barang']);
	}
	public function logout()
	{
		session_destroy();
		redirect('Login');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */