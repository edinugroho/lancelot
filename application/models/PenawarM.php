<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenawarM extends CI_Model {

	public function getPenawar()
	{
		return $this->db->query("SELECT * FROM `penawar`")->result();
	}
	public function getPenawarById($id){
		return $this->db->query("SELECT * FROM `penawar` WHERE `id_penawar`= $id")->result();	
	}
	public function getAllJumlahPenawar()
	{
		return $this->db->query("SELECT * FROM `penawar`")->num_rows();
	}
	public function getIdPenawar($username)
	{
		return $this->db->query("SELECT `id_penawar` FROM `penawar` WHERE `username`='$username'")->result();
	}
	public function cekUsername($username)
	{
		return $this->db->query("SELECT * FROM `penawar` WHERE `username`='$username'")->num_rows();
	}
	public function addPenawar($data)
	{
		return $this->db->query("INSERT INTO `penawar`(`username`,`email`, `password`) VALUES ('".$data['username']."','".$data['email']."','".$data['password']."')");
	}

}

/* End of file PenawarM.php */
/* Location: ./application/models/PenawarM.php */