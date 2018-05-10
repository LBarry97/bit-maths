<?php
    session_start(); //Iniciar el gestor de session

    Class Autenticacion_Usuario extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar las librerias form helper
            $this->load->helper('form');

            // Cargar las librerias form validation
            $this->load->library('form_validation');

            // Cargar la libreria de session
            $this->load->library('session');

            // Cargar la base de datos
            $this->load->model('login_database');
        }

        // Mostrar la pagina de login
        public function index() {
            $this->load->view('form_login');
        }

        // Mostrar la pagina de registro
        public function user_registration_show() {
            $this->load->view('form_registro');
        }

        // Validar y guardar los datos de registro en la base de datos
        public function new_user_registration() {

            // Validar la entrada de usuario
            $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('form_registro');
            } else {
                $data = array(
                    'nombre_usuario' => $this->input->post('usuario'),
                    'email_usuario' => $this->input->post('email_usuario'),
                    'password_usuario' => $this->input->post('password')
                );
                $result = $this->login_database->registration_insert($data);
                if ($result == TRUE) {
                    $data['sms_info'] = 'Registro finalizado correctamente !';
                    $this->load->view('form_login', $data);
                } else {
                    $data['sms_info'] = 'El usuario ya existe!';
                    $this->load->view('form_registro', $data);
                }
            }
        }

        // Validar el proceso de login del usuario
        public function user_login_process() {

            $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                if(isset($this->session->userdata['logeado'])){
                    $this->load->view('pagina_admin');
                }else{
                    $this->load->view('form_login');
                }
            } else {
                $data = array(
                    'usuario' => $this->input->post('usuario'),
                    'password' => $this->input->post('password')
                );
                $result = $this->login_database->login($data);
                if ($result == TRUE) {
                    $username = $this->input->post('username');
                    $result = $this->login_database->read_user_information($username);
                    if ($result != false) {
                        $session_data = array(
                            'usuario' => $result[0]->user_name,
                            'email' => $result[0]->user_email,
                        );

                        // Añadir los datos del usuario en la session
                        $this->session->set_userdata('logeado', $session_data);
                        $this->load->view('pagina_admin');
                    }
                } else {
                    $data = array(
                    'sms_error' => 'Usuario o Contraseña inconrecto'
                    );
                    $this->load->view('form_login', $data);
                }
            }
        }

        // Logout en la pagina admin
        public function logout() {

            // Borrar los datos de session
            $sess_array = array(
                'usuario' => ''
            );
            $this->session->unset_userdata('logeado', $sess_array);
            $data['sms_info'] = 'Sesión finalizad';
            $this->load->view('form_login', $data);
        }

    }
?>
