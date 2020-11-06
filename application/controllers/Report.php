<?php
class Report extends CI_Controller
{
    public function __construct(){
        // Constructor that loads helper and models
        parent::__construct(); 

        $this->load->database();
        //load url and session
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Product_model');
        
    }

    public function display(){
        
        
        //model method which returns number of products in table
        $result['count']=$this->Product_model->get_count();
        //model methods which returns number of products per category in table
        $result['count_music']=$this->Product_model->get_count_music();
        $result['count_antique']=$this->Product_model->get_count_antique();
        //model methods which returns most and least expensive products in table
        $result['lowest_product']=$this->Product_model->lowest_product();
        $result['highest_product']=$this->Product_model->highest_product();
        $this->load->view('report',$result);

        $this->session->set_userdata($result);
        //echo($result['count']);
    }
}