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
                <h1 class="banner-title">Laboratoire</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Laboratoire</li>
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
        Materiel et Réactifs nécessaires pour la réalisation de travaux de laboratoire.
      </h4>
    </div>

    <div class="row">
      <div class="col-12">

        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Toutes
          </label>
          <label for="pesage">
            <input type="radio" name="shuffle-filter" id="pesage" value="pesage">Pesage
          </label>
          <label for="verrerie">
            <input type="radio" name="shuffle-filter" id="verrerie" value="verrerie">Verrerie
          </label>
          <label for="pma">
            <input type="radio" name="shuffle-filter" id="pma" value="pma">Petits matériels
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;pesage&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Pesage
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;verrerie&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Verrerie
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;pma&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Petits matériels
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