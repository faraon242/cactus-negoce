<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cactus Négoce - Soins et pansements</title>
  <?php @include('../include/head.php'); ?>
</head>
<body>

<style>
  .ax-img-fluid{
  height: 300px;
}
</style>

<div class="body-inner">

<?php @include('header.php'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/categories-banner.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Soins et pansements</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Soins et pansements</li>
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

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Toutes
          </label>
          <label for="bandages">
            <input type="radio" name="shuffle-filter" id="bandages" value="bandages">Bandages
          </label>
          <label for="soins">
            <input type="radio" name="shuffle-filter" id="soins" value="soins">Soins
          </label>
          <label for="accessoires">
            <input type="radio" name="shuffle-filter" id="accessoires" value="accessoires">Accessoires
          </label>
          </div><!-- project filter end -->

          <blockquote>
            <p>Retrouvez notre sélection de produits de soins et pansements. Destinés à répondre aussi bien aux besoins des particuliers qu’aux exigences des professionnels de santé, dans le souci de toujours vous offrir le meilleur rapport qualité/prix.</p>
          </blockquote>

        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;bandages&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/sp-bandages.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Bandages
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/sp-bandages.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;soins&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/sp-soins.jpeg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Soins
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/sp-soins.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;accessoires&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/sp-accessoires.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Accessoires
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/sp-accessoires.php">VOIR PLUS</a>
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