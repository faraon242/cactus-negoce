<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cactus Négoce</title>
  <?php @include('../include/head.php'); ?>
</head>
<body>

<div class="body-inner">

<?php @include('header.php'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/categories-banner.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">HYGIENE ET STERILISATION</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>HYGIENE ET STERILISATION</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 



<section id="main-container" class="main-container">
  <div class="container text-center">

    <div class="text-center mb-4">
      <h4 class="section-title">
        Notion capitale, l’hygiène revêt une importance particulièrement forte dans le domaine médical.
        Vous trouverez dans cette rubrique, les produits nécessaires au nettoyage et la désinfection de vos locaux et instruments professionnels, ainsi que des solutions d’hygiène individuelle.
      </h4>
    </div>

    <div class="row">
      <div class="col-12">

        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Toutes
          </label>
          <label for="alcool">
            <input type="radio" name="shuffle-filter" id="alcool" value="alcool">Alcool
          </label>
          <label for="gel">
            <input type="radio" name="shuffle-filter" id="gel" value="gel">Gels antibactérien, solution hydroalcooliques
          </label>
          <label for="desinfection">
            <input type="radio" name="shuffle-filter" id="desinfection" value="desinfection">Désinfection/Stérilis
          </label>
          <label for="draps">
            <input type="radio" name="shuffle-filter" id="draps" value="draps">Draps d'examen
          </label>
          </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;alcool&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Alcool
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;gel&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Gels antibactérien, solution hydroalcooliques
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;desinfection&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Désinfection/Stérilis
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;draps&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Draps d'examen
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div><!-- shuffle end -->
      </div>

    </div><!-- Content row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php @include('../include/footer.php'); ?>


  <!-- Javascript Files -->
  <?php @include('../include/script.php'); ?>

  </div><!-- Body inner end -->
  </body>

  </html>