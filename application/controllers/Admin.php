<?php
    Class Admin extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            // Cargar el modelo Admin_model
            $this->load->model('admin_model');
        }

        // Mostrar la pagina usuarios
        public function usuarios() {
            $result = $this->admin_model->list_usuarios();
            $data['title'] = ucfirst('Bit-Maths | Usuarios');
            $data['tabla'] = $result;
            $this->load->helper('html');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/admin_usuarios', $data);
            $this->load->view('templates/footer');
        }
    }
?>