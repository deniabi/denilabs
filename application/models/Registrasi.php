<?php

class Registrasi extends CI_Model
{
	function reg($data)
	{
		$data = array('nama' => $this->input->post('nama'), 'email' => $this->input->post('email'), 'username' => $this->input->post('username'), 'password' => $this->input->post('password'));
		$this->db->insert('user', $data);
		
	}
}