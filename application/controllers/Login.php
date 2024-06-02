<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->helper('form');
    }


    public function index()
    {
        $this->load->view('content/content_admin/login');
    }

    public function CekLogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required'  =>  'Username tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required'  =>  'Kata sandi tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('content/content_admin/login');
        } else {
            $this->_logged();
        }
    }

    private function _logged()
    {
        $username      = $this->input->post('username');
        $password   = $this->input->post('password');

        $this->load->model('login/LoginModel');
        $user = $this->LoginModel->CekData($username)->row_array();        
       
        if ($user) {
            if ($password == $user['password']) {
                $data = [
                    'nama'           => $user['nama']
                ];
                $this->session->set_userdata($data);               
					redirect('Dashboard');				
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password anda salah
                    </div>');
                redirect('Login');
            }
        
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username salah
                </div>');
			redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}