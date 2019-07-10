<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangM extends CI_Model {

	public function getJumlahBarang(){
		// return $this->db->query("SELECT id_barang FROM `barang`")->count_all_results();
		return $this->db->count_all('barang');
	}
	public function getBarang(){
		// $this->db->select('*');
		// $query = $this->db->get('barang');
		// return $query;
		return $this->db->query("SELECT * FROM `barang`")->result();
	}

}

/* End of file BarangM.php */
/* Location: ./application/models/BarangM.php */