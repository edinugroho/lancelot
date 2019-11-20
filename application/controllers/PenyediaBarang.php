<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['role']!='penyedia') {
			redirect('LoginPenyediaBarang');
		}
		$this->load->model('BarangM');
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
	public function tambahBarangAction()
	{
		$this->form_validation->set_rules('namaBarang', 'namaBarang', 'trim|required');
		$this->form_validation->set_rules('jenisBarang', 'jenisBarang', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		$this->form_validation->set_rules('kelipatanHarga', 'kelipatanHarga', 'trim|required');
		$this->form_validation->set_rules('waktuPelelangan', 'waktuPelelangan', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$namaBarang = $this->input->post('namaBarang');
			$jenisBarang = $this->input->post('jenisBarang');
			$deskripsi = $this->input->post('deskripsi');
			$kelipatanHarga = $this->input->post('kelipatanHarga');
			$waktuPelelangan = $this->input->post('waktuPelelangan');
			$data = [
				'namaBarang' => $namaBarang,
				'jenisBarang' => $jenisBarang,
				'deskripsi' => $deskripsi,
				'kelipatanHarga' => $kelipatanHarga,
				'waktuPelelangan' => $waktuPelelangan
			];
			// $this->BarangM->addBarang($data);
			print_r($data);
		} else {
			echo "string";
		}
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file PenyediaBarang.php */
/* Location: ./application/controllers/PenyediaBarang.php */