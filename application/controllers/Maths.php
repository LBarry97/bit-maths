<?php
class Maths extends CI_Controller {

        public function view($page = 'Bit-Maths'){
                if ( ! file_exists(APPPATH.'views/templates/'.$page.'.php')){
                        // Whoops, we don't have a page for that!
                        show_404();
                }
                $this->load->helper('html');
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('templates/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }
}