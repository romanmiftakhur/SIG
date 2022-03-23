<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) 
		{
			$this->load->view('login/index');
		}else{
			$auth = $this->model_auth->cek_login();

			if ($auth == false) {
				redirect('login');
			}else{
				$this->session->set_userdata('username',$auth->username);

				redirect('dashboard');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
