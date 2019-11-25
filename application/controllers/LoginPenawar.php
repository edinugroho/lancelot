<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginPenawar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginM');
		if (isset($_SESSION['role'])=="penawar") {
			redirect('Penawar');
		}
	}
	public function index()
	{
		$data["title"]="Login Penawar";
		$this->load->view('header', $data);
		$this->load->view('Penawar/login', $data);	
	}
	public function loginAction()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->LoginM->cekPenawar($username, $password);
			if ($cek > 0) {
				$data = $this->LoginM->LoginPenawar($username,$password);
				$dataSession = [
					'username' => $data[0]->username,
					'role' => "penawar"
				];
				$this->session->set_userdata($dataSession);
				print_r($dataSession);
				// redirect(base_url('Penawar'));
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

/* End of file LoginPenawar.php */
/* Location: ./application/controllers/LoginPenawar.php */