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
                <h1 class="banner-title">Instruments médicaux & chirurgicaux</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Instruments médicaux & chirurgicaux</li>
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
        Notre sélection d’instruments et de petit matériel médical pour professionnels, et particuliers. 
        Adaptée à vos besoins pour toute spécialité médicale, de la chirurgie à l’ORL, en passant par les soins dentaires, nos produits sauront répondre à vos attentes.
      </h4>
    </div>

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
            <input type="radio" name="shuffle-filter" id="oos" value="oos">Oto, Ophtalmo/scope
          </label>
          <label for="pesage">
            <input type="radio" name="shuffle-filter" id="pesage" value="pesage">Pesage
          </label>
          <label for="speculums">
            <input type="radio" name="shuffle-filter" id="speculums" value="speculums">Spéculums
          </label>
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


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;ecg&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    ECG
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;oos&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Oto, Ophtalmo/scope
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

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

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;speculums&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
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
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;stethoscopes&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Stéthoscopes
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;tensiometres&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Tensiomètres
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;thermometre&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Thermomètres
                  </h3>
                  <p class="project-cat">
                    <a href="../articles/projects-single.php">VOIR PLUS</a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;tests&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.jpg">
                <img class="img-fluid" src="../images/articles/egc.webp" alt="project-image">
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title" style="color: white;">
                    Tests & autres
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