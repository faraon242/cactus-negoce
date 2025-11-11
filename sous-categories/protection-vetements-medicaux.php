<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cactus Négoce - Protection et vêtements médicaux</title>
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
                <h1 class="banner-title">PROTECTION ET VETEMENTS MEDICAUX</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>PROTECTION ET VETEMENTS MEDICAUX</li>
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
          <label for="vj">
            <input type="radio" name="shuffle-filter" id="vj" value="vj">Vêtements jetables
          </label>
          <label for="vc">
            <input type="radio" name="shuffle-filter" id="vc" value="vc">Vêtements en coton
          </label>
          <label for="gants">
            <input type="radio" name="shuffle-filter" id="gants" value="gants">Gants et autres acessoires
          </label>
          </div><!-- project filter end -->

          <blockquote>
            <p>Elaborée dans le souci d’améliorer le quotidien des professionnels de santé, notre sélection de vêtements médicaux saura répondre à vos attentes, en vous proposant la qualité au meilleur prix. Vous trouverez également un choix conséquent d’équipements de protection médicale.</p>
          </blockquote>


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;vj&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/pvm-vetements-jetables.avif" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Vêtements jetables
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/pvm-vetements-jetables.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;vc&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/pvm-vetements-cotons.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Vêtements en coton
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/pvm-vetements-coton.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;gants&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="#">
                <img class="ax-img-fluid" src="../images/articles/pvm-gants-accessoires.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Gants et autres acessoires
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/pvm-gants-autres-accessoires.php">VOIR PLUS</a>
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