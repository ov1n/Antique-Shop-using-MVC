<?php
class Form extends CI_Controller{
    public function __construct(){
        parent::__construct(); // Construct CI's core so that you can use it

        $this->load->helper('url');
        $this->load->helper('form_validation');
    }

    public function form(){
        $this->form_validation->set_rules
    }
}