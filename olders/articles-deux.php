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
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">TOUTES LES CATEGORIES - PAGE 2
          </label>
          <label for="anatomie">
            <input type="radio" name="shuffle-filter" id="anatomie" value="anatomie">MODELES D'ANATOMIE HUMAINE
          </label>
          <label for="protection-soignants">
            <input type="radio" name="shuffle-filter" id="protection-soignants" value="protection-soignants">PROTECTION DES SOIGNANTS
          </label>
          <label for="soin-aide">
            <input type="radio" name="shuffle-filter" id="soin-aide" value="soin-aide">SOIN, MOBILITE ET AIDE A LA PERSONNE
          </label>
          <label for="trousses">
            <input type="radio" name="shuffle-filter" id="trousses" value="trousses">TROUSSES, SACS ET MALLETTES MEDICALES
          </label>
          <label for="balances">
            <input type="radio" name="shuffle-filter" id="balances" value="balances">BALANCES ET APPAREILS DE MESURE
          </label>
          <label for="appareils-veto">
            <input type="radio" name="shuffle-filter" id="appareils-veto" value="appareils-veto">APPAREILS ET INSTRUMENTS VETERINAIRES 
          </label>
          <label for="endoscopie">
            <input type="radio" name="shuffle-filter" id="endoscopie" value="endoscopie">LOUPES, VISION ET ENDOSCOPIE 
          </label>
          <label for="electrochirurgie">
            <input type="radio" name="shuffle-filter" id="electrochirurgie" value="electrochirurgie">ELECTROCHIRURGIE ET CAUTERETS
          </label>
          <label for="physiotherapie">
            <input type="radio" name="shuffle-filter" id="physiotherapie" value="physiotherapie">PHYSIOTHERAPIE - NEBULISEURS - ASPIRATEURS
          </label>
          <label for="audiometrie">
            <input type="radio" name="shuffle-filter" id="audiometrie" value="audiometrie">AUDIOMETRIE ET SPIROMETRIE
          </label>
          <label for="eclairage">
            <input type="radio" name="shuffle-filter" id="eclairage" value="eclairage">ECLAIRAGE MEDICAL
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-md-4 shuffle-item" data-groups="[&quot;anatomie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/anatomie.jpg">
                <img class="img-fluid" src="images/articles/anatomie.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">MODELES D'ANATOMIE HUMAINE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;protection-soignants&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/protection-soignants.jpg">
                <img class="img-fluid" src="images/articles/protection-soignants.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">PROTECTION DES SOIGNANTS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;soin-aide&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/soin-aide.jpg">
                <img class="img-fluid" src="images/articles/soin-aide.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">SOIN, MOBILITE ET AIDE A LA PERSONNE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;trousses&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/trousses.jpg">
                <img class="img-fluid" src="images/articles/trousses.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">TROUSSES, SACS ET MALLETTES MEDICALES</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;balances&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/balances.jpg">
                <img class="img-fluid" src="images/articles/balances.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">BALANCES ET APPAREILS DE MESURE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;appareils-veto&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/appareils-veto.avif">
                <img class="img-fluid" src="images/articles/appareils-veto.avif" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">APPAREILS ET INSTRUMENTS VETERINAIRES</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;endoscopie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/endoscopie.jpg">
                <img class="img-fluid" src="images/articles/endoscopie.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">LOUPES, VISION ET ENDOSCOPIE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 7 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;electrochirurgie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/electrochirurgie.avif">
                <img class="img-fluid" src="images/articles/electrochirurgie.avif" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">ELECTROCHIRURGIE ET CAUTERETS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 8 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;physiotherapie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/physiotherapie.webp">
                <img class="img-fluid" src="images/articles/physiotherapie.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">PHYSIOTHERAPIE - NEBULISEURS - ASPIRATEURS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 9 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;audiometrie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/audiometrie.jpg">
                <img class="img-fluid" src="images/articles/audiometrie.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">AUDIOMETRIE ET SPIROMETRIE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 10 end -->

          <div class="col-md-4 shuffle-item" data-groups="[&quot;eclairage&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/eclairage.jpg">
                <img class="img-fluid" src="images/articles/eclairage.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="realisations/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">ECLAIRAGE MEDICAL</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 11 end -->

        </div><!-- shuffle end -->
      </div>

      <div class="general-btn text-center mt-4 mr-2">
        <a class="btn btn-primary" href="articles.php">PRECEDENT</a>
      </div>
      <div class="general-btn text-center mt-4 ml-2">
        <a class="btn btn-primary" href="articles-trois.php">SUIVANT</a>
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