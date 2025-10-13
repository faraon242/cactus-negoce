<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cactus Négoce</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <link rel="icon" type="image/png" href="images/cactus-logo.png">
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

<?php
  @include('include/header.php');
?>

<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner-1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">NOS ENGAGEMENTS</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">A PROPOS DE NOUS</a></li>
                      <li class="breadcrumb-item active" aria-current="page">NOS ENGAGEMENTS</li>
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
      <div class="col-lg-8">
        <h3 class="border-title border-left mar-t0">CACTUS Négoce</h3>

        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  NOS ENGAGEMENTS
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
              data-parent="#construction-accordion">
              <div class="card-body">
                <ul>
                  <li>Qualité et conformité : produits certifiés et fiables.</li>
                  <li>Sécurité : protection des utilisateurs, respect des normes médicales et HSE.</li>
                  <li>Service : assistance technique, maintenance et suivi après-vente.</li>
                  <li>Disponibilité : rapidité et continuité d’approvisionnement.</li>
                  <li>Éthique : transparence, intégrité et respect des règles.</li>
                  <li>Formation : accompagnement des utilisateurs pour une bonne utilisation.</li>
                  <li>Responsabilité : respect de l’environnement.</li>
                  <li>Partenariat : relation de confiance et satisfaction durable des clients.</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  100% Satisfait
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
              <div class="card-body">
                Tous nos produits sont rigoureusement contrôlés et conformes aux normes en vigueur.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header p-0 bg-transparent" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                  data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Le meilleur prix !
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
              data-parent="#construction-accordion">
              <div class="card-body">
                Cactus Négoce s'engage à vous offrir la qualité au meilleur prix et vous propose des bas prix en permanence.
                <br>Profitez dès maintenant de nos produits.
              </div>
            </div>
          </div>
        </div>
        <!--/ Accordion end -->

      </div><!-- Col end -->

    </div><!-- Content row end -->

  </div><!-- Container end -->
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