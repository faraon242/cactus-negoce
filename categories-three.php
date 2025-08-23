<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cactus Négoce</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style/style.css">
</head>
<body>
<div class="body-inner">

<?php @include('include/header.php'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/categories-banner.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">CATEGORIES</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">CATEGORIES - PAGE 3</a></li>
                      <!--li class="breadcrumb-item active" aria-current="page">TOUS NOS SERVICES</li-->
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img" >
                    <img loading="lazy" class="img-fluid" src="images/categories/ihealth.jpg" alt="img" style="width: 350px; height: 250px;">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="#" class="d-inline-block">i HEALTH/PRODUITS SANS FIL POUR LE SUIVI SANTE </a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="#" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="images/categories/tests.jpg" alt="img" style="width: 350px; height: 250px;">
                </a>
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a href="#" class="d-inline-block">TESTS DE DIAGNOSTIC - LABORATOIRE </a>
                </h4>
              </div>
          </div><!-- Latest post end -->
        </div>

      </div>

      <div class="general-btn text-center m-4">
          <a class="btn btn-primary" href="categories-two.php">PRECEDENT</a>
      </div>

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php @include('include/footer.php'); ?>


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>