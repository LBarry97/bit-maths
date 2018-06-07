<?php
    Class Admin extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar la libreria de session
            $this->load->library('session');
            
            // Cargar el modelo Admin_model
            $this->load->model('admin_model');

            // Cargar librerias de ayuda
            $this->load->helper('form');
            $this->load->helper('html');
            $this->load->helper('url');
        }

        // Mostrar la pagina usuarios
        public function usuarios() {
            $data = array(
                'title' => ucfirst('Bit-Maths | Usuarios'),
                'tabla_usuarios' => $this->admin_model->list_usuarios(),
            );
            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/admin_usuarios', $data);
            $this->load->view('templates/footer');
        }

        // Mostrar la pagina usuarios
        public function paginas() {
            $data = array(
                'title' => ucfirst('Bit-Maths Admin | Paginas'),
            );
            $this->load->view('templates/admin/header',$data);
            $this->load->view('templates/admin/admin_paginas');
            $this->load->view('templates/footer');
        }

        // Mostrar la pagina usuarios
        public function pagina($pagina) {
            switch($pagina){
                case 'home_publica':
                    $data = array(
                        'title' => ucfirst('Pagina | Home Publica'),
                    );
                    $this->load->view('templates/header',$data);
                    $this->load->view('templates/admin/editar_pagina');
                    $this->load->view('templates/footer');
                    break;

                default:
                    $this->load->view('No se encontro la pagina :(');
            }
        }

        public function borrar_user($usuario){
            $this->admin_model->borrar_usuario($usuario);
            redirect();
        }
    }
?>