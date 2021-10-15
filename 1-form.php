<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Amazement Logistics & Security Company</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    
</head>




<body>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+32460245407</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>Amazementlogistics1978</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
           <img class="img-fluid w-50" src="img/AmazementLogo.jpg" alt="">
                <!-- <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-plane mr-2"></i>Amazement Logistics& Security Company</h1> -->
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    <a class="nav-item nav-link active" href="#shipment-manager">Check Shipment</a>
                    <!-- <a href="price.html" class="nav-item nav-link">Price</a> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                   
                </div>
                <!-- <a href="" class="btn btn-warning py-2 px-4 d-none d-lg-block">Get A Quote</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


<div id="shipment-manager" class="container-fluid">
        <div class="container">
            <div class="text-center pb-2">
                <!-- <h6 class="text-primary text-uppercase font-weight-bold">Pricing Plan</h6> -->
                <h1 class="mb-4">SHIPMENT MANAGER</h1>

                <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <!-- <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Mo</small> -->
                            </h1>
                        </div>
                        <div class="bg-warning text-center p-4" style="background-color:yellow;">
                            <h1 class="m-0"> CHECK YOUR SHIPMENT</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
    <!-- (A) SEARCH FORM -->
    <form method="post" action="1-form.php">
     
      <input type="text" name="search" required/>
      <br><input class="btn btn-warning py-2 px-4 my-2" type="submit" value="Track shipment" />
    </form>

    
    <?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    if (isset($_POST['search'])) {
      // (B1) SEARCH FOR USERS
      require "2-search.php";
      
      // (B2) DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['name'], $r['email']);
        }
      } else { echo "No Shipment correspond to the tracking number"; }
    }

    ?>

<BR><h3 class="mb-4">OR</h3>
        <a style="display: block;margin-top:24px;text-align:center;font-weight: 600" href="#"
            class="btn-link">Login to Shipment Manager</a>


  </body>

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</html>