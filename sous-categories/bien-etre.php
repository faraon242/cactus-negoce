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
                <h1 class="banner-title">Bien être et aide à la vie</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Bien être et aide à la vie</li>
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
      <blockquote>
        <p>
          Nous accordons la plus grande importance au confort des patients et des séniors.
          Vous trouverez également dans cette rubrique nos appareils de massage et autres outils de relaxation.
        </p>
      </blockquote>
    </div>

    <div class="row">
      <div class="col-12">

        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Toutes
          </label>
          <label for="amd">
            <input type="radio" name="shuffle-filter" id="amd" value="amd">Autonomie - Maintien à domicile
          </label>
          <label for="massage">
            <input type="radio" name="shuffle-filter" id="massage" value="massage">Massage et rééducation
          </label>
          <label for="cta">
            <input type="radio" name="shuffle-filter" id="cta" value="cta">Confort et Thérapies alternatives
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;amd&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Autonomie - Maintien à domicile
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;massage&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Massage et rééducation
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;cta&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Confort et Thérapies alternatives
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