<?php
    Class Admin_model extends CI_Model {

        // Coger los usuarios de la base de datos
        public function lis_usuarios($usuario) {
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