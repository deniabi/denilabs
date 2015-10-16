<?php

class Mhome extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}
	public function kategori()
	{
		$query = $this->db->get('kategori');
		return $query->result();
	}
	public function kategoriID()
	{
		$this->db->select('idkategori');
		$this->db->where('idkategori', 1);
		$kat = $this->db->get('kategori');
		return $kat->result();
	}
	
}