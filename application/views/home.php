<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome to Thenu's anitique shop</title>
    <meta charset="utf-8" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <!-- secondary CSS file and JS file -->
    <link rel="stylesheet" type="text/css" href="../assets/css/home.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php/welcome">
        <img src="../assets/images/product.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
              <a class="dropdown-item" href="../index.php/Product/display">Display products</a>
              <a class="dropdown-item" href="../index.php/Product/insert">Insert product</a>
            </div>
          </li>
          &ensp;&ensp;&ensp;&ensp;
          <a class="nav-link" href="../index.php/Report/display">Get Report</a>
        </ul>
      </div>
    </nav>
    <!-- breadcrumb -->
    <ul class="breadcrumb">
      <li>Home</li>
    </ul>
    <header class="page-header header container-fluid"></header>
    <!-- script to external file that displays header -->
    <script src="../assets/js/home.js"></script>
    <div class="overlay"></div>
        <div class="description">
      <h1>Welcome to Thenuka's Antique/Music shop</h1>
      <p>
      </br></br>
        All types of antiques and music instruments are available here. Reports on products can also be generated.
        </br></br>
        Site made using CodeIgniter and Bootstrap
      </p>
      </br></br>
    </div>
    </div>
        <footer class="page-footer">
            <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Assignment submission</h6>
            <p>SCS 2208 assignment submission by 18001912 </p>
            <p> CI and Bootstrap Individual Assignment</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
            <h6 class="text-uppercase font-weight-bold">Details</h6>
            <p>35, UCSC, Reid Avenue, Colombo 7
            <br/>github.com/ov1n
</p>
            </div>
            </div>
            <div class="footer-copyright text-center">© 2019 Copyright:
            Done by Thenuka Ovin</div>
            </footer>
  </body>
</html>
