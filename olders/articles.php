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
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">TOUTES LES CATEGORIES - PAGE 1
          </label>
          <label for="qhse">
            <input type="radio" name="shuffle-filter" id="qhse" value="qhse">QHSE/EQUIPEMENTS INDIVIDUELS
          </label>
          <label for="diagnostic">
            <input type="radio" name="shuffle-filter" id="diagnostic" value="diagnostic">DIAGNOSTIC
          </label>
          <label for="gynecologie">
            <input type="radio" name="shuffle-filter" id="gynecologie" value="gynecologie">GYNECOLOGIE
          </label>
          <label for="instruments">
            <input type="radio" name="shuffle-filter" id="instruments" value="instruments">INSTRUMENTS MEDICAUX ET CHIRURGICAUX
          </label>
          <label for="labo">
            <input type="radio" name="shuffle-filter" id="labo" value="labo">LABORATOIRE
          </label>
          <label for="mobilier">
            <input type="radio" name="shuffle-filter" id="mobilier" value="mobilier">MOBILIER MEDICAL
          </label>
          <label for="urgences">
            <input type="radio" name="shuffle-filter" id="urgences" value="urgences">URGENCES ET PREMIERS SECOURS
          </label>
          <label for="soins">
            <input type="radio" name="shuffle-filter" id="soins" value="soins">SOINS & PANSEMENTS
          </label>
          <label for="bien-etre">
            <input type="radio" name="shuffle-filter" id="bien-etre" value="bien-etre">BIEN ÊTRE ET AIDE A LA VIE
          </label>
          <label for="protection">
            <input type="radio" name="shuffle-filter" id="protection" value="protection">PROTECTION ET VETEMENTS MEDICAUX
          </label>
          <label for="hygiene">
            <input type="radio" name="shuffle-filter" id="hygiene" value="hygiene">HYGIENE ET STERILISATION
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;qhse&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/qhse.jpg">
                <img class="img-fluid" src="images/articles/qhse.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">QHSE/EQUIPEMENTS INDIVIDUELS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;diagnostic&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/diagnostic.jpg">
                <img class="img-fluid" src="images/articles/diagnostic.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">DIAGNOSTIC</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;gynecologie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/gynecologie.jpg">
                <img class="img-fluid" src="images/articles/gynecologie.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">GYNECOLOGIE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;instruments&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/instruments-medicaux.jpg">
                <img class="img-fluid" src="images/articles/instruments-medicaux.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">INSTRUMENTS MEDICAUX ET CHIRURGICAUX</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;labo&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/laboratoire.jpg">
                <img class="img-fluid" src="images/articles/laboratoire.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">LABORATOIRE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;mobilier&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/mobilier-medical.jpg">
                <img class="img-fluid" src="images/articles/mobilier-medical.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">MOBILIER MEDICAL</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;urgences&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/urgences.jpeg">
                <img class="img-fluid" src="images/articles/urgences.jpeg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">URGENCES ET PREMIERS SECOURS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 7 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;soins&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/soins.jpg">
                <img class="img-fluid" src="images/articles/soins.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">SOINS & PANSEMENTS</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 8 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;bien-etre&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/bien-etre.jpg">
                <img class="img-fluid" src="images/articles/bien-etre.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">BIEN ETRE ET AIDE A LA VIE</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 9 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;protection&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/protection.jpg">
                <img class="img-fluid" src="images/articles/protection.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">PROTECTION ET VETEMENTS MEDICAUX</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 10 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;hygiene&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/articles/hygiene.avif">
                <img class="img-fluid" src="images/articles/hygiene.avif" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="articles/articles-single.php">VOIR PLUS</a>
                  </h3>
                  <p class="project-cat">HYGIENE ET STERILISATION</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 11 end -->

        </div><!-- shuffle end -->
      </div>

      <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="articles-deux.php">SUIVANT</a>
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