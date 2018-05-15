<?php
    Class Admin extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar las librerias form helper
            $this->load->helper('form');

            // Cargar las librerias form validation
            $this->load->library('form_validation');

            // Cargar la libreria de session
            $this->load->library('session');

            // Cargar la base de datos
            $this->load->model('login_database_model');
        }

        // Mostrar la pagina usuarios
        public function usuarios() {
            $result = $this->admin_model->lis_usuarios();
            $data['title'] = ucfirst('Bit-Maths | Usuarios');
            $this->load->helper('html');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin_usuarios');
            $this->load->view('templates/footer');
        }
    }
?>