<?php 
				$travelPostQuery = new WP_Query( array(
						'posts_per_page' => 3,
						'category' => 'travel',
						'order' => 'ASC'
					));
			 ?>
			<?php // Start the loop ?>
					<?php if ( $travelPostQuery->have_posts() ) : ?>
		  	<?php while ($travelPostQuery->have_posts()) : $travelPostQuery->the_post(); ?>
		         
		  		<div class="blogArea__blogPost" data-stellar-background-ratio="0.0001" style="background-image: url('<?php echo hackeryou_get_thumbnail_url( $post ) ?>');">
					 		<div class="blogPost__textContainer">
					 				<h3 class="blogPost__heading"><?php the_title() ?></h3>
					 				<h5 class="blogPost__subHeading"><?php the_field('subtitle')?></h5>
					 		</div>
					 		<a class="blogPost__blogLink" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute());?>">Explore Tour</a>
			 	  </div>
			 	</div>

			 	</div>
			 	<?php endwhile; ?>	 	​
    <?php wp_reset_postdata(); ?>
    <?php else:  ?>
        [stuff that happens if there aren't any posts]
  <?php endif; ?>