<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PenyediaBarangM');
		$this->load->model('PenawarM');
		$this->load->library('form_validation');
	}
	public function penyediaBarang()
	{
		$data["title"] = "Daftar Penyedia Barang";
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/register');
	}

	public function daftarPenyediaBarang()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'e-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cekUsername = $this->PenyediaBarangM->cekUsername($username);
			if ($cekUsername > 0) {
				$this->session->set_flashdata('usernameInvalid', 'Username Sudah Terdaftar');
				$data["title"] = "Daftar Penyedia Barang";
				$this->load->view('header',$data);
				$this->load->view('PenyediaBarang/register');
			}else{
				$data = [
					'username'  => $username,
					'email' => $email,
					'password' => md5($password)
				];
				$this->PenyediaBarangM->addPenyediaBarang($data);
				$this->session->set_flashdata('akunBerhasilDibuat', "<script>Swal.fire('Akun Berhasil Dibuat','Silahkan Login untuk langsung memulai transaksi','success')</script>");
				$data["title"] = "Daftar Penyedia Barang";
				$this->load->view('header',$data);
				$this->load->view('PenyediaBarang/register');
			}
		} else {
			$data["title"] = "Daftar Penyedia Barang";
			$this->load->view('header',$data);
			$this->load->view('PenyediaBarang/register');
		}
	}
	public function penawar()
		{
			$data["title"] = "Daftar Pelelang";
			$this->load->view('header',$data);
			$this->load->view('Penawar/register');
		}
	public function daftarPenawar()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'e-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$cekUsername = $this->PenawarM->cekUsername($username);
			if ($cekUsername > 0) {
				$this->session->set_flashdata('usernameInvalid', 'Username Sudah Terdaftar');
				$data["title"] = "Daftar Penawar";
				$this->load->view('header',$data);
				$this->load->view('Penawar/register');
			}else{
				$data = [
					'username'  => $username,
					'email' => $email,
					'password' => md5($password)
				];
				$this->PenawarM->addPenawar($data);
				$this->session->set_flashdata('akunBerhasilDibuat', "<script>Swal.fire('Akun Berhasil Dibuat','Silahkan Login untuk langsung memulai transaksi','success')</script>");
				$data["title"] = "Daftar Penawar";
				$this->load->view('header',$data);
				$this->load->view('Penawar/register');
			}
		} else {
			$data["title"] = "Daftar Penawar";
			$this->load->view('header',$data);
			$this->load->view('Penawar/register');
		}
	}
}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */