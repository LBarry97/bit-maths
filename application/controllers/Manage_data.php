<?php
    Class Manage_data extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar la libreria de session
            $this->load->library('session');

            // Cargar las librerias form validation
            $this->load->library('form_validation');
            
            // Cargar el modelo Admin_model
            $this->load->model('manage_data_model');

            // Cargar librerias de ayuda
            $this->load->helper('html');
            $this->load->helper('url');
        }

        // Devolver las ramas en formato JSON
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

        // Devolver una rama en formato JSON
        public function rama($id_rama) {
            header('Content-Type: application/json');
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
            header('Content-Type: application/json');
            $result = $this->manage_data_model->getTemasRama($id_rama);
            $lenResult = count($result);
            $listIdTemas = "";
            $responseJSON = "";

            foreach ($result as $i => $value) {
                if($i != $lenResult - 1){
                    $listIdTemas = $listIdTemas.$value['id_tema'].",";
                }else{
                    $listIdTemas = $listIdTemas.$value['id_tema'];
                }
            }
            $responseJSON = '{"rama":"'.$value['id_rama'].'","temas":"'.$listIdTemas.'"}';
            $responseJSON = "[".$responseJSON."]";
            echo $responseJSON;
            
        }

        // Devolver el contenido de un tema
        public function tema_content($id_tema) {
            header('Content-Type: application/json');
            $result = $this->manage_data_model->getContentTema($id_tema);
            $lenResult = count($result);
            $responseJSON = "";

            foreach ($result as $i => $value) {
                $responseJSON = $responseJSON.$value['contenido'];
            }

            $responseJSON = "[".$responseJSON."]";
            echo $responseJSON;
        }

        // Guarda las modificaciones del contenido de formacion
        public function guardar() {
            // Validar la entrada de usuario
            $this->form_validation->set_rules('content_rama', 'Rama', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                redirect('autenticacion_usuario/registro');
            } else {
                $resultNombre = $this->manage_data_model->nombreRama($this->input->post('id_rama'));

                $dataRama = array(
                    'id' => $this->input->post('id_rama'),
                    'nombre' => $resultNombre[0]['nombre'],
                    'contenido' => $this->input->post('content_rama')
                );

                $resultRama = $this->manage_data_model->guardarRama($dataRama);

                if ($resultRama == TRUE) {
                    $data = array(
                        'sms_info' => 'Se guardaron los datos correctamente!',
                        'title' => ucfirst('Bit-Maths Admin | Paginas'),
                    );
                } else {
                    $data = array(
                        'sms_info' => 'Ha habido un error!',
                        'title' => ucfirst('Bit-Maths Admin | Paginas'),
                    );
                }
                
                $this->load->view('templates/admin/header',$data);
                $this->load->view('templates/admin/admin_paginas',$data);
                $this->load->view('templates/footer');

                // $posJSON = json_encode($_POST);

                // echo $posJSON;
            }
        }
    }
?>