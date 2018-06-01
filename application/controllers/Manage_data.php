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
        }

        // Mostrar la pagina de login
        public function rama_content() {
            header('Content-Type: application/json');
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
    }
?>