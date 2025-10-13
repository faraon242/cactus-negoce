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
                <h1 class="banner-title">A PROPOS DE NOUS</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">A PROPOS</a></li>
                      <li class="breadcrumb-item active" aria-current="page">A PROPOS DE NOUS</li>
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
        <div class="col-lg-6">
          <h3 class="column-title">Qui sommes-nous</h3>
          <p>
            CACTUS Négoce est une entreprise spécialisée dans la distribution de matériel, consommables médicaux et de laboratoire. Elle a été fondée en 2003 par Monsieur Octave Boucka afin de répondre à un besoin réel en France et à l’étranger.
            L'objectif de Cactus Négoce est d’offrir des produits de qualité au prix le plus juste. Nous sommes en contact avec plus de 30 fournisseurs dont la qualité des produits est reconnue par tous. 
          </p>
          <blockquote><p>
            Notre transparence sur les produits et les prix  vous accompagnent dans votre processus de décision.
          </p></blockquote>
          <p>
            CACTUS Négoce compte aujourd’hui plus de 25 collaborateurs qui sont à la disposition des clients afin d’améliorer la qualité commerciale. Cactus Négoce peut fournir pratiquement tous les produits qui couvrent les besoins quotidiens de toute antenne médicale, clinique, hôpitaux, laboratoire.
          </p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(images/about/medical-desk-with-stethoscope-copy-space.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Qualité</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/about/medical-equipment-with-copy-space.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Conformité</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/about/top-view-medicine-blue-background.jpg)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Sécurité</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

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