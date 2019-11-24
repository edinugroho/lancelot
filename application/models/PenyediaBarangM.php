<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaBarangM extends CI_Model {
	public function getIdPenyediaBarang($username)
	{
		return $this->db->query("SELECT `id_penyedia` FROM `penyedia_barang` WHERE `username`='$username'")->result();
	}
	public function cekUsername($username)
	{
		return $this->db->query("SELECT * FROM `penyedia_barang` WHERE `username`='$username'")->num_rows();
	}
	public function addPenyediaBarang($data)
	{
		return $this->db->query("INSERT INTO `penyedia_barang`(`username`,`email`, `password`) VALUES ('".$data['username']."','".$data['email']."','".$data['password']."')");
	}
}

/* End of file PenyediaBarangM.php */
/* Location: ./application/models/PenyediaBarangM.php */