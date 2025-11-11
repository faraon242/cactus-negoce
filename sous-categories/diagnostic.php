<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cactus Négoce - Diagnostic</title>
  <?php @include('../include/head.php'); ?>
</head>

<style>
  .ax-img-fluid{
  height: 300px;
}
</style>

<body>

<div class="body-inner">

<?php @include('header.php'); ?>

<div id="banner-area" class="banner-area" style="background-image:url(../images/banner/categories-banner.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Diagnostic</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Diagnostic</li>
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
          <label for="ecg">
            <input type="radio" name="shuffle-filter" id="ecg" value="ecg">ECG
          </label>
          <label for="oos">
            <input type="radio" name="shuffle-filter" id="oos" value="oos">Oto/Ophtalmoscope
          </label>
          <label for="pesage">
            <input type="radio" name="shuffle-filter" id="pesage" value="pesage">Pesage
          </label>
          <!--label for="speculums">
            <input type="radio" name="shuffle-filter" id="speculums" value="speculums">Spéculums
          </label-->
          <label for="stethoscopes">
            <input type="radio" name="shuffle-filter" id="stethoscopes" value="stethoscopes">Stéthoscopes
          </label>
          <label for="tensiometres">
            <input type="radio" name="shuffle-filter" id="tensiometres" value="tensiometres">Tensiomètres
          </label>
          <label for="thermometre">
            <input type="radio" name="shuffle-filter" id="thermometre" value="thermometre">Thermomètres
          </label>
          <label for="tests">
            <input type="radio" name="shuffle-filter" id="tests" value="tests">Tests et autres
          </label>
        </div><!-- project filter end -->

        <blockquote>
          <p>
            Du diagnostic généraliste au diagnostic spécialisé, retrouvez les appareils et outils dont vous avez besoin. 
            Cactus Négoce vous propose ainsi, des spéculums, stéthoscopes, tensiomètres et autres otoscopes. Mais également une gamme complète de tests rapides, ainsi que des ECG.
          </p>
        </blockquote>


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;ecg&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    ECG
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/ecg-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;oos&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/oto-ophtalmoscope-ri-mini-couleur-noire.jpg" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Oto/OphtalmoScope
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/ophtamoscope-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;pesage&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/pesage-balance-laboratoire.png" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Pesage
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/pesage-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!--div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;speculums&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/speculum-jetable.png" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Spéculums
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div-->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;stethoscopes&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/stethoscopes.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Stéthoscopes
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/stethoscopes-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;tensiometres&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/tensiometres.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Tensiomètres
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/tensiometres-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;thermometre&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/Thermometer.avif" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Thermomètres
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/thermometres-page-1.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;tests&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="ax-img-fluid img-fluid" src="../images/categories/tests-et-autres.png" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Tests & autres
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/tests-autres-page-1.php">VOIR PLUS</a>
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