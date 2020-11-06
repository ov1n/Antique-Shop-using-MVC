<?php
//model class to get product details
class Product_model extends CI_Model {                
                
        public function display_products()
        {
                $query = $this->db->query("select * from product");
                return $query->result();
        }

        function display_product_by_id($product_id)
        //method which returns records of product_id sent by parameter
        {
                $query = $this->db->query("select product_id from product where product_id='".$product_id."'");
                return $query->result();
        }

        function get_count()
        //method which gets number of products in table
        {
                $query = $this->db->query("select count(product_id) from product");
                return $query->row();
        }

        function get_count_music()
        //method which gets number of Musical products in table
        {
                $query = $this->db->query("select count(product_id) from product where category='Music'");
                return $query->row();
        }

        function get_count_antique()
        //method which gets number of Antique products in table
        {
                $query = $this->db->query("select count(product_id) from product where category='Antique'");
                return $query->row();
        }

        function insert_product($product_id,$name,$category,$price,$description)
        //function which enters a new product
        {
        $query="insert into product values('$product_id','$name','$category','$price','$description')";
        $this->db->query($query);
        }

        public function update_product($product_id,$name,$category,$price,$description)
        //method which updates a given product
        {
                $query="update product SET name='$name',category='$category',price='$price',description='$description' where product_id='".$product_id."'";
                $this->db->query($query);
        }


        function delete_product($product_id)
        //method which returns records of product_id sent by parameter
        {
                $this->db->query("delete from product where product_id='".$product_id."'");
        }

        function highest_product()
        //method which gets most expensive table in the table
        {
                $query = $this->db->query("select name from product
                order by price DESC
                limit 1
                ");
                return $query->row();
        }

        function lowest_product()
        //method which gets least expensive table in the table
        {
                $query = $this->db->query("select name from product
                order by price ASC
                limit 1
                ");
                return $query->row();
        }
        
}

?>