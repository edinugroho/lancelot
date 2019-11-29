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
		$this->load->model('PenawarM');
		$this->load->model('TawarM');
	}

	public function index()
	{
		$data['title'] = 'Admin Dashboard';
		$data['jumlahBarang'] = $this->BarangM->getAllJumlahBarang();
		$data['jumlahPenyediaBarang'] = $this->PenyediaBarangM->getAllJumlahPenyediaBarang();
		$data['jumlahPenawar'] = $this->PenawarM->getAllJumlahPenawar();
		$data['jumlahPelelangan'] = 1;
		$data['lelang'] = $this->TawarM->getAllLastBid();
		// date('Y-m-d');
		foreach ($data['lelang'] as $j) {
			$id_barang = $j->id_barang;	
			$id_penawar = $j->id_penawar;
		}
		$data['bidBarang'] = $this->BarangM->getBarangById($id_barang);
		$data['bidPenawar'] = $this->PenawarM->getPenawarById($id_penawar);
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
	public function viewDataPenawar()
	{
		$data['title'] = 'Lihat Data Penawar';
		$data['penawar'] = $this->PenawarM->getPenawar();
		$this->load->view('header',$data);
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/viewDataPenawar',$data);
	}
	public function viewDataPenlelangan()
	{
		$data['title'] = 'Lihat Data Pelelangan';
		$this->load->view('header',$data);
	}
	public function detailPenyediaBarang($id)
	{
		$data['penyediaBarang'] = $this->PenyediaBarangM->getPenyediaBarangById($id);
		echo "<pre>";
		print_r($data['penyediaBarang']);
	}
	public function detailPenawar($id)
	{
		$data['penawar'] = $this->PenawarM->getPenawarById($id);
		echo "<pre>";
		print_r($data['penawar']);
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
	public function detailBarang($id)
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