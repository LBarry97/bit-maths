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
            $this->db->select('id_rama, id_tema');
            $this->db->from('rama_tema');
            $this->db->where($condition);
            return $this->db->get()->result_array();
        }

        // Coger un tema
        public function getContentTema($id_tema) {
            $condition = "id =" . "'" . $id_tema . "'";
            $this->db->select('contenido');
            $this->db->from('tema');
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get()->result_array();
        }

        // Guardat las modificaciones del contenido de la rama
        public function save($id_tema) {
            $condition = "id =" . "'" . $id_tema . "'";
            $this->db->select('contenido');
            $this->db->from('tema');
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get()->result_array();
        }

        // Coger el nombre de una rama
        public function nombreRama($id_rama) {
            $condition = "id =" . "'" . $id_rama . "'";
            $this->db->select('nombre');
            $this->db->from('rama');
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get()->result_array();
        }

        // Coger el nombre de una rama
        public function contenidoRama($id_rama) {
            $condition = "id =" . "'" . $id_rama . "'";
            $this->db->select('contenido');
            $this->db->from('rama');
            $this->db->where($condition);
            $this->db->limit(1);
            return $this->db->get()->result_array();
        }

        // Guardar el contenido de una rama
        public function guardarRama($content) {
            $data = array(
                'nombre' => $content['nombre'],
                'contenido' => '{"titulo":"'.$content['nombre'].'","descripcion":"'.$content['contenido'].'","imagen":"'.$content['imagen'].'"}'
            );
            $this->db->where('id', $content['id']);
            return $this->db->update('rama', $data);
        }

        // Guardar el contenido de una tema
        public function guardarTema($id_tema, $content, $id_rama) {
            $condition = "id =" . "'" . $id_tema . "'";
            $this->db->select('contenido');
            $this->db->from('tema');
            $this->db->where($condition);
            $result = $this->db->get();

            $data = array(
                'contenido' => '{"descripcion":"'.$content['contenido'].'"}'
            );

            if( $result->num_rows() > 0 ){
                $this->db->where('id', $id_tema);
                return $this->db->update('tema', $data);
            }else{
                $query = $this->db->query('ALTER TABLE `tema` AUTO_INCREMENT = 1');
                $this->db->insert('tema', $data);
                $dataRama_tema = array(
                    'id_rama' => $id_rama,
                    'id_tema' => $id_tema
                );
                return $this->db->insert('rama_tema', $dataRama_tema);
            }
        }
    }
?>