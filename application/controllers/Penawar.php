<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penawar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['role']!='penawar') {
			redirect('LoginPenawar');
		}
	}
	public function index()
	{
		$data["title"] = "Dashboard Penawar";
		// $idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
		// $data['jumlahBarang'] = $this->BarangM->getJumlahBarang($idUser->id_penyedia);
		// $data['jumlahBarangDiterima'] = $this->BarangM->getJumlahBarangDiterima($idUser->id_penyedia);
		$this->load->view('header',$data);
		$this->load->view('Penawar/header');
		$this->load->view('Penawar/dashboard');
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file Penawar.php */
/* Location: ./application/controllers/Penawar.php */