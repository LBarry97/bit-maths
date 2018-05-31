<?php
    Class Autenticacion_Usuario extends CI_Controller {

        public function __construct() {
            parent::__construct();

            // Cargar las librerias helper
            $this->load->helper('form');
            $this->load->helper('html');

            // Cargar las librerias form validation
            $this->load->library('form_validation');

            // Cargar la libreria de session
            $this->load->library('session');

            // Cargar la base de datos
            $this->load->model('login_database_model');
        }

        // Mostrar la pagina de login
        public function login() {
            $data['title'] = ucfirst('Bit-Maths | Login');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/form_login');
            $this->load->view('templates/footer');
        }

        // Mostrar la pagina de registro
        public function registro() {
            $data['title'] = ucfirst('Bit-Maths | Registro');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/form_registro');
            $this->load->view('templates/footer');
        }

        // Validar y guardar los datos de registro en la base de datos
        public function nuevo_registro() {

            // Validar la entrada de usuario
            $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required');
            $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
            $this->form_validation->set_rules('email_value', 'Email', 'trim');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
                redirect('autenticacion_usuario/registro');
            } else {
                $data = array(
                    'nombre' => $this->input->post('nombre'),
                    'usuario' => $this->input->post('usuario'),
                    'email' => $this->input->post('email_value'),
                    'password' => $this->input->post('password')
                );
                $result = $this->login_database_model->insertar_registro($data);
                if ($result == TRUE) {
                    $data['sms_info'] = 'Registro finalizado correctamente !';
                } else {
                    $data['sms_info'] = 'El usuario ya existe!'; 
                }

                if(isset($data['sms_info'])){
                    $data['title'] = ucfirst('Bit-Maths | Registro');
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/form_registro');
                    $this->load->view('templates/footer');
                }
            }
        }

        // Validar el proceso de login del usuario
        public function logear_usuario() {

            $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                redirect('autenticacion_usuario/login');
            } else {
                $data = array(
                    'usuario' => $this->input->post('usuario'),
                    'password' => $this->input->post('password')
                );
                $result = $this->login_database_model->login($data);
                if ($result == TRUE) {
                    $usuario = $this->input->post('usuario');
                    $result = $this->login_database_model->informacion_usuario($usuario);
                    if ($result != false) {
                        $datos_session = array(
                            'usuario' => $result[0]->usuario,
                            'email' => $result[0]->email,
                        );

                        // Añadir los datos del usuario en la session
                        $this->session->set_userdata('logeado', $datos_session);
                        if($result[0]->admin == TRUE){
                            $data['title'] = ucfirst('Bit-Maths | Admin');
                            $this->load->view('templates/header', $data);
                            $this->load->view('templates/admin/pagina_admin');
                            $this->load->view('templates/footer');
                        }else{
                            $data['title'] = ucfirst('Bit-Maths');
                            $this->load->view('templates/header', $data);
                            $this->load->view('templates/bit-maths/home_users');
                            $this->load->view('templates/footer');
                        }
                    }
                } else {
                    $data = array(
                        'sms_error' => 'Usuario o Contraseña inconrecto',
                        'title'     => 'Bit-Maths | Login'
                    );
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/form_login', $data);
                    $this->load->view('templates/footer');
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
            redirect('autenticacion_usuario/login');
        }

    }
?>
