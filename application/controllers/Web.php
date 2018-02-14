<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    public function index() {
        $data['menu'] = 1;
        $this->load->view('templates/header', $data);
        $this->load->view('index',$data);
        $this->load->view('templates/footer');
    }

    public function about() {
        $data['menu'] = 2;
        $this->load->view('templates/header', $data);
        $this->load->view('about',$data);
        $this->load->view('templates/footer');
    }
    
    public function admission() {
        $data['menu'] = 3;
        $this->load->view('templates/header', $data);
        $this->load->view('admission',$data);
        $this->load->view('templates/footer');
    }
    
    public function activities() {
        $data['menu'] = 4;
        $this->load->view('templates/header', $data);
        $this->load->view('activities',$data);
        $this->load->view('templates/footer');
    }

    public function gallery() {
        $data['menu'] = 5;
        $this->load->view('templates/header', $data);
        $this->load->view('gallery',$data);
        $this->load->view('templates/footer');
    }
    
    public function contact() {
        $data['menu'] = 6;
        $this->load->view('templates/header', $data);
        $this->load->view('contact',$data);
        $this->load->view('templates/footer');
    }        

}
