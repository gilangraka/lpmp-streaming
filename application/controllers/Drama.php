<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Drama extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
	}


	public function index()
	{
		$data['judul'] = 'Drama';
		$this->load->model('drama/DramaModel');

		//konfigurasi pagination
		$config['base_url'] = base_url('Drama/index');
		$config['total_rows'] = $this->db->where('kategori','Drama')->from("video")->count_all_results(); //total row
		$config['per_page'] = 6;  //show record per halaman
		$config["uri_segment"] = 3;  // uri parameter
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = 'First';
		$config['last_link']        = 'Last';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tagl_close']  = '</span>Next</li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		//panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
		$data['data'] = $this->DramaModel->get_drama_list($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('layout/layout_user/header', $data);
		$this->load->view('layout/layout_user/nav');
		$this->load->view('content/drama', $data);
		$this->load->view('layout/layout_user/footer');
	}

	public function LihatVideo($id)
	{
		$this->load->model('drama/DramaModel');
		$judul = $this->DramaModel->get_id($id)->row();
		$data['data_video'] = $this->DramaModel->get_id($id)->row_array();

		$data['judul'] = $judul->judul;

		$this->load->view('layout/layout_user/header', $data);
		$this->load->view('layout/layout_user/nav');
		$this->load->view('content/lihat_video/drama', $data);
		$this->load->view('layout/layout_user/footer');
	}
}
