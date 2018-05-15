<?php
    Class Admin_model extends CI_Model {

        public function __construct() {
            parent::__construct();

            // Cargar las librerias de tablas
            //$this->load->helper('table');
        }

        // Coger los usuarios de la base de datos
        public function list_usuarios($usuario) {
            //$query = $this->db->query('SELECT * FROM login');
            $this->db->select('*');
            $this->db->from('login');
            $query = $this->db->get();

            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return false;
            }
        }
    }
?>