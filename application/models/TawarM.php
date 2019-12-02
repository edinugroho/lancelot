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
	public function getTawarForAdmin()
	{
		return $this->db->query("
			SELECT barang.id_barang, barang.namaBarang, barang.id_penyedia , barang.hargaSekarang , penawar.username , ditawar.id_tawar, ditawar.id_penawar FROM barang JOIN ditawar ON barang.id_barang = ditawar.id_barang JOIN penawar on penawar.id_penawar = ditawar.id_penawar ORDER BY ditawar.id_tawar"
		)->result();
	}
	public function getTawarForAdminNum()
	{
		return $this->db->query("
			SELECT barang.id_barang, barang.namaBarang, barang.id_penyedia , barang.hargaSekarang , penawar.username , ditawar.id_tawar FROM barang JOIN ditawar ON barang.id_barang = ditawar.id_barang JOIN penawar on penawar.id_penawar = ditawar.id_penawar ORDER BY ditawar.id_tawar"
		)->num_rows();
	}
}

/* End of file TawarM.php */
/* Location: ./application/models/TawarM.php */