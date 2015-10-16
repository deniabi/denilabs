<?php

/**
* 
*/
class Site extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	function dashboard()
	{
		$data['dynamiccontent'] = 'admin';
		$this->load->view('templates/template', $data);
	}
	function news()
	{
		$this->load->view('news');
	}
	function newsupdate()
	{
		$config = array(
					    'upload_path' => './assets/images/', //lokasi gambar akan di simpan
					    'allowed_types' => 'jpg|jpeg|png|gif', //ekstensi gambar yang boleh di uanggah
					    'file_name' => url_title($this->input->post('gambar')) //nama gambar
					);
		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('gambar'))
			{
				$error = $this->upload->display_errors();
				echo $error;
			}
		else
			{
				$idkategori = $this->input->post('kategori');
				$judul = $this->input->post('judul');
				$isi = $this->input->post('isi');
				$gambar = $this->upload->file_name;

				$data = array(
						'idkategori' => $idkategori,
						'judul' => $judul,
						'isi' => $isi,
						'gambar' => $gambar
						);
				$this->load->model('Mnews');
				$success = $this->Mnews->newspost($data);
				if($success)
					{
						redirect('Site/news');
					}
			}

		
	}
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			redirect('Login/index');
		}
	}
}