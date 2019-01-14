<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->view->load('welcome_message');
	}

	public function editar(){
		$dado['id'] = $this->input->post('id');
		$this->load->view('welcome_message', $dado);
	}
}

