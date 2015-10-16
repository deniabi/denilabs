<?php

class Mnews extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function newspost($data)
	{
		
		$this->db->insert('news', $data);
	}
}