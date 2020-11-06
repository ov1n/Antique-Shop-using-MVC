<?php
class Product extends CI_Controller
{
    public function __construct(){
        // Constructor that loads helper and models
        parent::__construct(); 

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Product_model');
    }

    public function display(){

        //echo "View loaded successfully";

        $result['data']=$this->Product_model->display_products();
        $this->load->view('display_products',$result);
    }

    public function insert(){
        $this->load->view('insert_product');
        //echo "View loaded successfully";

        if($this->input->post('insert')){
            //echo "Button pressed successfully";
            $product_id=$this->input->post('product_id');
            $name=$this->input->post('name');
            $category=$this->input->post('category');
            $price=$this->input->post('price');
            $description=$this->input->post('description');
            $this->Product_model->insert_product($product_id,$name,$category,$price,$description);
            //JS popup message
            echo '<script language=\"javascript"\>alert("Record inserted successfully");</script>';
            redirect("Product/insert");
        }
    }

    //function to update records in database
    public function update($product_id){

        $this->load->view('update_product',$product_id);
        //echo "$product_id";
        if($this->input->post('update')){
            echo "Button pressed successfully";
            $name=$this->input->post('name');
            $category=$this->input->post('category');
            $price=$this->input->post('price');
            $description=$this->input->post('description');
            $this->Product_model->update_product($product_id,$name,$category,$price,$description);
            //JS popup message
            echo '<script language=\"javascript"\>alert("Record inserted successfully");</script>';
            redirect("Product/display");
        }

    }

    //function to delete a record with the given product id
    public function delete($product_id){

        $this->Product_model->delete_product($product_id);
        echo '<script language="javascript">alert("Record deleted successfully");</script>';
        redirect("Product/display");
    }
}