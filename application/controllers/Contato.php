<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contato extends CI_Controller
{

        public function index()
        {
                $this->load->view('componentes/header');
                $this->load->view('contato');
                $this->load->view('componentes/footer');
        }

        public function send()
        {
                $this->form_validation->set_rules('nome', 'Nome', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('senha', 'Senha', 'required');

                if ($this->form_validation->run() == FALSE) {
                        echo $this->form_validation->getErrorArray();
                } else {
                        $a = array(
                                'nome' => $_POST['nome'],
                                'email' => $_POST['email']
                        );

                        $this->db->insert('tbemail', $a);
                }
        }
}
