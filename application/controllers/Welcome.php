<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangM');
	}
	public function index()
	{
		$data['title'] = "Daftar Barang";
		if (!isset($_SESSION['username'])) {
			$this->load->view('header',$data);
			$this->load->view('nav');
			$data['barang']= $this->BarangM->getBarangDiterima();
			$this->load->view('home',$data);
		}else{
			$this->load->view('header',$data);
			$data['barang']= $this->BarangM->getBarangDiterima();
			$this->load->view('home',$data);
		}
	}
	public function tes()
	{
		$this->load->view('header');
		$this->load->view('login');
	}
}
