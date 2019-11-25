<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPenyediaBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginM');
		if (isset($_SESSION['role'])=="penyedia") {
			redirect('PenyediaBarang');
		}
	}
	public function index()
	{
		$data["title"]="Login Penyedia Barang";
		$this->load->view('header', $data);
		$this->load->view('PenyediaBarang/login', $data);
	}
	public function loginAction(){
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->LoginM->cekPenyedia($username, $password);
			if ($cek > 0) {
				$data = $this->LoginM->loginPenyedia($username,$password);
				$dataSession = [
					'username' => $data[0]->username,
					'role' => "penyedia"
				];
				$this->session->set_userdata($dataSession);
				redirect(base_url('PenyediaBarang'));
			}else{
				$this->session->set_flashdata('dataInvalid', "<script>Swal.fire('Error','Username/ Password Tidak Ditemukan','error')</script>");
				$this->index();
			}
		} else {
			// redirect(base_url('Login'));
			$this->index();
		}
	}

}

/* End of file LoginPenyediaBarang.php */
/* Location: ./application/controllers/LoginPenyediaBarang.php */