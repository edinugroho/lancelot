<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PenyediaBarangM');
	}
	public function penyediaBarang()
	{
		$data["title"] = "Daftar Penyedia Barang";
		$this->load->view('header',$data);
		$this->load->view('PenyediaBarang/register');
	}

	public function daftarPenyediaBarang()
	{
		$this->load->library('form_validation');
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
					'password' => $password
				];
				$this->PenyediaBarangM->addPenyediaBarang($data);
				$this->session->set_flashdata('akunBerhasilDibuat', "<script>Swal.fire('Akun Berhasil Dibuat','Silahkan Login untuk langsung memulai transaksi','success')</script>");
				$data["title"] = "Daftar Penyedia Barang";
				$this->load->view('header',$data);
				$this->load->view('PenyediaBarang/register');
			}
		} else {
			echo validation_errors();
		}
	}
}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */