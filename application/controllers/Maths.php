<?php
class Maths extends CI_Controller {

        public function view($page = 'public_home'){
                $this->load->helper('html');
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('templates/bit-maths/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}