
<div class="singlePost">
<?php include(TEMPLATEPATH . '/header-insidePages.php'); ?>
  <div class="singlePost__wrapper">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
          <article class="blogMain__blogPost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="blogMain__imageContainer">
              <img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" />
            </div>
            <div class="blogMain__blogStats">
              <p class="blogMain__blogDate"><?php the_date() ?></p>
              <h2 class="blogMain__blogTitle">
            <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
              <?php the_title(); ?>
            </a>
            </h2>
            </div>
            <div class="blogMain__blogTypes">
              <i class="fa fa-user"></i>
              <p class="blogMain__blogAuthoer">Written by <a href=""><?php the_author(); ?></a></p>
              
              <p class="blogMain__blogTag"><i class="fa fa-tag"></i><?php the_category(); ?></p>
            </div>

          <div class="singlePost__postContent">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->
        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>