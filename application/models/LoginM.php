<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginM extends CI_Model {

	public function login($username, $password){
		return $this->db->query("SELECT * FROM `admin` WHERE `username`='$username' AND `password`=md5('$password')")->result();
	}
}

/* End of file LoginM.php */
/* Location: ./application/models/LoginM.php */