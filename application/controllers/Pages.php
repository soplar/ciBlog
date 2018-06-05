<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            // controleer of pagina bestaat
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                // toon 404
                show_404();
            }
            // maak eerste letter hoofdletter
            // zet pagina naam in titel
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }