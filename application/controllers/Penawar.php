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