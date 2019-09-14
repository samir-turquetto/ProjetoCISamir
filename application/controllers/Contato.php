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
                header('Content-Type: application/json');

                $this->form_validation->set_rules('nome', 'Nome', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('senha', 'Senha', 'required');

                if ($this->form_validation->run() == FALSE) {
                        echo $this->form_validation->getErrorArray();
                } else {
                        $a = array(
                                'nome' => $_POST['nome'],
                                'email' => $_POST['email'],
                                'senha' => md5($_POST['senha'])
                        );

                        $this->db->insert('tbemail', $a);

                        $rs = array(
                                'type' => 'success',
                                'msg' => 'Cadastro realizado com sucesso.'
                        );

                        echo json_encode($rs);
                }
        }
}
