<div class="page">
  <?php include(TEMPLATEPATH . '/header-insidePages.php'); ?>
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <div class="page__imageWrapper" data-stellar-background-ratio="0.0001" style="background: url('<?php echo hackeryou_get_thumbnail_url($post); ?>')">
            <div  class="page__headerWrapper">
              <h2 class="page__title"><?php the_title(); ?></h2>
            </div>
          </div>

          <div class="page__wrapper">
            <div class="page__row">
  
          <?php the_content(); ?>
  
        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
    </div> <!-- /.container -->
  </div> <!-- /.main -->
  
  <?php get_footer(); ?>