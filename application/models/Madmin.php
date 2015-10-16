<?php

class Madmin extends CI_Model
{
	
	public function login()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$ambil = $this->db->get('admin');
		if ($ambil->num_rows() == 1) {
			return true;
		}
	}

}