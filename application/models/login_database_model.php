<?php
    Class Login_Database extends CI_Model {

        // Insertar los datos de registro
        public function registration_insert($data) {
            // Coprobar si el usuario existe o no
            $condition = "nombre_usuario =" . "'" . $data['nombre_usuario'] . "'";
            $this->db->select('*');
            $this->db->from('login_usuario');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                // Insertar los datos en la base de datos
                $this->db->insert('login_usuario', $data);
                if ($this->db->affected_rows() > 0) {
                    return true;
                }
            } else {
                return false;
            }
        }

        // Leer los datos con usuario y password
        public function login($data) {

            $condition = "nombre_usuario =" . "'" . $data['usuario'] . "' AND " . "password_usuario =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('login_usuario');
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
        public function read_user_information($username) {

            $condition = "nombre_usuario =" . "'" . $usuario . "'";
            $this->db->select('*');
            $this->db->from('login_usuario');
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