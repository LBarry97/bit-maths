<?php
    Class Manage_data_model extends CI_Model {

        // Coger el contenido de las ramas de la BD
        public function getContentRamas() {
            $this->db->select('contenido');
            $this->db->from('rama');
            return $this->db->get()->result_array();
        }
    }
?>