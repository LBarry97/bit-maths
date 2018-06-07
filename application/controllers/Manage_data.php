<?php
    Class Manage_data extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar la libreria de session
            $this->load->library('session');
            
            // Cargar el modelo Admin_model
            $this->load->model('manage_data_model');

            // Cargar librerias de ayuda
            $this->load->helper('html');
            $this->load->helper('url');

            header('Content-Type: application/json');
        }

        // Devolver las ramas en formato JSON
        public function rama_content() {
            $result = $this->manage_data_model->getContentRamas();
            $lenResult = count($result);
            $responseJSON = "";

            if($lenResult == 0){
                echo '[{"error":"El listado de las ramas no esta disponible."}]';
            }else{
                foreach ($result as $i => $value) {
                    if($i != $lenResult - 1){
                        $responseJSON = $responseJSON.$value['contenido'].",";
                    }else{
                        $responseJSON = $responseJSON.$value['contenido'];
                    }
                }
                $responseJSON = "[".$responseJSON."]";
                echo $responseJSON;
            }
        }

        // Devolver una rama en formato JSON
        public function rama($id_rama) {
            $result = $this->manage_data_model->getContentRama($id_rama);
            $lenResult = count($result);
            $responseJSON = "";

            if($lenResult == 0){
                echo '[{"error":"No se pudo acceder a las ramas."}]';
            }else{
                foreach ($result as $i => $value) {
                    if($i != $lenResult - 1){
                        $responseJSON = $responseJSON.$value['contenido'].",";
                    }else{
                        $responseJSON = $responseJSON.$value['contenido'];
                    }
                }
                $responseJSON = "[".$responseJSON."]";
                echo $responseJSON;
            }
        }

        // Devolver una lista de id de los temas de la rama indicad por parametro
        public function temas_rama($id_rama) {
            $result = $this->manage_data_model->getTemasRama($id_rama);
            $lenResult = count($result);
            $listIdTemas = [];

            foreach ($result as $i => $value) {
                array_push($listIdTemas, $value['id_tema']);
            }

            echo json_encode($listIdTemas);
            
        }
    }
?>