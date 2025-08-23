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
                <h1 class="banner-title">Nom de la catégorie</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                      <li class="breadcrumb-item"><a href="#">Catégories</a></li>
                      <li class="breadcrumb-item"><a href="#"></a>Nom de la sous-catégorie</li>
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

      <div class="col-xl-3 col-lg-4">
        <div class="sidebar sidebar-left">
          <div class="widget">
            <h3 class="widget-title">Solutions</h3>
            <ul class="nav service-menu">
              <li class="active"><a href="#">Sous-catégorie 1</a></li>
              <li><a href="construction-batiments.php">Sous-catégorie 2</a></li>
              <li><a href="genie-civil.php">Sous-catégorie 3</a></li>
              <li><a href="mad-personnel.php">Sous-catégorie 4</a></li>
            </ul>
          </div><!-- Widget end -->

        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-xl-8 col-lg-8">
        <div class="content-inner-page">

          <h2 class="column-title mrt-0">Sous-catégorie 1</h2>

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider" >
            <div class="item">
              <img loading="lazy" class="img-fluid" src="../images/articles/audiometrie.jpg" alt="project-slider-image" style="height: 400px; width: 100%;"/>
            </div>

            <div class="item">
              <img loading="lazy" class="img-fluid" src="../images/articles/appareils-veto.avif" alt="project-slider-image" style="height: 400px; width: 100%;"/>
            </div>
          </div><!-- Page slider end -->

          <div class="row mt-4">
            <div class="col-md-6">
              <h3 class="column-title-small">Description</h3>
              <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat
              </p>
              <!--ul class="list-arrow">
                <li>Partnership Strategy tristique eleifend.</li>
                <li>Opporutnity to work with amet elit a.</li>
                <li>Saving Time to Deal with commodo iaculis.</li>
                <li>Leadership skills to manage erat volutpat.</li>
                <li>Cut cost without sacrificing dolore magna.</li>
                <li>Automate your business elis tristique.</li>
              </ul-->
            </div>
          </div>

          <div class="call-to-action classic mt-4" style="background-color: rgb(0, 140, 200);">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Cliquez ici pour voir les produits de cette catégorie</h3>
                </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="../articles/projects-single.php">VOIR</a>
                </div>
              </div><!-- col end -->
            </div><!-- row end -->
          </div><!-- Action end -->

        </div><!-- Content inner end -->
      </div><!-- Content Col end -->


    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php @include('../include/footer.php'); ?>


  <!-- Javascript Files -->
  <?php @include('../include/script.php'); ?>

  </div><!-- Body inner end -->
  </body>

  </html>