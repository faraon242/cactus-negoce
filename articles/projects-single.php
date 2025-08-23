<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
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
                <h1 class="banner-title">XXX</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#">Nom de la catégorie</a></li>
                      <li class="breadcrumb-item"><a href="#">Nom de la sous-catégorie</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Designation de l'article</li>
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
      <div class="col-lg-8">
        <div id="page-slider" class="page-slider small-bg">
          <div class="item">
            <img loading="lazy" class="img-fluid" src="../images/articles/balances.jpg" alt="project-image" />
          </div>

          <div class="item">
            <img loading="lazy" class="img-fluid" src="../images/articles/egc.webp" alt="project-image" />
          </div>
        </div><!-- Page slider end -->
      </div><!-- Slider col end -->

      <div class="col-lg-4 mt-5 mt-lg-0">

        <h3 class="column-title mrt-0">Designation de l'article</h3>
        <p>Description</p>

        <ul class="project-info list-unstyled">
          <li>
            <p> <b>X</b> : xxxx xxx xx</p>
          </li>
          <li>
            <p> <b>X</b> : xxxx xxx xx</p>
          </li>
          <li>
            <p> <b>X</b> : xxxx xxx xx</p>
          </li>
          <li>
            <p> <b>X</b> : xxxx xxx xx</p>
          </li>
          <li>
            <p><b>X</b> : xxxx xxx xx</p>
          </li>
          <li>
            <p><b>X</b> : xxxx xxx xx</p>
          </li>
        </ul>

      </div><!-- Content col end -->

    </div><!-- Row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php @include('footer.php'); ?>

  <!-- Javascript Files -->
  <?php @include('../include/script.php'); ?>


  </div><!-- Body inner end -->
  </body>

  </html>