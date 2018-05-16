<?php
    Class Admin_model extends CI_Model {

        // Coger los usuarios de la base de datos
        public function list_usuarios() {
            $this->db->select('*');
            $this->db->from('login');
            $this->db->order_by('nombre', 'DESC');
            return $this->db->get()->result_array();
        }
    }
?>