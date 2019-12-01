<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TawarM extends CI_Model {

	public function addTawar($id)
	{
		return $this->db->query("INSERT INTO `ditawar` (`id_barang`, `id_penawar`) VALUES ('".$id['barang']."', '".$id['penawar']."');");
	}	
	public function getLastBid($idBarang)
	{
		// $row = $this->db->select("*")->limit(1)->order_by('id_tawar',"DESC")->get('ditawar')->row();
		$q = $this->db->query("SELECT `id_penawar` FROM `ditawar` WHERE `id_barang`='$idBarang' ORDER BY `ditawar`.`id_tawar` ASC")->last_row();
		return $q;
	}
	public function getAllLastBid()
	{
		return $this->db->query("SELECT * FROM `ditawar`")->result();
	}
	public function detailPemenang($id)
	{
		return $this->db->query("SELECT * FROM `ditawar` WHERE `id_barang`='$id'")->last_row();
	}
	public function getTawar()
	{
		return $this->db->query("SELECT * FROM `ditawar` ORDER BY `id_tawar`")->result();
	}
}

/* End of file TawarM.php */
/* Location: ./application/models/TawarM.php */