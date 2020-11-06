<?php
class Home extends CI_Controller
{
    public function __construct(){
        // Constructor that loads helper and models
        parent::__construct(); 

        $this->load->helper('url');
        
    }
    public function view(){
        $this->load->view('home');
    }
}
?>
         