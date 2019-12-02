<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BarangM extends CI_Model {

	public function getAllJumlahBarang()
	{
		return $this->db->query("SELECT * FROM `barang`")->num_rows();
	}
	public function getJumlahBarang($idUser){
		// return $this->db->query("SELECT * FROM `barang` WHERE `id_penyedia`=1")->result();
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('id_penyedia', $idUser);
		return $this->db->count_all_results();
	}
	public function getJumlahBarangDiterima($idUser){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->where('id_penyedia', $idUser);
		$this->db->where('statusBarang', 'diterima');
		return $this->db->count_all_results();
	}
	public function getBarang(){
		// $this->db->select('*');
		// $query = $this->db->get('barang');
		// return $query;
		return $this->db->query("SELECT * FROM `barang`")->result();
	}
	public function getBarangDiterima(){
		return $this->db->query("SELECT * FROM `barang` WHERE `statusBarang`='diterima' AND `waktuPelelangan`>=CURDATE()")->result();
	}
	public function getBarangDiterimaByPenyedia($id){
		return $this->db->query("SELECT * FROM `barang` WHERE `statusBarang`='diterima' AND `id_penyedia`='$id'")->result();
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
		$q = $this->db->query("INSERT INTO `barang` (`namaBarang`, `jenisBarang`, `deskripsi`, `statusBarang`, `bukaHarga`, `kelipatanHarga`, `hargaSekarang`, `waktuPelelangan`, `gambar`,`id_penyedia`) VALUES ('".$data['namaBarang']."','".$data['jenisBarang']."','".$data['deskripsi']."','pending','".$data['bukaHarga']."','".$data['kelipatanHarga']."','0','".$data['waktuPelelangan']."','".$data['gambar']."','".$data['id_penyedia']."')");
		return $q;
	}
	public function getBid($id)
	{
		return $this->db->query("SELECT * FROM `barang` WHERE `id_barang`='$id';")->row() ;
	}
	public function tambahBid($data)
	{
		return $this->db->query("UPDATE `barang` SET `hargaSekarang` = '".$data['kelipatan']."' WHERE `id_barang` = '".$data['id']."';");	
	}
	public function getJumlahBarangByTanggal($tanggal,$id)
	{
		return $this->db->query("SELECT * FROM `barang` WHERE `waktuPelelangan`<='$tanggal' AND `id_penyedia`=$id")->num_rows();
	}
	public function getBarangByTanggal($tanggal,$id)
	{
		return $this->db->query("SELECT * FROM `barang` WHERE `waktuPelelangan`<='$tanggal' AND `id_penyedia`=$id")->result();
	}
	
}
/* End of file BarangM.php */
/* Location: ./application/models/BarangM.php */