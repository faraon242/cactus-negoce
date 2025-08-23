<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CACTUS Négoce</title>
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

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">NOS ARTICLES</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">NOS ARTICLES</a></li>
                      <li class="breadcrumb-item active" aria-current="page">TOUTES LES CATEGORIES</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">TOUTES LES CATEGORIES - PAGE 3
          </label>
          <label for="egc">
            <input type="radio" name="shuffle-filter" id="egc" value="egc">EGC, MONITEURS ET ULTRASONS
          </label>
          <label for="ihealth">
            <input type="radio" name="shuffle-filter" id="ihealth" value="ihealth">i HEALTH/PRODUITS SANS FIL POUR LE SUIVI SANTE
          </label>
          <label for="tests">
            <input type="radio" name="shuffle-filter" id="tests" value="tests">TESTS DE DIAGNOSTIC - LABORATOIRE
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;egc&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/egc.webp">
                <img class="img-fluid" src="images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">EGC, MONITEURS ET ULTRASONS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;ihealth&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/ihealth.jpg">
                <img class="img-fluid" src="images/articles/ihealth.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">i HEALTH/PRODUITS SANS FIL POUR LE SUIVI SANTE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;tests&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/tests.jpg">
                <img class="img-fluid" src="images/articles/tests.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">TESTS DE DIAGNOSTIC - LABORATOIRE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

        </div><!-- shuffle end -->
      </div>

      <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="articles-deux.php">PRECEDENT</a>
      </div>

      <!--div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="articles.php">View All articles</a>
        </div>
      </div-->

    </div><!-- Content row end -->

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