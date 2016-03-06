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
            <div class="page__pageContent">
  
          <?php the_content(); ?>
  
        <?php endwhile; // end the loop?>
            </div> <!-- /.row-->
            <div class="page__members">
              <div class="page__memberCard">
                <div class="memberCard__imageContainer">
                  <?php 
                    $memberImage1 = get_field('member_photo_1');
                    if( !empty($memberImage1) ): ?>
                    <img src="<?php echo $memberImage1['url']; ?>" alt="<?php echo $memberImage1['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="memberCard__textContainer">
                  <h4 class="memberCard__name"><?php the_field('member_name_1') ?></h4>
                  <h5 class="memberCard__title"><?php the_field('member_title_1') ?></h5>
                  <p class="memberCard__description"><?php the_field('member_description_1') ?></p>
                </div>
              </div>

              <div class="page__memberCard">
                <div class="memberCard__imageContainer">
                  <?php 
                    $memberImage2 = get_field('member_photo_2');
                    if( !empty($memberImage2) ): ?>
                    <img src="<?php echo $memberImage2['url']; ?>" alt="<?php echo $memberImage2['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="memberCard__textContainer">
                  <h4 class="memberCard__name"><?php the_field('member_name_2') ?></h4>
                  <h5 class="memberCard__title"><?php the_field('member_title_2') ?></h5>
                  <p class="memberCard__description"><?php the_field('member_description_2') ?></p>
                </div>
              </div>

              <div class="page__memberCard">
                <div class="memberCard__imageContainer">
                  <?php 
                    $memberImage3 = get_field('member_photo_3');
                    if( !empty($memberImage3) ): ?>
                    <img src="<?php echo $memberImage3['url']; ?>" alt="<?php echo $memberImage3['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="memberCard__textContainer">
                  <h4 class="memberCard__name"><?php the_field('member_name_3') ?></h4>
                  <h5 class="memberCard__title"><?php the_field('member_title_3') ?></h5>
                  <p class="memberCard__description"><?php the_field('member_description_3') ?></p>
                </div>
              </div>
            </div>
    </div> <!-- /.wrapper-->
  </div> <!-- /.main -->
  
  <?php get_footer(); ?>