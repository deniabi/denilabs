<?php

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
		$this->load->library('session');
		$this->load->helper('url');
	}
	function index()
	{
		$this->load->view("admin/login");
	}
	function validation()
	{
		$x = $this->Madmin->login();
		if($x)
		{
			$session = array('username' => $this->input->post('username'), 'is_logged_in' => true);
			$this->session->set_userdata($session);
			redirect('Site/dashboard');
		}
	}
	
}