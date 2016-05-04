<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('login/vlogin');
	}

	public function menu()
	{
		$this->load->view('menu');
	}

	public function addactivos()
	{
		$this->load->view('includes/activos/addactivos');
	}
}
