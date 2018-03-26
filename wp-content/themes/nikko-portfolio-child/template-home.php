<?php
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>

<main id="primary" class="" role="main">

  <?php
  if ( have_posts() ) :
  ?>
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

    ?>

    <!-- Start page main content -->
    
    <div class="container-fluid ">
      <div class="row">
        <div class="col">
          <p class="introduction">
            This area could be a fun introduction, like "he can do anything, he
            is the world's strongest man", etc. 
            Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
            Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          </p>
        </div>
      </div>
      <div class="row skills">
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <!-- voice -->
          <div class="card">
            <div class="card-body">
              <div class="icon">
              <i class="fas fa-microphone"></i>
              </div>
              <h5 class="card-title text-center">Voice</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
                Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
              </p>
              <a href="#" class="btn btn-outline-primary">Learn more</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <!-- voice -->
          <div class="card">
            <div class="card-body">
              <div class="icon">
                <i class="far fa-newspaper"></i>
              </div>
              <h5 class="card-title text-center">Writing</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
                Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
              </p>
              <a href="#" class="btn btn-outline-primary">Learn more</a>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
          <!-- voice -->
          <div class="card">
            <div class="card-body">
              <div class="icon">
                <i class="fas fa-music"></i>
              </div>
              <h5 class="card-title text-center">Music</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
                Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
              </p>
              <a href="#" class="btn btn-outline-primary">Learn more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-lg-4">
        </div>
        <div class="col-xs-12 col-lg-8">
          <p>
            This area could have some kind of description of you and where you work
            and live, like "the world's strongest man lives in Ypsilanti, MI, and has
            a small and very cute dog." 
            Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
            Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>

    <!-- End page main content -->
    <?php

    endwhile;

    get_template_part( 'partials/pagination' );

  else :

    get_template_part( 'partials/content', 'none' );

  endif; ?>

</main><!-- #primary -->

<?php

get_footer();
