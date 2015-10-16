<?php

class Memberlist extends CI_Model
{
	function validasi()
	{
		$q = $this->db->where('username', $this->input->post('username'));
		$w = $this->db->where('password', md5($this->input->post('password')));

		$x = $this->db->get('admin');
		return $x;

		if ($x->num_rows() == 1) {
			return true;
		}
		else
		{
			echo "gagal login";
		}
		
	}
}