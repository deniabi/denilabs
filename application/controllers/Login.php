<?php

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function index()
	{
		$data['dynamiccontent'] = 'login';
		$this->load->view('templates/template', $data);
	}
	function validate_login()
	{
		$this->load->model('Memberlist');
		$q = $this->Memberlist->validasi();
		if ($q) {
			$session = array('username' => $this->input->post('username'), 'is_logged_in' => true );
			$this->session->set_userdata($session);
			redirect('Site/dashboard');
		}
		else
		{
			$this->index();
		}
	}
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if ($is_logged_in) {
			redirect('Site/dashboard');
		}
	}
	function signup()
	{
		$data['dynamiccontent'] = 'registrasi';
		$this->load->view('templates/template', $data);
	}
	function reguser()
	{
		$this->load->model('Registrasi');
	}
}