<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

		<article class="blogMain__blogPost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="blogMain__imageContainer">
			<img src="<?php echo hackeryou_get_thumbnail_url($post); ?>" />
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
			<section class="blogMain__blogContent">
				<?php the_excerpt('<div class="blogMain__readMore">Continue reading <span class="meta-nav">&rarr;</span></div>'); ?>
				
			</section><!-- .entry-content -->

		</article><!-- #post-## -->

		<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
