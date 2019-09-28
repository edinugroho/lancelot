<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaBarang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($_SESSION['role']!='penyedia') {
			redirect('LoginPenyediaBarang');
		}
	}
	public function index()
	{
		$this->load->view('PenyediaBarang/dashboard');
	}
	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}

}

/* End of file PenyediaBarang.php */
/* Location: ./application/controllers/PenyediaBarang.php */