<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenyediaBarangM extends CI_Model {
	public function getIdPenyediaBarang($username)
	{
		return $this->db->query("SELECT `id_penyedia` FROM `penyedia_barang` WHERE `username`='$username'")->result();
	}
}

/* End of file PenyediaBarangM.php */
/* Location: ./application/models/PenyediaBarangM.php */