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
      <div class="row bottom-buffer">
        <div class="col">
          <p>
            This area could be a fun introduction, like "he can do anything, he
            is the world's strongest man", etc. 
            Vivamus ornare mi diam, euismod aliquam urna imperdiet vitae. 
            Suspendisse ullamcorper molestie feugiat. Integer sed consectetur leo.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          </p>
        </div>
      </div>
      <div class="row skills bottom-buffer">
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
      <div class="row about-mini">
        <div class="col-xs-12 col-lg-4 text-center portrait">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/dad_and_charles.jpg'?>" alt="Picture of the world's strongest man">
        </div>
        <div class="col-xs-12 col-md-10 offset-md-1 offset-lg-0 col-lg-8">
          <p>
            This area could have some kind of description of you and where you work/live, 
            like "the world's strongest man lives in Ypsilanti, MI, and is 
            capable of lifting two very big trains. 
            He has an adorable dog named Charlie and a beautiful puff cat named Sam." 
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
