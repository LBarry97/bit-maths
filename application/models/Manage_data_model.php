<?php
    Class Manage_data_model extends CI_Model {

        // Coger el contenido de las ramas de la BD
        public function getContentRamas() {
            $this->db->select('contenido');
            $this->db->from('rama');
            return $this->db->get()->result_array();
        }

        // Coger el contenido de una rama indicada por parametro
        public function getContentRama($id_rama) {
            $condition = "id =" . "'" . $id_rama . "'";
            $this->db->select('contenido');
            $this->db->from('rama');
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get()->result_array();
        }

        // Coger id de los temas de la rama
        public function getTemasRama($id_rama) {
            $condition = "id_rama =" . "'" . $id_rama . "'";
            $this->db->select('id_tema');
            $this->db->from('rama_tema');
            $this->db->where($condition);
            return $this->db->get()->result_array();
        }
    }
?>