<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('header',$data);
		$this->load->view('login');
	}
	public function loginAction(){
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		if ($this->form_validation->run() == true) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			echo $username;
		} else {
			// redirect(base_url('Login'));
			// $this->index();
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */