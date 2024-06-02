<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	public function index()
	{
		$data['judul'] = 'Home';
		$this->load->model('home/HomeModel');
		$data['drama'] = $this->HomeModel->LihatDrama()->result_array();
		$data['sejarah'] = $this->HomeModel->LihatSejarah()->result_array();
		$data['romance'] = $this->HomeModel->LihatRomance()->result_array();
		$data['dokumenter'] = $this->HomeModel->LihatDokumenter()->result_array();
		$this->load->view('layout/layout_user/header', $data);
		$this->load->view('layout/layout_user/nav');
		$this->load->view('content/home', $data);
		$this->load->view('layout/layout_user/footer');
	}
}
