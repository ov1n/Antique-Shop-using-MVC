<!DOCTYPE html>
<html lang="en">
  <head>
    <title>View Products</title>
    <meta charset="utf-8" />
    <!--bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css"/>
    <!-- secondary CSS file and JS files -->
    <link
      rel="stylesheet"
      href="<?php echo base_url(); ?>assets/css/home.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../welcome">
        <img src="../../assets/images/product.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          &ensp;&ensp;&ensp;&ensp;
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../Product/display">Display products</a>
              <a class="dropdown-item" href="../Product/insert">Insert product</a>
            </div>
          </li>
          &ensp;&ensp;&ensp;&ensp;
          <a class="nav-link" href="../Report/display">Get Report</a>
        </ul>
      </div>
    </nav>
    <!-- nav bar end-->
    <!-- breadcrumb-->
    <ul class="breadcrumb">
      <li><a href="../welcome">Home</a></li>
      <li>Display</li>
    </ul>
    <!-- breadcrumb end-->

    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Name</th>
        <th scope="col">Category</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <?php
        //echo $data;
        foreach($data as $row){
          //get data sent from controller
            echo "<tr>";
            echo "<td>".$row->product_id."</td>";
            echo "<td >".$row->name."</td>";
            echo "<td>".$row->category."</td>";
            echo "<td>".$row->price."</td>";
            echo "<td colspan='10'>".$row->description."</td>";
            echo "<td class=display_button><a class= 'btn btn-danger' href='delete/".$row->product_id."'>Delete</a></td>";
            echo "<td class=display_button><a class= 'btn btn-primary' href='update/".$row->product_id."'>Update</a></td>";
            echo "</tr>";
        }
    ?>
    </table>
    </body>
</html>