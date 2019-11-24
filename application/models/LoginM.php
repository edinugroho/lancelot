<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model {

	public function login($username, $password){
		return $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`=md5('$password')")->result();
	}
	public function loginPenyedia($username, $password){
		return $this->db->query("SELECT * FROM `penyedia_barang` WHERE `username`='$username' AND `password`=md5('$password')")->result();
	}
	public function cekPenyedia($username, $password)
	{
		return $this->db->query("SELECT * FROM `penyedia_barang` WHERE `username`='$username' AND `password`=md5('$password')")->num_rows();
	}
	public function loginPenawar($username, $password){
		return $this->db->query("SELECT * FROM `penawar` WHERE `username`='$username' AND `password`=md5('$password')")->result();
	}
	public function cekPenawar($username, $password){
		return $this->db->query("SELECT * FROM `penawar` WHERE `username`='$username' AND `password`=md5('$password')")->num_rows();
	}
}

/* End of file LoginM.php */
/* Location: ./application/models/LoginM.php */