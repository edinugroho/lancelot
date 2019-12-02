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
		$this->load->model('PenyediaBarangM');
		$this->load->model('TawarM');
		$this->load->model('PenawarM');
	}
	public function index()
	{
		$data["title"] = "Dashboard Penyedia Barang";
		$idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
		$data['jumlahBarang'] = $this->BarangM->getJumlahBarang($idUser->id_penyedia);
		$data['jumlahBarangDiterima'] = $this->BarangM->getJumlahBarangDiterima($idUser->id_penyedia);
		$data['barangSelesai'] = $this->BarangM->getJumlahBarangByTanggal(date('Y-m-d'),$idUser->id_penyedia);
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
		$this->form_validation->set_rules('namaBarang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('jenisBarang', 'Jenis Barang', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
		$this->form_validation->set_rules('kelipatanHarga', 'Kelipatan Harga', 'trim|required');
		$this->form_validation->set_rules('bukaHarga', 'Buka Harga', 'trim|required');
		$this->form_validation->set_rules('waktuPelelangan', 'Waktu Pelelangan', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$namaBarang = $this->input->post('namaBarang');
			$jenisBarang = $this->input->post('jenisBarang');
			$deskripsi = $this->input->post('deskripsi');
			$kelipatanHarga = $this->input->post('kelipatanHarga');
			$bukaHarga = $this->input->post('bukaHarga');
			$waktuPelelangan = $this->input->post('waktuPelelangan');
			//upload
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['overwrite'] = TRUE;
			// $config['max_size']  = '100000';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';
			$config['maintain_ratio'] = TRUE;
			$config['width']  = '380';
			$config['height']  = '380';
			$config['file_name'] = '/'.$_SESSION['username'].$namaBarang;
			
			$this->load->library('upload', $config);
			
			// $gambar = $config['file_name'];
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$data['title'] = "gambar error";
				$this->load->view('header',$data);
				$this->load->view('PenyediaBarang/header');
				$this->load->view('PenyediaBarang/tambahBarang');
			}
			else{
				$idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
				$gambar = $this->upload->data('file_name');
				// $ektensi = $this->upload->data('file_ext');
				$data = array('upload_data' => $this->upload->data());
				$data = [
					'namaBarang' => $namaBarang,
					'jenisBarang' => $jenisBarang,
					'deskripsi' => $deskripsi,
					'kelipatanHarga' => $kelipatanHarga,
					'bukaHarga' => $bukaHarga,
					'gambar' => $gambar,
					'id_penyedia' => $idUser->id_penyedia,
					'waktuPelelangan' => $waktuPelelangan,
					'hargaSekarang' => $bukaHarga
				];
				$this->BarangM->addBarang($data);
				$data['title'] = "Sukses tambah barang";
				$this->session->set_flashdata('dataBerhasil', "<script>Swal.fire('Berhasil Tambah Barang','Silahkan tunggu konfirmasi dari admin','success')</script>");
				// echo "<pre>";
				// print_r($data);
				$this->load->view('header',$data);
				$this->load->view('PenyediaBarang/header');
				$this->load->view('PenyediaBarang/tambahBarang');
				// $this->load->view('tambahBarang', $data);
			}
		} else {
			// $this->index();
			// $this->load->view('tambahBarang');
			$data['title'] = "error tambah barang";
			$this->load->view('header',$data);
			$this->load->view('PenyediaBarang/header');
			$this->load->view('PenyediaBarang/tambahBarang');
		}
	}
	public function lihatBarangDiterima()
	{
		$data['title'] = "Data Barang Diterima";
		$idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
		$data['barang']=$this->BarangM->getBarangDiterimaByPenyedia($idUser->id_penyedia);
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/viewDataBarang', $data);
	}
	public function selesaiLelang()
	{
		$data['title']= "Data Barang Selesai Lelang";
		$idUser = $this->PenyediaBarangM->getIdPenyediaBarang($_SESSION['username'])[0];
		$data['barang'] = $this->BarangM->getBarangByTanggal(date('Y-m-d'),$idUser->id_penyedia);
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/viewDataSelesaiLelang', $data);
	}
	public function detailPemenang($id)
	{
		$data['title'] = "Detail Pemenang Lelang";
		$data['cariPemenang']= $this->TawarM->detailPemenang($id);
		$idPenawar = $data['cariPemenang']->id_penawar;
		$data['pemenang'] = $this->PenawarM->getPenawarById($idPenawar);
		$this->load->view('header', $data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/viewDataPemenang', $data);
	}
	public function bidTerahir($id)
	{
		$data['title'] = "Detail penawar bid terakhir";
		$data['cariPemenang']= $this->TawarM->detailPemenang($id);
		$idPenawar = $data['cariPemenang']->id_penawar;
		$data['pemenang'] = $this->PenawarM->getPenawarById($idPenawar);
		$this->load->view('header', $data);
		$this->load->view('PenyediaBarang/header');
		$this->load->view('PenyediaBarang/viewDataPemenang', $data);
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file PenyediaBarang.php */
/* Location: ./application/controllers/PenyediaBarang.php */