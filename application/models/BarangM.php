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
	public function getBarangDiterima(){
		return $this->db->query("SELECT * FROM `barang` WHERE `statusBarang`='diterima'")->result();
	}
	public function getBarangById($id){
		return $this->db->query("SELECT * FROM `barang` WHERE `id_barang`= $id")->result();	
	}
	public function ubahStatusBarangDitolak($id){
		return $this->db->query("UPDATE `barang` SET `statusBarang` = 'ditolak' WHERE `barang`.`id_barang` = $id");
	}
	public function ubahStatusBarangDiterima($id){
		return $this->db->query("UPDATE `barang` SET `statusBarang` = 'diterima' WHERE `barang`.`id_barang` = $id");
	}
	public function addBarang($data)
	{
		$q = $this->db->query("INSERT INTO `barang` (`namaBarang`, `jenisBarang`, `deskripsi`, `statusBarang`, `bukaHarga`, `kelipatanHarga`, `hargaSekarang`, `waktuPelelangan`, `gambar`) VALUES ('".$data['namaBarang']."','".$data['jenisBarang']."','".$data['deskripsi']."','','".$data['bukaHarga']."','".$data['kelipatanHarga']."','0','".$data['waktuPelelangan']."','".$data['gambar']."')");
		return $q;
	}
}
/* End of file BarangM.php */
/* Location: ./application/models/BarangM.php */