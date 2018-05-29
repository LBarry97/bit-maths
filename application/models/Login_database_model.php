<?php
    Class Login_database_model extends CI_Model {

        // Insertar los datos de registro
        public function insertar_registro($data) {
            // Coprobar si el usuario existe o no
            $condition = "usuario =" . "'" . $data['usuario'] . "'";
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                // Insertar los datos en la base de datos
                $this->db->insert('usuario', $data);
                $cont = $this->db->affected_rows();
                if ($this->db->affected_rows() > 0) {
                    return true;
                }
            } else {
                return false;
            }
        }

        // Leer los datos con usuario y password
        public function login($data) {

            $condition = "usuario =" . "'" . $data['usuario'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }

        // Leer los datos de la base de datos para mostrar los en la pagina admin
        public function informacion_usuario($usuario) {

            $condition = "usuario =" . "'" . $usuario . "'";
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }
    }
?>