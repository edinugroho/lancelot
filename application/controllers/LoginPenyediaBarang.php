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
			$data = $this->LoginM->loginPenyedia($username,$password);
			if ($data >= 0) {
				$dataSession = [
					'username' => $data[0]->username,
					'role' => "penyedia"
				];
				$this->session->set_userdata($dataSession);
				redirect(base_url('PenyediaBarang'));
			}
		} else {
			// redirect(base_url('Login'));
			$this->index();
		}
	}

}

/* End of file LoginPenyediaBarang.php */
/* Location: ./application/controllers/LoginPenyediaBarang.php */