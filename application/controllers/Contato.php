<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {
	
	public function index()	{
                $this->load->view('componentes/header');
                $this->load->view('contato');
                $this->load->view('componentes/footer');
        }
        
        public function send(){
                print_r($_POST);
        }
}