<?php
    Class Admin extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar la libreria de session
            $this->load->library('session');
            
            // Cargar el modelo Admin_model
            $this->load->model('admin_model');

            // Cargar librerias de ayuda
            $this->load->helper('html');
            $this->load->helper('url');
        }

        // Mostrar la pagina usuarios
        public function usuarios() {
            $data = array(
                'title' => ucfirst('Bit-Maths | Usuarios'),
                'tabla_usuarios' => $this->admin_model->list_usuarios(),
            );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin_usuarios', $data);
            $this->load->view('templates/footer');
        }
    }
?>