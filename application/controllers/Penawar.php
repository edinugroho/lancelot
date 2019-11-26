<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penawar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['role']!='penawar') {
			redirect('LoginPenawar');
		}
		$this->load->model('BarangM');
		$this->load->model('PenawarM');
		$this->load->model('TawarM');
	}
	public function index()
	{
		$data["title"] = "Dashboard Penawar";
		// $idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
		// $data['jumlahBarang'] = $this->BarangM->getJumlahBarang($idUser->id_penyedia);
		// $data['jumlahBarangDiterima'] = $this->BarangM->getJumlahBarangDiterima($idUser->id_penyedia);
		$data['barang']= $this->BarangM->getBarangDiterima();
		$this->load->view('header',$data);
		$this->load->view('Penawar/header');
		$this->load->view('Penawar/dashboard', $data);
	}	
	public function lelang($id)
	{
		$data["title"] = "Lelang";
		$data["barang"] = $this->BarangM->getBarangById($id);
		$this->load->view('header', $data);
		$this->load->view('Penawar/header');
		$this->load->view('Penawar/lelang',$data);
	}
	public function tambahBid($id)
	{
		$bid = $this->BarangM->getBid($id);
		$kelipatan = $bid->hargaSekarang+$bid->kelipatanHarga;
		$data = [
			'id' => $id,
			'kelipatan' => $kelipatan
		];
		$idPenawar = $this->PenawarM->getIdPenawar($_SESSION['username'])[0];
		$dataId = [
			'penawar' => $idPenawar->id_penawar,
			'barang' => $id
		];
		$qUpdate = $this->TawarM->addTawar($dataId);
		$q = $this->BarangM->tambahBid($data);
		if ($q && $qUpdate) {
			$this->session->set_flashdata('bidSuccess', "<script>Swal.fire('Bid Berhasil','Anda Telah memasukan bid sesuai kelipatan','success')</script>");
			$data["title"] = "Bid Sukses";
			$data["barang"] = $this->BarangM->getBarangById($id);
			$this->load->view('header', $data);
			$this->load->view('Penawar/header');
			$this->load->view('Penawar/lelang',$data);
		}else{
			echo "error";
		}
	}
	public function lastBid($idBarang)
	{
		$lb = $this->TawarM->getLastBid($idBarang);
		echo "<pre>";
		print_r($lb);
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file Penawar.php */
/* Location: ./application/controllers/Penawar.php */