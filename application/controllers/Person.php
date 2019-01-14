<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function index()
	{
		$this->load->view('person');
	}


	function fetch(){
		$this->load->model('person_model');
		$this->person_model->fetch();
	}
}


