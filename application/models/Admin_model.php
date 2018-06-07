<?php
    Class Admin_model extends CI_Model {

        // Coger los usuarios de la base de datos
        public function list_usuarios() {
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('admin=0');
            $this->db->order_by('nombre', 'DESC');
            return $this->db->get()->result_array();
        }

        // Borrar usuario
        public function borrar_usuario($usuario){
            $this->db->where('usuario', $usuario);
            $this->db->delete('usuario');
        }
    }
?>