<?php

/**
* 
*/
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhome');
	}
	public function index()
	{
		$x = $this->Mhome->kategori();
		$data['kategori'] = $x;
		$data['content'] = 'home';
		$this->load->view('templates/pages', $data);
	}
	public function kategori()
	{
		$kat = $this->Mhome->kategoriID();
		$data['list'] = $kat;
		$data['content'] = 'kategori';
		$this->load->view('templates/pages', $data);
	}
}