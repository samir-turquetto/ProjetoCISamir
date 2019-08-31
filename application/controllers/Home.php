<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()	{
		$this->load->view('componentes/header');
		$this->load->view('home');
		$this->load->view('componentes/footer');		
	}

	public function teste(){
		echo "2222";
		print_r($_GET);
	}
}
